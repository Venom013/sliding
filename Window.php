<?php

declare(strict_types=1);

final class Window
{
    public const WINDOWS_IN_1_ROW = 0;
    public const WINDOWS_IN_2_ROWS = 1;

    public const OPEN_DIRECTION_NONE = 0;
    public const OPEN_DIRECTION_TOP = 1;
    public const OPEN_DIRECTION_LEFT = 2;
    public const OPEN_DIRECTION_RIGHT = 3;
    public const OPEN_DIRECTION_LEFT_TOP = 4;
    public const OPEN_DIRECTION_RIGHT_TOP = 5;

    public const MOVE_DIRECTION_NONE = 0;
    public const MOVE_DIRECTION_LEFT = 1;
    public const MOVE_DIRECTION_RIGHT = 2;

    private const OPEN_DIRECTIONS = [
        self::OPEN_DIRECTION_TOP => ['top' => true, 'left' => false, 'right' => false],
        self::OPEN_DIRECTION_LEFT => ['top' => false, 'left' => true, 'right' => false],
        self::OPEN_DIRECTION_RIGHT => ['top' => false, 'left' => false, 'right' => true],
        self::OPEN_DIRECTION_LEFT_TOP => ['top' => true, 'left' => true, 'right' => false],
        self::OPEN_DIRECTION_RIGHT_TOP => ['top' => true, 'left' => false, 'right' => true],
    ];

    private const WINDOW = 0;
    private const DOOR = 1;
    private const HST = 2;
    private const FS = 3;
    private const PSK = 4;

    private const FONT = __DIR__ . '/fonts/UbuntuCondensed-Regular.ttf';

    // Максимальный размер выводимого изображения по ширине и высоте
    private const IMAGE_SIZE = 1000;
    
    private const BORDER_SIZE = 50;

    private int $orientation;

    private int $lineSize = 2;
    private int $handleWidth = 14;
    private int $handleHeight = 14;

    private int $borderSize = 0;
    private int $gray = 0;
    private int $white = 0;
    private int $black = 0;
    private array $windows = [];
    private ?GdImage $image = null;

    public function __construct(int $orientation = self::WINDOWS_IN_1_ROW)
    {
        $this->orientation = $orientation;
    }

    public function addWindow(int $width, int $height, int $openDirection = self::OPEN_DIRECTION_NONE): void
    {
        $this->windows[] = [
            'type' => self::WINDOW,
            'width' => $width,
            'height' => $height,
            'openDirection' => $openDirection,
        ];
    }

    public function addDoor(int $width, int $height, int $openDirection, int $pvcHeight): void
    {
        $this->windows[] = [
            'type' => self::DOOR,
            'width' => $width,
            'height' => $height,
            'openDirection' => $openDirection,
            'pvcHeight' => $pvcHeight,
        ];
    }

    public function addHST(int $width, int $height, int $moveDirection = self::MOVE_DIRECTION_NONE): void
    {
        $this->windows[] = [
            'type' => self::HST,
            'width' => $width,
            'height' => $height,
            'moveDirection' => $moveDirection,
        ];
    }

    public function addFS(int $width, int $height, int $moveDirection = self::MOVE_DIRECTION_NONE, int $openDirection = self::OPEN_DIRECTION_NONE): void
    {
        $this->windows[] = [
            'type' => self::FS,
            'width' => $width,
            'height' => $height,
            'openDirection' => $openDirection,
            'moveDirection' => $moveDirection,
        ];
    }

    public function addPSK(int $width, int $height, int $moveDirection = self::MOVE_DIRECTION_NONE): void
    {
        $this->windows[] = [
            'type' => self::PSK,
            'width' => $width,
            'height' => $height,
            'moveDirection' => $moveDirection,
        ];
    }

    public function paint(): GdImage
    {
        if (empty($this->windows)) {
            throw new \Exception('Нет окон для рисования');
        }

        $windowWidth = 0;
        $windowHeight = 0;

        // вычисляем размеры
        foreach ($this->windows as $index => $window) {
            if ($index === 0) {
                $windowHeight += $window['height'];
            }

            if ($this->orientation === self::WINDOWS_IN_2_ROWS && $index === 1) {
                $windowHeight += $window['height'];
            }

            if ($this->orientation === self::WINDOWS_IN_2_ROWS && $index === 0) {
                continue;
            }

            $windowWidth += $window['width'];
        }

        // защита от нуля
        if ($windowHeight === 0) {
            $windowHeight = 1;
        }

        $ratio = $windowWidth / $windowHeight;

        if ($ratio > 1) {
            $imageRatio = self::IMAGE_SIZE / $windowWidth;
            $width = self::IMAGE_SIZE;
            $height = (int)round(self::IMAGE_SIZE / $ratio);
        } else {
            $imageRatio = self::IMAGE_SIZE / $windowHeight;
            $width = (int)(self::IMAGE_SIZE * $ratio);
            $height = self::IMAGE_SIZE;
        }

        foreach ($this->windows as $index => $window) {
            $this->windows[$index]['width'] = (int)round($window['width'] * $imageRatio);
            $this->windows[$index]['height'] = (int)round($window['height'] * $imageRatio);
        }

        $this->borderSize = max(1, (int)round($imageRatio * self::BORDER_SIZE));

        $this->image = imagecreatetruecolor($width, $height);

        $this->gray = imagecolorallocate($this->image, 127, 127, 127);
        $this->white = imagecolorallocate($this->image, 255, 255, 255);
        $this->black = imagecolorallocate($this->image, 0, 0, 0);

        imagefill($this->image, 0, 0, $this->white);

        // Делаем серый контур
        for ($i = 0; $i < $this->lineSize; ++$i) {
            imagerectangle($this->image, $i, $i, $width - $i - 1, $height - $i - 1, $this->gray);
        }

        $beforeWidth = 0;
        $beforeHeight = 0;

        foreach ($this->windows as $index => $window) {
            $this->draw(
                $window,
                $beforeWidth,
                $beforeHeight,
                $beforeWidth + $window['width'],
                $beforeHeight + $window['height'],
            );

            if ($this->orientation === self::WINDOWS_IN_1_ROW) {
                $beforeWidth += $window['width'];
            } elseif ($this->orientation === self::WINDOWS_IN_2_ROWS) {
                if ($index === 0) {
                    $beforeHeight += $window['height'];
                } else {
                    $beforeWidth += $window['width'];
                }
            }
        }

        return $this->image;
    }

    /* private function draw(array $window, int $x1, int $y1, int $x2, int $y2): void
    {
        $this->rama($x1, $y1, $x2, $y2, false);
        $this->ramaLines($x1, $y1, $x2, $y2);
        $this->gradient($x1 + $this->borderSize, $y1 + $this->borderSize, $x2 - $this->borderSize, $y2 - $this->borderSize);

        if ($window['type'] === self::DOOR) {
            if (array_key_exists($window['openDirection'], self::OPEN_DIRECTIONS)) {
                $border = (int)round($this->borderSize / 1.5) + $this->borderSize;
            } else {
                $border = 0;
            }

            imagefilledrectangle(
                $this->image,
                $x2 - $border,
                $y2 - $border,
                $x1 + $border,
                $y2 - $border - $window['pvcHeight'],
                $this->gray
            );

            imagettftext(
                $this->image,
                (int)round($window['pvcHeight'] * 0.8),
                0,
                (int)round(($x1 + $x2) / 2 - (int)round($window['pvcHeight'] * 0.8)),
                $y2 - $border - (int)round($window['pvcHeight'] * 0.1),
                $this->white,
                self::FONT,
                'PVC'
            );

            imageline($this->image, $x2 - $border, $y2 - $border - $window['pvcHeight'], $x1 + $border, $y2 - $border - $window['pvcHeight'], $border);
        }


        if (isset($window['moveDirection'])) {
            $this->moveWindow($x1, $y1, $x2, $y2, $window['moveDirection']);
        }

        if (isset($window['openDirection']) && array_key_exists($window['openDirection'], self::OPEN_DIRECTIONS)) {
            $this->openWindow($x1, $y1, $x2, $y2, $window['openDirection'], $window['type'] !== self::FS);
        }
    } */
    private function draw(array $window, int $x1, int $y1, int $x2, int $y2): void
    {
        $this->rama($x1, $y1, $x2, $y2, false);
        $this->ramaLines($x1, $y1, $x2, $y2);
        $this->gradient($x1 + $this->borderSize, $y1 + $this->borderSize, $x2 - $this->borderSize, $y2 - $this->borderSize);

        if ($window['type'] === self::DOOR) {
            // ... существующий код для двери ...
        }

        // УБРАТЬ РАННИЙ RETURN ДЛЯ FS ОКОН!
        // БЫЛО:
        // if ($window['type'] === self::FS) {
        //     // ... код для FS ...
        //     return; // <- ЭТОТ RETURN ПРЕРЫВАЛ ОТРИСОВКУ
        // }
        
        // СТАЛО:
        if ($window['type'] === self::FS) {
            // Для FS окон рисуем и стрелки, и открывание (если указаны)
            if (isset($window['moveDirection'])) {
                $this->moveWindow($x1, $y1, $x2, $y2, $window['moveDirection']);
            }
            
            if (isset($window['openDirection']) && array_key_exists($window['openDirection'], self::OPEN_DIRECTIONS)) {
                $this->openWindow($x1, $y1, $x2, $y2, $window['openDirection'], false);
            }
        } else {
            // Для других типов окон
            if (isset($window['moveDirection'])) {
                $this->moveWindow($x1, $y1, $x2, $y2, $window['moveDirection']);
            }

            if (isset($window['openDirection']) && array_key_exists($window['openDirection'], self::OPEN_DIRECTIONS)) {
                $this->openWindow($x1, $y1, $x2, $y2, $window['openDirection'], true);
            }
        }
    }
    private function gradient(int $x1, int $y1, int $x2, int $y2): void
    {
        // Градиент от белого к #04bbff
        for ($i = $y1; $i <= $y2; ++$i) {
            // Пропорциональное изменение значений для плавного перехода от белого к голубому
            $r = 255 - ($i * (255 - 4) / $y2);   // Переход от 255 к 4
            $g = 255 - ($i * (255 - 187) / $y2); // Переход от 255 к 187
            $b = 255 - ($i * (255 - 255) / $y2); // Переход от 255 к 255 (синий остается максимальным)

            // Создание цвета для текущей линии
            $color = imagecolorallocate($this->image, (int)round($r), (int)round($g), (int)round($b));

            // Рисование линии градиента
            imageline($this->image, $x1, $i, $x2, $i, $color);
        }
    }

    private function rama(int $x1, int $y1, int $x2, int $y2, bool $fill): void
    {
        // рисуем вокруг градиента белый квадрат
        for ($i = 0; $i < $this->borderSize; ++$i) {
            if ($i === 0 || $i + 1 === $this->borderSize) {
                imagerectangle($this->image, $x1 + $i, $y1 + $i, $x2 - $i, $y2 - $i, $this->gray);
            } elseif ($fill) {
                imagerectangle($this->image, $x1 + $i, $y1 + $i, $x2 - $i, $y2 - $i, $this->white);
            }
        }
    }

    private function ramaLines(int $x1, int $y1, int $x2, int $y2): void
    {
        // Линии от углов для рамки

        // Левый верхний
        imageline($this->image, $x1, $y1, $x1 + $this->borderSize, $y1 + $this->borderSize, $this->gray);

        // Левый нижний
        imageline($this->image, $x1, $y2, $x1 + $this->borderSize, $y2 - $this->borderSize, $this->gray);

        // Правый верхний
        imageline($this->image, $x2, $y1, $x2 - $this->borderSize, $y1 + $this->borderSize, $this->gray);

        // Правый нижний
        imageline($this->image, $x2, $y2, $x2 - $this->borderSize, $y2 - $this->borderSize, $this->gray);
    }

    private function openWindow(int $x1, int $y1, int $x2, int $y2, int $openDirection, bool $drawLines): void
    {
        // Рисуем вокруг градиента белый квадрат
        $partBorder = (int)round($this->borderSize / 1.5);

        $this->rama($x1 + $partBorder, $y1 + $partBorder, $x2 - $partBorder, $y2 - $partBorder, true);
        $this->ramaLines($x1 + $partBorder, $y1 + $partBorder, $x2 - $partBorder, $y2 - $partBorder);

        $centerX = (int)round(($x1 + $partBorder + $this->borderSize + $x2 - $this->borderSize - $partBorder) / 2);
        $centerY = (int)round(($y1 + $partBorder + $this->borderSize + $y2 - $this->borderSize - $partBorder) / 2);
        $centerHandleX = (int)round($this->handleHeight / 2);
        $centerHandleY = (int)round($this->handleWidth / 2);

        if ($drawLines) {
            if (self::OPEN_DIRECTIONS[$openDirection]['top']) {
                imageline($this->image, $x2 - $this->borderSize - $partBorder, $y2 - $this->borderSize - $partBorder, $centerX, $y1 + $partBorder + $this->borderSize, $this->black);
                imageline($this->image, $x1 + $partBorder + $this->borderSize, $y2 - $this->borderSize - $partBorder, $centerX, $y1 + $partBorder + $this->borderSize, $this->black);
            }

            if (self::OPEN_DIRECTIONS[$openDirection]['left']) {
                imageline($this->image, $x2 - $this->borderSize - $partBorder, $y2 - $this->borderSize - $partBorder, $x1 + $this->borderSize + $partBorder, $centerY, $this->black);
                imageline($this->image, $x2 - $this->borderSize - $partBorder, $y1 + $this->borderSize + $partBorder, $x1 + $this->borderSize + $partBorder, $centerY, $this->black);
            }

            if (self::OPEN_DIRECTIONS[$openDirection]['right']) {
                imageline($this->image, $x1 + $this->borderSize + $partBorder, $y1 + $this->borderSize + $partBorder, $x2 - $this->borderSize - $partBorder, $centerY, $this->black);
                imageline($this->image, $x1 + $this->borderSize + $partBorder, $y2 - $this->borderSize - $partBorder, $x2 - $this->borderSize - $partBorder, $centerY, $this->black);
            }
        }

        if (self::OPEN_DIRECTIONS[$openDirection]['left']) {
            $this->handle($x1 + $this->lineSize + $partBorder + 2, $centerY - $centerHandleY, $this->handleWidth, $this->handleHeight);
        } elseif (self::OPEN_DIRECTIONS[$openDirection]['right']) {
            $this->handle($x2 - $partBorder * 2 - $centerHandleY, $centerY - $centerHandleY, $this->handleWidth, $this->handleHeight);
        } elseif (self::OPEN_DIRECTIONS[$openDirection]['top']) {
            $this->handle($centerX - $centerHandleX, $y1 + $partBorder + 2, $this->handleWidth, $this->handleHeight);
        }
    }
    
    private function moveWindow(int $x1, int $y1, int $x2, int $y2, int $moveDirection): void
    {
        
        if ($moveDirection === self::MOVE_DIRECTION_NONE) {
            return;
        }

        // Рисуем вокруг градиента белый квадрат
        $partBorder = (int)round($this->borderSize / 1.5);

        $this->rama($x1 + $partBorder, $y1 + $partBorder, $x2 - $partBorder, $y2 - $partBorder, true);
        $this->ramaLines($x1 + $partBorder, $y1 + $partBorder, $x2 - $partBorder, $y2 - $partBorder);

        $arrow = [];

        if ($moveDirection === self::MOVE_DIRECTION_LEFT) {
            $arrow = ['<', '-', '-', '-', '-', '-', '-',];
        }

        if ($moveDirection === self::MOVE_DIRECTION_RIGHT) {
            $arrow = ['-', '-', '-', '-', '-', '-', '>'];
        }

        $offsetX = 0;
        $fontSize = (int)round(($x2 - $x1) * 0.25);
        $fontX = (int)round(($x1 + $x2) * 0.5);
        $fontY = (int)round(($y1 + $y2) * 0.8);
        $lastArrowIndex = array_key_last($arrow);

        foreach ($arrow as $index => $char) {
            if ($moveDirection === self::MOVE_DIRECTION_LEFT) {
                if ($index === 1) {
                    $offsetX += (int)round($fontSize * 0.14);
                } else {
                    $offsetX += (int)round($fontSize * 0.24);
                }
            }

            if ($moveDirection === self::MOVE_DIRECTION_RIGHT) {
                if ($index === $lastArrowIndex) {
                    $offsetX -= (int)round($fontSize * 0.15);
                } else {
                    $offsetX += (int)round($fontSize * 0.24);
                }
            }

            imagettftext(
                $this->image,
                $fontSize,
                0,
                $fontX + $offsetX,
                $fontY,
                $this->black,
                self::FONT,
                $char
            );
        }
        // Проверка шрифта
    if (file_exists(self::FONT)) {
        // Используем шрифт
        imagettftext($this->image, $fontSize, 0, $fontX + $offsetX, $fontY, $this->black, self::FONT, $char);
    } else {
        // Fallback: простые символы без шрифта
        $color = imagecolorallocate($this->image, 0, 0, 0);
        imagestring($this->image, 5, $fontX + $offsetX, $fontY - $fontSize/2, $char, $color);
    }
    }

    private function handle(int $x1, int $y1, int $x2, int $y2): void
    {
        // Рисуем крепление ручки
        $points = [
            $x1, $y1,
            $x1 + $x2, $y1,
            $x1 + $x2, $y1 + $y2,
            $x1 + round($x2 / 2), $y1 + $y2 + round($x2 / 2),
            $x1, $y1 + $y2,
        ];

        if (PHP_VERSION_ID >= 80100) {
            imagefilledpolygon($this->image, $points, $this->white);
            imagepolygon($this->image, $points, $this->black);
        } else {
            imagefilledpolygon($this->image, $points, count($points) / 2, $this->white);
            imagepolygon($this->image, $points, count($points) / 2, $this->black);
        }

        $handleRatio = round($x2 * 0.3);

        // Рисуем ручку
        $points = [
            $x1 + $handleRatio, $y1 + $handleRatio,
            $x1 + $x2 - $handleRatio, $y1 + $handleRatio,
            $x1 + $x2 - $handleRatio, $y1 + $y2 + $handleRatio * 6 + 1,
            $x1 + $x2 - $handleRatio - 1, $y1 + $y2 + $handleRatio * 6 + 3,
            $x1 + $x2 - $handleRatio - 3, $y1 + $y2 + $handleRatio * 6 + 5,
            $x1 + $x2 - $handleRatio - 4, $y1 + $y2 + $handleRatio * 6 + 5,
            $x1 + $handleRatio + 2, $y1 + $y2 + $handleRatio * 6 + 5,
            $x1 + $handleRatio, $y1 + $y2 + $handleRatio * 6 + 1,
        ];

        if (PHP_VERSION_ID >= 80100) {
            imagefilledpolygon($this->image, $points, $this->white);
            imagepolygon($this->image, $points, $this->black);
        } else {
            imagefilledpolygon($this->image, $points, count($points) / 2, $this->white);
            imagepolygon($this->image, $points, count($points) / 2, $this->black);
        }
    }
}
