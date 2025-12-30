<?php
/*
Template name: Страница спасибо
*/

get_header();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL & ~E_NOTICE);
set_time_limit(0);

$Back = esc_html__('Back', 'hello-elementor-child');
$messageText = esc_html__('Массив пустой!', 'hello-elementor-child');

if (!$_POST) {
    // Используем конкатенацию для обеих переменных
    die($messageText . '<br><a href="/arutech/windows-price-request/">' . $Back . '</a>');
}

$dompdf_inc = __DIR__  . '/inc/dompdf/autoload.inc.php';

require __DIR__ . '/adapter.php';

require_once $dompdf_inc;

$order_num_name = __('Price inquiry', 'hello-elementor-child');


/* Генерируй номер */

$num_acc = (int) get_option('last_invoice', 0) + 1;
update_option('last_invoice', $num_acc);


/* Генерируй номер */




$message = '
<html>
<head>
<style>body { font-family: DejaVu Sans }</style>
  <title>Заголовок письма</title>
</head>
<body>
<img src="https://wp-prog.ru/arutech/wp-content/uploads/2025/10/logo.svg" alt="" width="20%" />
<h1> ' . $order_num_name . ' № ' . $num_acc . '</h1><br>';


$message .= '<hr><br><table border="0" cellpadding="7" style="border-collapse:collapse;">';



$array_address = [];
$array_contact = [];

foreach ($_POST as $key => $item) {
    $item = trim((string)$item);

    if (empty($item)) {
        continue;
    }

    $saveItem = false;
    $labels = array_map(function($item) {
        return $item['label'];
    }, PDF_PARAMS);

    foreach (PDF_PARAMS as $params) {
        if ($params['type'] === $_POST['aken_type'] && $params['label'] === $key) {
            $saveItem = true;
        }

        if (array_search($key, $labels) === false) {
            $saveItem = true;
        }
    }

    if (!$saveItem) {
        continue;
    }

    $key = htmlspecialchars($key);
    $item = htmlspecialchars($item);

    $message .= '<tr>';
    if (strpos($key, 'order_image') !== false) {
        $message .= "<td style='padding-top: 30px;'>window</td>";
        // Генерируем изображение
    $imageData = generateImage();
    if ($imageData) {
        // Правильное кодирование в base64
        $img = '<img src="data:image/png;base64,' . base64_encode($imageData) . '" alt="Window" style="max-width: 200px;" />';
        $message .= "<td style='padding-top: 30px;'>$img</td>";
    } else {
        $message .= "<td style='padding-top: 30px;'>Изображение не сгенерировано</td>";
    }
    } elseif (
        $key == 'Lisateenused' || $key == 'Millisele_aadressile?'
    ) {
        $array_address[$key] = $item;
    } elseif (
        $key == 'Perekonnanimi' ||
        $key == 'Nimi' ||
        $key == 'E-mail' ||
        $key == 'Tel_number' ||
        $key == 'Teenindav_muugiosakond'
    ) {
        $array_contact[$key] = $item;
    } elseif (strpos($key, 'Kogus') !== false) {
        $message .= "<td style='border-bottom: 2px solid;'>$key</td>";
        $message .= "<td style='border-bottom: 2px solid;'>$item</td>";
    } else {
        $message .= "<td>$key</td>";
        $message .= "<td>$item</td>";
    }
    $message .= '</tr>';
}

$message .= '</table>';

$message .= '<h2 style="margin-top: 50px;">Lisateenused</h2>';
$message .= '<hr>';
$message .= '<table border="0" cellpadding="7" style="border-collapse:collapse;">';
foreach ($array_address as $key => $item) {
    $message .= '<tr>';
    $message .= "<td>$key</td>";
    $message .= "<td>$item</td>";
    $message .= '</tr>';
}
$message .= '</table>';

$message .= '<h2 style="margin-top: 50px;">Kontaktandmed</h2>';
$message .= '<hr>';
$message .= '<table border="0" cellpadding="7" style="border-collapse:collapse;">';
foreach ($array_contact as $key => $item) {
    $message .= '<tr>';
    $message .= "<td>$key</td>";
    $message .= "<td>$item</td>";
    $message .= '</tr>';
}
$message .= '</table>';


$message .= '</body>';
$message .= '</html>';


$dompdf = new Dompdf\Dompdf();
$dompdf->set_option('isRemoteEnabled', TRUE);

$dompdf->setPaper('A4', 'portrait');
$dompdf->loadHtml($message, 'UTF-8');
$dompdf->render();



// Или сохранение на сервере:
$pdf = $dompdf->output();
file_put_contents(__DIR__ . '/schet.pdf', $pdf);

$path = __DIR__ . '/schet.pdf'; // файл
$from = "sales@fakt-group.ru"; // от кого
$thema = "Номер счета: $num_acc";
$mail_to = 'advertrost2017@gmail.com,' . $_POST['Teenindav_muugiosakond'] . ',' . $_POST['E-mail'];


$baseUrl_esaPDF = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$relativePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $path);
$pdfUrl = $baseUrl_esaPDF . $relativePath;
$pdfUrl = $baseUrl_esaPDF . str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__) . '/schet.pdf';

// Получаем переводы
$thank_you = esc_html__('Thank You!', 'hello-elementor-child');
$message = esc_html__('Your price request is sent! We will contact you in the earliest time available to send our price offer.', 'hello-elementor-child');
$message2 = esc_html__('You can print your price request or start a new one.', 'hello-elementor-child');
$export = esc_html__('Экспорт', 'hello-elementor-child');
$email_label = esc_html__('Электронная почта:', 'hello-elementor-child');
$new_request = esc_html__('Begin new price request', 'hello-elementor-child');
$print_request = esc_html__('Print current price request', 'hello-elementor-child');

// Экранируем URL для JS
$escapedPdfUrl = esc_js($pdfUrl);


$html = '
<div class="mess_thanks">
<h2>' . $thank_you . '</h2>
' . $message . '<br>
<br>
' . $message2 . '<br>

<div class="btn_thanks">
<a href="/arutech/windows-price-request/" class="btn_new_request">' . $new_request . '</a>
<a href="#" onclick="printPDF(\'' . $escapedPdfUrl . '\'); return false;" class="btn_print_request">' . $print_request . '</a>
</div>
</div>
<script>
function printPDF(pdfUrl) {
  const printWindow = window.open(pdfUrl);
  printWindow.onload = function() {
    printWindow.print();
  };
}
</script>
';



if (send_mail($mail_to, $thema, $html, $path)) {
    echo $html;
    // echo '<a href="https://wp-prog.ru/aru">Назад</a>';
    get_footer();
} else {
    echo 'Ошибка отправления';
}

// функция отправки письма
function send_mail($mail_to, $thema, $html, $path)
{
    if ($path) {
        $fp = fopen($path, "rb");
        if (!$fp) {
            print "Cannot open file";
            exit();
        }
        $file = fread($fp, filesize($path));
        fclose($fp);
    }
    $name = "schet.pdf"; // в этой переменной надо сформировать имя файла (без всякого пути)  
    $EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём
    $boundary     = "--" . md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.  
    $headers    = "MIME-Version: 1.0;$EOL";
    $headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";
    $headers   .= "From: address@server.com";

    $multipart  = "--$boundary$EOL";
    $multipart .= "Content-Type: text/html; charset=utf-8$EOL";
    $multipart .= "Content-Transfer-Encoding: base64$EOL";
    $multipart .= $EOL; // раздел между заголовками и телом html-части 
    $multipart .= chunk_split(base64_encode($html));

    $multipart .=  "$EOL--$boundary$EOL";
    $multipart .= "Content-Type: application/octet-stream; name=\"$name\"$EOL";
    $multipart .= "Content-Transfer-Encoding: base64$EOL";
    $multipart .= "Content-Disposition: attachment; filename=\"$name\"$EOL";
    $multipart .= $EOL; // раздел между заголовками и телом прикрепленного файла 
    $multipart .= chunk_split(base64_encode($file));

    $multipart .= "$EOL--$boundary--$EOL";

    if (!mail($mail_to, $thema, $multipart, $headers)) {
        return False;           //если не письмо не отправлено
    } else { //// если письмо отправлено
        return True;
    }
}

exit;

require_once "dompdf/autoload.inc.php";

use Dompdf\Dompdf;

include "translations.php";

$isamblik = $_SERVER['REMOTE_ADDR'] == '217.159.151.90';
$domain_name = $_SERVER['SERVER_NAME'];

$headers = array('Content-Type: text/html; charset=UTF-8');

if ($_GET['type'] == 'metal-door-request') {
    $full_body = $content;
    $full_body .= "<br><br><br><table>";
    foreach ($_GET as $key => $value) {

        switch ($key) {
            case 'url':
                $key = $metal_door_url;
                $value = "<a href=" . $value . ">" . $value . "</a>";
                break;
            case 'namme':
                $key = $metal_door_name;
                break;
            case 'tel':
                $key = $metal_door_tel;
                break;
            case 'email':
                $key = $metal_door_email;
                break;
            case 'info':
                $key = $metal_door_info;
                break;
                // case 'branch': $key = $metal_door_branch; break;
        }

        if ($key == 'type' || $key == 'q' || $key == 'branch')
            continue;

        $full_body .= "<tr>";
        $full_body .= '<td>' . $key . ':</td><td>' . $value . '</td>';
        $full_body .= "</tr>";
    }
    $full_body .= "</table>";


    if ($isamblik)
        wp_mail($_GET['email'], '[Metal-door request]', $full_body, $headers);
    else {
        wp_mail($_GET['email'], '[Metal-door request]', $full_body, $headers);
        wp_mail('ask@aruhaus.eu', '[Metal-door request]', $full_body, $headers);
        wp_mail('kontroll@arutech.ee', '[Metal-door request]', $full_body, $headers);
    }
} else if (!empty($_POST)) {
    echo '<input type="hidden" id="post_form" name="post_form" value="1">';
    $lisateenused = $_POST['Lisateenused'];
    $Millisele_aadressile = $_POST['Millisele_aadressile?'];
    $perekonnanimi = $_POST['Perekonnanimi'];
    $nimi = $_POST['Nimi'];
    $mail = $_POST['E-mail'];
    $tel = $_POST['Tel_number'];
    $teenindav_muugiosakond = $_POST['Teenindav_muugiosakond'];

    unset($_POST['Nimi']);
    unset($_POST['E-mail']);
    unset($_POST['Tel_number']);
    unset($_POST['Teenindav_muugiosakond']);
    unset($_POST['Perekonnanimi']);
    unset($_POST['Millisele_aadressile?']);
    unset($_POST['Lisateenused']);
    $horizont = $_POST['Ukse_avatavus' . $count] == 'Right-sliding' ? '-moz-transform: scale(-1, 1);-webkit-transform: scale(-1, 1);-o-transform: scale(-1, 1);transform: scale(-1, 1);filter: FlipH; -ms-filter: "FlipH";' : '';
    $full_body = '<div id="request-repo"><div id="request-items"><hr><table data-count="1" class="repo-item"><tbody>';
    $akenqua = 0;
    $firstIsAdd = false;

    for ($i = 0; $i <= 12; ++$i)
        if (!empty($_POST["aken_type" . $i]))
            $akenqua = $i;

    $akenqua += 1;
    for ($i = 1; $i <= $akenqua; ++$i) {

        $count = $i;

        if (empty($_POST["aken_type" . $count])) {
            if ($firstIsAdd == false) {
                $count = "";
                $firstIsAdd = true;
            } else
                continue;
        }

        $special_type_name = (strpos($_POST["aken_type" . $count], 'Schema') != false || strpos($_POST["aken_type" . $count], 'schema') != false || strpos($_POST["aken_type" . $count], 'scheme') != false || strpos($_POST["aken_type" . $count], 'Scheme') != false) ? $ukse_type_name : $aken_type_name;

        /* if ($special_type_name == $aken_type_name) {
            $img = '<img src="data:image/png;base64,' . base64_encode(generateImage()) . '" alt="hi" width="50%" />';
        } else {
            $svg_name = $_POST["aken_type" . $count];
            $svg_name = str_replace('Scheme', 'Schema', $svg_name);
            $svg_name = str_replace('scheme', 'Schema', $svg_name);
            $img = '<img src="https://' . $domain_name . '/wp-content/test6/req-form-files/door-types/' . $svg_name . '.png" style="' . $horizont . '">';
        } */

        $full_body .= '<tr style="margin-top:20px"><th style="margin-top:20px">' . $special_type_name . ':</th><th style="margin-top:20px">' . $img . '</th></tr>';


        if (!empty($_POST['Erikujulist_akent_kirjeldus' . $i])) {
            $full_body .= '<tr><td>' . $erikujulist_akent_kirjeldus . ':</td><td>' . $_POST["Erikujulist_akent_kirjeldus" . $count] . '</td></tr>';
            if (!empty($_POST['Erisoovid' . $count]))
                $full_body .= '<tr><td>' . $erisoovid . ':</td><td>' . $_POST["Erisoovid" . $count] . '</td></tr>';
            continue;
        }

        $special_laius = ($_POST["aken_type" . $count] == 'rodu-taisklaas' || $_POST["aken_type" . $count] == 'rodu-taisklaas-uheneaken' || $_POST["aken_type" . $count] == 'rodu-poolklaas' || $_POST["aken_type" . $count] == 'rodu-poolklaas-uheneaken' || strpos($_POST["aken_type" . $count], 'Schema') != false || strpos($_POST["aken_type" . $count], 'schema') != false) ? $ukse_laius_name : $aken_laius_name;
        $special_korgus = ($_POST["aken_type" . $count] == 'rodu-taisklaas' || $_POST["aken_type" . $count] == 'rodu-taisklaas-uheneaken' || $_POST["aken_type" . $count] == 'rodu-poolklaas' || $_POST["aken_type" . $count] == 'rodu-poolklaas-uheneaken' || strpos($_POST["aken_type" . $count], 'Schema') != false || strpos($_POST["aken_type" . $count], 'schema') != false) ? $ukse_korgus_name : $aken_korgus_name;
        $full_body .= '<tr><td>' . $special_laius . ':</td><td>' . $_POST["Akna_laius" . $count] . '</td></tr><tr><td>' . $special_korgus . ':</td><td>' . $_POST["Akna_kõrgus" . $count] . '</td></tr>';

        if (!empty($_POST['Erisoovid' . $count]))
            $full_body .= '<tr><td>' . $erisoovid . ':</td><td>' . $_POST["Erisoovid" . $count] . '</td></tr>';

        if (!empty($_POST['Ukse_kõrgus' . $count]))
            $full_body .= '<tr><td>' . $ukse_korgus_name . ':</td><td>' . $_POST['Ukse_korgus' . $count] . '</td></tr>';
        if (!empty($_POST['Alumine_Kõrgus' . $count]) && $_POST['aken_type' . $count] == 'rodu-poolklaas')
            $full_body .= '<tr><td>' . $priceRequestDownSideHeight . ':</td><td>' . $_POST['Alumine_Kõrgus' . $count] . '</td></tr>';
        if (!empty($_POST['Ukse_laius' . $count]))
            $full_body .= '<tr><td>' . $ukse_laius_name . ':</td><td>' . $_POST['Ukse_laius' . $count] . '</td></tr>';
        if (!empty($_POST['Ülemise_lengi_kõrgus' . $count]) && $_POST['aken_type' . $count] == 'ule-allall')
            $full_body .= '<tr><td>' . $ulemise_lengi_korgus_name . ':</td><td>' . $_POST['Ülemise_lengi_kõrgus' . $count] . '</td></tr>';
        if (!empty($_POST['Esimese_lengi_laius' . $count]))
            if (($_POST['aken_type' . $count] == 'ule-allall') || ($_POST['aken_type' . $count] == 'kaheosaline') || ($_POST['aken_type' . $count] == 'kolmeosaline') || ($_POST['aken_type' . $count] == 'neljaosaline'))
                $full_body .= '<tr><td>' . $esimese_lengi_laius_name . ':</td><td>' . $_POST['Esimese_lengi_laius' . $count] . '</td></tr>';
        if (!empty($_POST['Teise_lengi_laius' . $count]))
            if (($_POST['aken_type' . $count] == 'ule-allall') || ($_POST['aken_type' . $count] == 'kaheosaline') || ($_POST['aken_type' . $count] == 'kolmeosaline') || ($_POST['aken_type' . $count] == 'neljaosaline'))
                $full_body .= '<tr><td>' . $teise_lengi_laius_name . ':</td><td>' . $_POST['Teise_lengi_laius' . $count] . '</td></tr>';
        if (!empty($_POST['Kolmanda_lengi_laius' . $count]))
            if (($_POST['aken_type' . $count] == 'kolmeosaline') || ($_POST['aken_type' . $count] == 'neljaosaline'))
                $full_body .= '<tr><td>' . $kolmanda_lengi_laius_name . ':</td><td>' . $_POST['Kolmanda_lengi_laius' . $count] . '</td></tr>';
        if (!empty($_POST['Neljanda_lengi_laius' . $count]))
            if (($_POST['aken_type' . $count] == 'neljaosaline'))
                $full_body .= '<tr><td>' . $neljanda_lengi_laius_name . ':</td><td>' . $_POST['Neljanda_lengi_laius' . $count] . '</td></tr>';
        if ($_POST['aken_type' . $count] == 'uheosaline')
            $full_body .= '<tr><td>' . $akna_avatavus_name . ':</td><td>' . $_POST['Akna_avatavus_opening' . $count] . '</td></tr>';
        if ($_POST['aken_type' . $count] == 'rodu-taisklaas' || $_POST['aken_type' . $count] == 'rodu-poolklaas' || $_POST['aken_type' . $count] == 'rodu-taisklaas-uheneaken' || $_POST['aken_type' . $count] == 'rodu-poolklaas-uheneaken' || (strpos($_POST["aken_type" . $count], 'Schema') != false)) //&& strpos($_POST["aken_type".$count], 'C') == false && strpos($_POST["aken_type".$count], '633') == false && strpos($_POST["aken_type".$count], 'K') == false))
            $full_body .= '<tr><td>' . $ukse_avatavus_name . ':</td><td>' . $_POST['Ukse_avatavus' . $count] . '</td></tr>';
        if ($_POST['aken_type' . $count] == 'kaheosaline' || $_POST['aken_type' . $count] == 'ule-allall' || $_POST['aken_type' . $count] == 'kolmeosaline' || $_POST['aken_type' . $count] == 'neljaosaline')
            $full_body .= '<tr><td>' . $esimese_lengi_avatavus_name . ':</td><td>' . $_POST['Esimese_jaotuse_avatavus' . $count] . '</td></tr>';
        if ($_POST['aken_type' . $count] == 'kaheosaline' || $_POST['aken_type' . $count] == 'ule-allall' || $_POST['aken_type' . $count] == 'kolmeosaline' || $_POST['aken_type' . $count] == 'neljaosaline')
            $full_body .= '<tr><td>' . $teise_lengi_avatavus_name . ':</td><td>' . $_POST['Teise_jaotuse_avatavus' . $count] . '</td></tr>';
        if ($_POST['aken_type' . $count] == 'kolmeosaline' || $_POST['aken_type' . $count] == 'neljaosaline')
            $full_body .= '<tr><td>' . $kolmanda_lengi_avatavus_name . ':</td><td>' . $_POST['Kolmanda_jaotuse_avatavus' . $count] . '</td></tr>';
        if ($_POST['aken_type' . $count] == 'neljaosaline')
            $full_body .= '<tr><td>' . $neljanda_lengi_avatavus_name . ':</td><td>' . $_POST['Neljanda_jaotuse_avatavus' . $count] . '</td></tr>';
        if ($_POST['aken_type' . $count] == 'ule-allall')
            $full_body .= '<tr><td>' . $ulemise_lengi_avatavus_name . ':</td><td>' . $_POST['Ülemise_jaotuse_avatus' . $count] . '</td></tr>';

        $full_body .= '<tr><td>' . $profil_name . ':</td><td>' . $_POST['profiil' . $count] . '</td></tr><tr><td>' . $klaaspaket_name . ':</td><td>' . $_POST['klaaspakett' . $count] . '</td></tr><tr><td>' . $varv_seest_name . ':</td><td>' . $_POST['Värv_seest' . $count] . '</td></tr><tr><td>' . $varv_valjast_name . ':</td><td>' . $_POST['Värv_väljast' . $count] . '</td></tr><tr><td>' . $kogus_name . ':</td><td>' . $_POST['Kogus' . $count] . '</td></tr>';
        if ($akenqua > 1 && $i != $akenqua) {
            $full_body .= ' <tr><td colspan="100%"><hr></td></tr>';
        }
    }

    $full_body .= '</tbody></table></div><div id="request-add-prop"><h2>' . $lisateenused_name . '</h2><hr><table class="request-add-prop"><tbody><tr><td>' . $lisateenused_name . ':</td><td>' . $lisateenused . '</td></tr>';

    if (!empty($Millisele_aadressile))
        $full_body .= '<tr><td>' . $aadress_name . ':</td><td>' . $Millisele_aadressile . '</td></tr>';

    $full_body .= '</tbody></table></div><div id="request-customer"><h2>' . $kontaktandmed_name . '</h2><hr><br><table style="page-break-before:auto;" class="repo-customer"><tbody><tr><td>' . $perekonnanimi_name . ':</td><td>' . $perekonnanimi . '</td></tr><tr><td>' . $nimi_name . ':</td><td>' . $nimi . '</td></tr><tr><td>' . $email_name . ':</td><td>' . $mail . '</td></tr><tr><td>' . $tel_name . ':</td><td>' . $tel . '</td></tr><tr><td>' . $export_name . ':</td><td>' . $teenindav_muugiosakond . '</td></tr></tbody></table></div></div>';

    $conn = mysqli_connect('localhost', 'r109060_wp', '10CIWn8Ic', 'r109060_wp');
    $sql = "INSERT INTO custom_orders (data) VALUES ('$full_body');";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT id FROM custom_orders WHERE data='" . $full_body . "' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $order_id = '';
    while ($row = mysqli_fetch_array($result)) {
        $order_id = $row['id'];
        break;
    }

    $body = '<html><style>@font-face {font-family: "Open Sans";font-style: normal;font-weight: 400;src: local("Open Sans Regular"), local("OpenSans-Regular"), url(http://' . $domain_name . '/wp-content/test6/request/OpenSans-Regular.ttf) format("truetype");unicode-range:  U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
                 * {font-family: "Arial", "Open Sans"    !important; font-weight: 400; }
                 h2{
                     font-family: "Arial", "Open Sans"    !important;
                 }
                </style>
                
               <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="#ffffff" >
               <img src="https://' . $domain_name . '/wp-content/uploads/2018/04/aruhaus_logo.png" alt="" />
               <div>
               <h2>' . $order_num_name . ' № ' . $order_id . '</h2>
               <span style="width:100%; float:left">' . $full_body . '</span>
               </div>
               </body></html>';

    $pdfName = 'price_request_N' . $order_id;

    $dompdf = new Dompdf(array('enable_remote' => true, 'defaultFont' => 'dejavu serif'));
    $path = "files/pdfs/" . $pdfName . ".pdf";
    $dompdf->load_html($body, 'UTF-8');
    $dompdf->render();
    $output = $dompdf->output();
    file_put_contents($path, $output);

    echo '<iframe id="pdfDocument" src="//' . $domain_name . '/' . $path . '" width="100%" height="100%" style="display:none;">This browser does not support PDFs. Please download the PDF to view it: <a href="//' . $domain_name . '/' . $path . '">Download PDF</a></iframe>';
    wp_mail($mail, $subject, $content, 'test3', $path);
    if ($isamblik) {
        wp_mail('ak@amblik.ee', $subject, $content, 'test3', $path);
        wp_mail('il@amblik.ee', $subject, $content, 'test3', $path);
    } else {
        wp_mail('ask@aruhaus.eu', $subject, $content, 'test3', $path);
    }

}
