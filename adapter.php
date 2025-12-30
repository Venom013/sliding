<?php

/** @noinspection GlobalVariableUsageInspection */

declare(strict_types=1);

require __DIR__ . '/Window.php';

const TYPE_LABEL = 'aken_type'; // тип окна

const OPENING_NONE = 'Без открывания';
const OPENING_TOP = 'Сверху';
const OPENING_LEFT = 'Слева';
const OPENING_RIGHT = 'Справа';
const OPENING_LEFT_TOP = 'Cлева + сверху';
const OPENING_RIGHT_TOP = 'Cправа + сверху';

const WINDOW_ONE = 'uheosaline'; // одно окно
const WINDOW_ONE_WIDTH_LABEL = 'Akna_laius'; // ширина окна
const WINDOW_ONE_HEIGHT_LABEL = 'Akna_kõrgus'; // высота окна
const WINDOW_ONE_OPENING_LABEL = 'Akna_avatavus_opening'; // вид открывания окна

const WINDOW_TWO = 'kaheosaline'; // 2 окна
const WINDOW_TWO_WIDTH1_LABEL = 'Esimese_lengi_laius'; // ширина 1 окна
const WINDOW_TWO_HEIGHT1_LABEL = 'Akna_kõrgus'; // высота 1 окна
const WINDOW_TWO_OPENING1_LABEL = 'Esimese_jaotuse_avatavus'; // вид открывания 1 окна
const WINDOW_TWO_WIDTH2_LABEL = 'Teise_lengi_laius'; // ширина 2 окна
const WINDOW_TWO_HEIGHT2_LABEL = 'Akna_kõrgus'; // высота 2 окна
const WINDOW_TWO_OPENING2_LABEL = 'Teise_jaotuse_avatavus'; // вид открывания 2 окна

const WINDOW_TREE = 'kolmeosaline'; // 3 окна
const WINDOW_TREE_WIDTH1_LABEL = 'Esimese_lengi_laius'; // ширина 1 окна
const WINDOW_TREE_HEIGHT1_LABEL = 'Akna_kõrgus'; // высота 1 окна
const WINDOW_TREE_OPENING1_LABEL = 'Esimese_jaotuse_avatavus'; // вид открывания 1 окна
const WINDOW_TREE_WIDTH2_LABEL = 'Teise_lengi_laius'; // ширина 2 окна
const WINDOW_TREE_HEIGHT2_LABEL = 'Akna_kõrgus'; // высота 2 окна вычисляется высота всего окна - высота первого
const WINDOW_TREE_OPENING2_LABEL = 'Teise_jaotuse_avatavus'; // вид открывания 2 окна
const WINDOW_TREE_WIDTH3_LABEL = 'Kolmanda_lengi_laius'; // ширина 3 окна
const WINDOW_TREE_HEIGHT3_LABEL = 'Akna_kõrgus'; // высота 3 окна вычисляется высота всего окна - высота первого
const WINDOW_TREE_OPENING3_LABEL = 'Kolmanda_jaotuse_avatavus'; // вид открывания 3 окна

const WINDOW_TREE_2_ROW = 'ule-allall'; // 1 сверху 2 снизу
const WINDOW_TREE_2_ROW_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всех окон
const WINDOW_TREE_2_ROW_WIDTH1_LABEL = 'Akna_laius'; // ширина 1 окна
const WINDOW_TREE_2_ROW_HEIGHT1_LABEL = 'Ülemise_lengi_kõrgus'; // высота 1 окна
const WINDOW_TREE_2_ROW_OPENING1_LABEL = 'Ülemise_jaotuse_avatus'; // вид открывания 1 окна
const WINDOW_TREE_2_ROW_WIDTH2_LABEL = 'Esimese_lengi_laius'; // ширина 2 окна
const WINDOW_TREE_2_ROW_HEIGHT2_LABEL = null; // высота 2 окна вычисляется высота всего окна - высота первого
const WINDOW_TREE_2_ROW_OPENING2_LABEL = 'Esimese_jaotuse_avatavus'; // вид открывания 2 окна
const WINDOW_TREE_2_ROW_WIDTH3_LABEL = 'Teise_lengi_laius'; // ширина 3 окна
const WINDOW_TREE_2_ROW_HEIGHT3_LABEL = null; // высота 3 окна вычисляется высота всего окна - высота первого
const WINDOW_TREE_2_ROW_OPENING3_LABEL = 'Teise_jaotuse_avatavus'; // вид открывания 3 окна

const WINDOW_FOUR = 'neljaosaline'; // 4 окна
const WINDOW_FOUR_WIDTH1_LABEL = 'Esimese_lengi_laius'; // ширина 1 окна
const WINDOW_FOUR_HEIGHT1_LABEL = 'Akna_kõrgus'; // высота 1 окна
const WINDOW_FOUR_OPENING1_LABEL = 'Esimese_jaotuse_avatavus'; // вид открывания 1 окна
const WINDOW_FOUR_WIDTH2_LABEL = 'Teise_lengi_laius'; // ширина 2 окна
const WINDOW_FOUR_HEIGHT2_LABEL = 'Akna_kõrgus'; // высота 2 окна вычисляется высота всего окна
const WINDOW_FOUR_OPENING2_LABEL = 'Teise_jaotuse_avatavus'; // вид открывания 2 окна
const WINDOW_FOUR_WIDTH3_LABEL = 'Kolmanda_lengi_laius'; // ширина 3 окна
const WINDOW_FOUR_HEIGHT3_LABEL = 'Akna_kõrgus'; // высота 3 окна вычисляется высота всего окна
const WINDOW_FOUR_OPENING3_LABEL = 'Kolmanda_jaotuse_avatavus'; // вид открывания 3 окна
const WINDOW_FOUR_WIDTH4_LABEL = 'Neljanda_lengi_laius'; // ширина 4 окна
const WINDOW_FOUR_HEIGHT4_LABEL = 'Akna_kõrgus'; // высота 4 окна вычисляется высота всего окна
const WINDOW_FOUR_OPENING4_LABEL = 'Neljanda_jaotuse_avatavus'; // вид открывания 4 окна

const DOOR_FULL = 'rodu-taisklaas'; // дверь полное окно
const DOOR_FULL_WIDTH_LABEL = 'Akna_laius'; // ширина двери
const DOOR_FULL_HEIGHT_LABEL = 'Akna_kõrgus'; // высота двери
const DOOR_FULL_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания двери

const DOOR_PVC = 'rodu-poolklaas'; // дверь с нижней частью
const DOOR_PVC_WIDTH_LABEL = 'Akna_laius'; // ширина двери
const DOOR_PVC_HEIGHT_LABEL = 'Akna_kõrgus'; // высота двери
const DOOR_PVC_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания двери
const DOOR_PVC_PVC_HEIGHT_LABEL = 'Ülemise_lengi_kõrgus'; // высота PVC

const HST_SCHEMA_A = 'HST-Schema-A'; // hst 2 окна, одно открывается
const HST_SCHEMA_A_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const HST_SCHEMA_A_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const HST_SCHEMA_A_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_HST_SCHEMA_A_LEFT = 'Сдвиг влево , HST-Schema-A'; // 1 без, 2 влево
const MOVING_HST_SCHEMA_A_RIGHT = 'Сдвиг вправо , HST-Schema-A'; // 1 вправо, 2 без

const HST_SCHEMA_C = 'HST-Schema-C'; // hst 4 окна, два по центру в разные стороны
const HST_SCHEMA_C_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const HST_SCHEMA_C_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const HST_SCHEMA_C_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_HST_SCHEMA_C = 'HST-Schema-C'; // 4 окна, 1 без, 2 влево, 3 вправо, 4 без

const HST_SCHEMA_G1 = 'HST-Schema-G1'; // hst 3 окна, одно в центре открываетяс влево
const HST_SCHEMA_G1_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const HST_SCHEMA_G1_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const HST_SCHEMA_G1_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_HST_SCHEMA_G1_LEFT = 'Сдвиг влево , HST-Schema-A'; // 1 без, 1 влево, 1 без
const MOVING_HST_SCHEMA_G1_RIGHT = 'Сдвиг вправо , HST-Schema-A'; // 1 без, 1 вправо, 1 без

const HST_SCHEMA_H = 'HST-Schema-H'; // hst 2 окна, два открываются в центр
const HST_SCHEMA_H_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const HST_SCHEMA_H_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const HST_SCHEMA_H_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_HST_SCHEMA_H = 'HST-Schema-H'; // 2 окна, 1 вправо, 2 влево

const HST_SCHEMA_K = 'HST-Schema-K'; // hst 2 окна, два открываются в центр
const HST_SCHEMA_K_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const HST_SCHEMA_K_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const HST_SCHEMA_K_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_HST_SCHEMA_K = 'HST-Schema-K'; // 2 окна, 1 вправо, 2 влево

const PSK_SCHEMA_A = 'PSK-Schema-A';
const PSK_SCHEMA_A_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const PSK_SCHEMA_A_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const PSK_SCHEMA_A_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_PSK_SCHEMA_A_LEFT = 'Сдвиг влево ,PSK-Schema-A'; // 2 окна, 1 без, 2 влево
const MOVING_PSK_SCHEMA_A_RIGHT = 'Сдвиг вправо ,PSK-Schema-A'; // 2 окна, 1 вправо, 2 без

const PSK_SCHEMA_C = 'PSK-Schema-C';
const PSK_SCHEMA_C_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const PSK_SCHEMA_C_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const PSK_SCHEMA_C_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_PSK_SCHEMA_C = 'Сдвиг влево'; // 4 окна, 1 без, 2 влево, 3 вправо, 4 без

const PSK_SCHEMA_G = 'PSK-Schema-G';
const PSK_SCHEMA_G_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const PSK_SCHEMA_G_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const PSK_SCHEMA_G_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_PSK_SCHEMA_G_LEFT = 'Сдвиг влево ,PSK-Schema-G'; // 3 окна, 1 без, 2 влево, 3 без
const MOVING_PSK_SCHEMA_G_RIGHT = 'Сдвиг вправо ,PSK-Schema-G'; // 3 окна, 1 без, 2 вправо, 3 без

const PSK_SCHEMA_K = 'PSK-Schema-K';
const PSK_SCHEMA_K_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const PSK_SCHEMA_K_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const PSK_SCHEMA_K_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_PSK_SCHEMA_K = 'Сдвиг влево'; // 3 окна, 1 вправо, 2 без, 3 влево

const FS_SCHEMA_321 = 'FS-Schema-321'; // FS 3 окна
const FS_SCHEMA_321_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const FS_SCHEMA_321_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const FS_SCHEMA_321_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_FS_SCHEMA_321_LEFT = 'Сдвиг влево ,FS-Schema-321'; // 3 окна, 1 влево ручка справа, 2 влево, 3 открывается вверх влево
const MOVING_FS_SCHEMA_321_RIGHT = 'Сдвиг вправо ,FS-Schema-321'; // 3 окна, 1 открывается вверх вправо, 2 вправо, 3 вправо ручка слева

const FS_SCHEMA_330 = 'FS-Schema-330';
const FS_SCHEMA_330_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const FS_SCHEMA_330_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const FS_SCHEMA_330_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_FS_SCHEMA_330_LEFT = 'Сдвиг влево ,FS-Schema-330'; // 3 окна, 1 влево ручка справа, 2 влево, 3 влево ручка справа
const MOVING_FS_SCHEMA_330_RIGHT = 'Сдвиг вправо ,FS-Schema-330'; // 3 окна, 1 вправо ручка слева, 2 вправо, 3 вправо ручка слева

const FS_SCHEMA_431 = 'FS-Schema-431';
const FS_SCHEMA_431_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const FS_SCHEMA_431_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const FS_SCHEMA_431_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_FS_SCHEMA_431_LEFT = 'Сдвиг влево ,FS-Schema-431'; // 4 окна, 1 влево ручка справа, 2 влево, 3 влево, 4 открывается вверх влево
const MOVING_FS_SCHEMA_431_RIGHT = 'Сдвиг вправо ,FS-Schema-431'; // 4 окна, 1 открывается вверх вправо, 2 вправо, 3 вправо, 4 вправо ручка слева

const FS_SCHEMA_541 = 'FS-Schema-541';
const FS_SCHEMA_541_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const FS_SCHEMA_541_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const FS_SCHEMA_541_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_FS_SCHEMA_531_LEFT = 'Сдвиг влево ,FS-Schema-531'; // 5 окон, 1 влево ручка справа, 2 влево, 3 влево ручка справа, 4 влево, 5 открывается вверх влево
const MOVING_FS_SCHEMA_531_RIGHT = 'Сдвиг вправо ,FS-Schema-531'; // 5 окон, 1 открывается вверх вправо, 2 вправо, 3 вправо ручка слева, 4 вправо, 5 вправо ручка слева

const FS_SCHEMA_550 = 'FS-Schema-550';
const FS_SCHEMA_550_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const FS_SCHEMA_550_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const FS_SCHEMA_550_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_FS_SCHEMA_550_LEFT = 'Сдвиг влево ,FS-Schema-550'; // 5 окон, 1 влево ручка справа, 2 влево, 3 влево ручка справа, 4 влево, 5 влево ручка справа
const MOVING_FS_SCHEMA_550_RIGHT = 'Сдвиг вправо ,FS-Schema-550'; // 5 окон, 1 вправо ручка слева, 2 вправо, 3 вправо ручка слева, 4 вправо, 5 вправо ручка слева

const FS_SCHEMA_633 = 'FS-Schema-633';
const FS_SCHEMA_633_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const FS_SCHEMA_633_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const FS_SCHEMA_633_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_FS_SCHEMA_633_LEFT = 'Сдвиг влево ,FS-Schema-633'; // 6 окон, 1 влево ручка справа, 2 влево, 3 влево, 4 вправо ручка слева, 5 вправо, 6 вправо ручка слева
const MOVING_FS_SCHEMA_633_RIGHT = 'Сдвиг вправо ,FS-Schema-633'; // 6 окон, 1 влево ручка справа, 2 влево, 3 влево ручка справа, 4 вправо, 5 вправо, 6 вправо ручка слева

const FS_SCHEMA_651 = 'FS-Schema-651';
const FS_SCHEMA_651_WIDTH_LABEL = 'Akna_laius'; // ширина всего окна
const FS_SCHEMA_651_HEIGHT_LABEL = 'Akna_kõrgus'; // высота всего окна
const FS_SCHEMA_651_OPENING_LABEL = 'Ukse_avatavus'; // вид открывания окна
const MOVING_FS_SCHEMA_651_LEFT = 'Сдвиг влево ,FS-Schema-651'; // 6 окон, 1 влево ручка справа, 2 влево, 3 влево ручка справа, 4 влево, 5 влево, 6 открывается вверх влево
const MOVING_FS_SCHEMA_651_RIGHT = 'Сдвиг вправо ,FS-Schema-651'; // 6 окон, 1 открывается вверх вправо, 2 вправо, 3 вправо, 4 вправо ручка слева, 5 вправо, 6 вправо ручка слева

const PDF_PARAMS = [
    ['label' => WINDOW_ONE_WIDTH_LABEL, 'type' => WINDOW_ONE],
    ['label' => WINDOW_ONE_HEIGHT_LABEL, 'type' => WINDOW_ONE],
    ['label' => WINDOW_ONE_OPENING_LABEL, 'type' => WINDOW_ONE],
    ['label' => WINDOW_TWO_WIDTH1_LABEL, 'type' => WINDOW_TWO],
    ['label' => WINDOW_TWO_HEIGHT1_LABEL, 'type' => WINDOW_TWO],
    ['label' => WINDOW_TWO_OPENING1_LABEL, 'type' => WINDOW_TWO],
    ['label' => WINDOW_TWO_WIDTH2_LABEL, 'type' => WINDOW_TWO],
    ['label' => WINDOW_TWO_HEIGHT2_LABEL, 'type' => WINDOW_TWO],
    ['label' => WINDOW_TWO_OPENING2_LABEL, 'type' => WINDOW_TWO],
    ['label' => WINDOW_TREE_WIDTH1_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_HEIGHT1_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_OPENING1_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_WIDTH2_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_HEIGHT2_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_OPENING2_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_WIDTH3_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_HEIGHT3_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_OPENING3_LABEL, 'type' => WINDOW_TREE],
    ['label' => WINDOW_TREE_2_ROW_HEIGHT_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_WIDTH1_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_HEIGHT1_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_OPENING1_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_WIDTH2_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_HEIGHT2_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_OPENING2_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_WIDTH3_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_HEIGHT3_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_TREE_2_ROW_OPENING3_LABEL, 'type' => WINDOW_TREE_2_ROW],
    ['label' => WINDOW_FOUR_WIDTH1_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_HEIGHT1_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_OPENING1_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_WIDTH2_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_HEIGHT2_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_OPENING2_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_WIDTH3_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_HEIGHT3_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_OPENING3_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_WIDTH4_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_HEIGHT4_LABEL, 'type' => WINDOW_FOUR],
    ['label' => WINDOW_FOUR_OPENING4_LABEL, 'type' => WINDOW_FOUR],
    ['label' => DOOR_FULL_WIDTH_LABEL, 'type' => DOOR_FULL],
    ['label' => DOOR_FULL_HEIGHT_LABEL, 'type' => DOOR_FULL],
    ['label' => DOOR_FULL_OPENING_LABEL, 'type' => DOOR_FULL],
    ['label' => DOOR_PVC_WIDTH_LABEL, 'type' => DOOR_PVC],
    ['label' => DOOR_PVC_HEIGHT_LABEL, 'type' => DOOR_PVC],
    ['label' => DOOR_PVC_OPENING_LABEL, 'type' => DOOR_PVC],
    ['label' => DOOR_PVC_PVC_HEIGHT_LABEL, 'type' => DOOR_PVC],
    ['label' => HST_SCHEMA_A_WIDTH_LABEL, 'type' => HST_SCHEMA_A],
    ['label' => HST_SCHEMA_A_HEIGHT_LABEL, 'type' => HST_SCHEMA_A],
    ['label' => HST_SCHEMA_A_OPENING_LABEL, 'type' => HST_SCHEMA_A],
    ['label' => HST_SCHEMA_C_WIDTH_LABEL, 'type' => HST_SCHEMA_C],
    ['label' => HST_SCHEMA_C_HEIGHT_LABEL, 'type' => HST_SCHEMA_C],
    ['label' => HST_SCHEMA_C_OPENING_LABEL, 'type' => HST_SCHEMA_C],
    ['label' => HST_SCHEMA_G1_WIDTH_LABEL, 'type' => HST_SCHEMA_G1],
    ['label' => HST_SCHEMA_G1_HEIGHT_LABEL, 'type' => HST_SCHEMA_G1],
    ['label' => HST_SCHEMA_G1_OPENING_LABEL, 'type' => HST_SCHEMA_G1],
    ['label' => HST_SCHEMA_H_WIDTH_LABEL, 'type' => HST_SCHEMA_H],
    ['label' => HST_SCHEMA_H_HEIGHT_LABEL, 'type' => HST_SCHEMA_H],
    ['label' => HST_SCHEMA_H_OPENING_LABEL, 'type' => HST_SCHEMA_H],
    ['label' => HST_SCHEMA_K_WIDTH_LABEL, 'type' => HST_SCHEMA_K],
    ['label' => HST_SCHEMA_K_HEIGHT_LABEL, 'type' => HST_SCHEMA_K],
    ['label' => HST_SCHEMA_K_OPENING_LABEL, 'type' => HST_SCHEMA_K],
    ['label' => PSK_SCHEMA_A_WIDTH_LABEL, 'type' => PSK_SCHEMA_A],
    ['label' => PSK_SCHEMA_A_HEIGHT_LABEL, 'type' => PSK_SCHEMA_A],
    ['label' => PSK_SCHEMA_A_OPENING_LABEL, 'type' => PSK_SCHEMA_A],
    ['label' => PSK_SCHEMA_C_WIDTH_LABEL, 'type' => PSK_SCHEMA_C],
    ['label' => PSK_SCHEMA_C_HEIGHT_LABEL, 'type' => PSK_SCHEMA_C],
    ['label' => PSK_SCHEMA_C_OPENING_LABEL, 'type' => PSK_SCHEMA_C],
    ['label' => PSK_SCHEMA_G_WIDTH_LABEL, 'type' => PSK_SCHEMA_G],
    ['label' => PSK_SCHEMA_G_HEIGHT_LABEL, 'type' => PSK_SCHEMA_G],
    ['label' => PSK_SCHEMA_G_OPENING_LABEL, 'type' => PSK_SCHEMA_G],
    ['label' => PSK_SCHEMA_K_WIDTH_LABEL, 'type' => PSK_SCHEMA_K],
    ['label' => PSK_SCHEMA_K_HEIGHT_LABEL, 'type' => PSK_SCHEMA_K],
    ['label' => PSK_SCHEMA_K_OPENING_LABEL, 'type' => PSK_SCHEMA_K],
    ['label' => FS_SCHEMA_321_WIDTH_LABEL, 'type' => FS_SCHEMA_321],
    ['label' => FS_SCHEMA_321_HEIGHT_LABEL, 'type' => FS_SCHEMA_321],
    ['label' => FS_SCHEMA_321_OPENING_LABEL, 'type' => FS_SCHEMA_321],
    ['label' => FS_SCHEMA_330_WIDTH_LABEL, 'type' => FS_SCHEMA_330],
    ['label' => FS_SCHEMA_330_HEIGHT_LABEL, 'type' => FS_SCHEMA_330],
    ['label' => FS_SCHEMA_330_OPENING_LABEL, 'type' => FS_SCHEMA_330],
    ['label' => FS_SCHEMA_431_WIDTH_LABEL, 'type' => FS_SCHEMA_431],
    ['label' => FS_SCHEMA_431_HEIGHT_LABEL, 'type' => FS_SCHEMA_431],
    ['label' => FS_SCHEMA_431_OPENING_LABEL, 'type' => FS_SCHEMA_431],
    ['label' => FS_SCHEMA_541_WIDTH_LABEL, 'type' => FS_SCHEMA_541],
    ['label' => FS_SCHEMA_541_HEIGHT_LABEL, 'type' => FS_SCHEMA_541],
    ['label' => FS_SCHEMA_541_OPENING_LABEL, 'type' => FS_SCHEMA_541],
    ['label' => FS_SCHEMA_550_WIDTH_LABEL, 'type' => FS_SCHEMA_550],
    ['label' => FS_SCHEMA_550_HEIGHT_LABEL, 'type' => FS_SCHEMA_550],
    ['label' => FS_SCHEMA_550_OPENING_LABEL, 'type' => FS_SCHEMA_550],
    ['label' => FS_SCHEMA_633_WIDTH_LABEL, 'type' => FS_SCHEMA_633],
    ['label' => FS_SCHEMA_633_HEIGHT_LABEL, 'type' => FS_SCHEMA_633],
    ['label' => FS_SCHEMA_633_OPENING_LABEL, 'type' => FS_SCHEMA_633],
    ['label' => FS_SCHEMA_651_WIDTH_LABEL, 'type' => FS_SCHEMA_651],
    ['label' => FS_SCHEMA_651_HEIGHT_LABEL, 'type' => FS_SCHEMA_651],
    ['label' => FS_SCHEMA_651_OPENING_LABEL, 'type' => FS_SCHEMA_651],
];

if (trim($_POST[TYPE_LABEL]) === WINDOW_ONE) {
    $openDirection = Window::OPEN_DIRECTION_NONE;

    switch (trim($_POST[WINDOW_ONE_OPENING_LABEL])) {
        case OPENING_TOP:
            $openDirection = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    $window = new Window;
    $window->addWindow((int)$_POST[WINDOW_ONE_WIDTH_LABEL], (int)$_POST[WINDOW_ONE_HEIGHT_LABEL], $openDirection);
} elseif (trim($_POST[TYPE_LABEL]) === WINDOW_TWO) {
    $openDirection1 = Window::OPEN_DIRECTION_NONE;
    $openDirection2 = Window::OPEN_DIRECTION_NONE;

    switch (trim($_POST[WINDOW_TWO_OPENING1_LABEL])) {
        case OPENING_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection1 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection1 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    switch (trim($_POST[WINDOW_TWO_OPENING2_LABEL])) {
        case OPENING_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection2 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection2 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    $window = new Window;
    $window->addWindow((int)$_POST[WINDOW_TWO_WIDTH1_LABEL], (int)$_POST[WINDOW_TWO_HEIGHT1_LABEL], $openDirection1);
    $window->addWindow((int)$_POST[WINDOW_TWO_WIDTH2_LABEL], (int)$_POST[WINDOW_TWO_HEIGHT2_LABEL], $openDirection2);
} elseif (trim($_POST[TYPE_LABEL]) === WINDOW_TREE) {
    $openDirection1 = Window::OPEN_DIRECTION_NONE;
    $openDirection2 = Window::OPEN_DIRECTION_NONE;
    $openDirection3 = Window::OPEN_DIRECTION_NONE;

    switch (trim($_POST[WINDOW_TREE_OPENING1_LABEL])) {
        case OPENING_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection1 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection1 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    switch (trim($_POST[WINDOW_TREE_OPENING2_LABEL])) {
        case OPENING_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection2 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection2 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    switch (trim($_POST[WINDOW_TREE_OPENING3_LABEL])) {
        case OPENING_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection3 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection3 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    $window = new Window;
    $window->addWindow((int)$_POST[WINDOW_TREE_WIDTH1_LABEL], (int)$_POST[WINDOW_TREE_HEIGHT1_LABEL], $openDirection1);
    $window->addWindow((int)$_POST[WINDOW_TREE_WIDTH2_LABEL], (int)$_POST[WINDOW_TREE_HEIGHT2_LABEL], $openDirection2);
    $window->addWindow((int)$_POST[WINDOW_TREE_WIDTH3_LABEL], (int)$_POST[WINDOW_TREE_HEIGHT3_LABEL], $openDirection3);
} elseif (trim($_POST[TYPE_LABEL]) === WINDOW_TREE_2_ROW) {
    $openDirection1 = Window::OPEN_DIRECTION_NONE;
    $openDirection2 = Window::OPEN_DIRECTION_NONE;
    $openDirection3 = Window::OPEN_DIRECTION_NONE;

    switch (trim($_POST[WINDOW_TREE_2_ROW_OPENING1_LABEL])) {
        case OPENING_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection1 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection1 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    switch (trim($_POST[WINDOW_TREE_2_ROW_OPENING2_LABEL])) {
        case OPENING_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection2 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection2 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    switch (trim($_POST[WINDOW_TREE_2_ROW_OPENING3_LABEL])) {
        case OPENING_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection3 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection3 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    $width1 = (int)$_POST[WINDOW_TREE_2_ROW_WIDTH2_LABEL] + (int)$_POST[WINDOW_TREE_2_ROW_WIDTH3_LABEL];
    $height2_3 = (int)$_POST[WINDOW_TREE_2_ROW_HEIGHT_LABEL] - (int)$_POST[WINDOW_TREE_2_ROW_HEIGHT1_LABEL];

    $window = new Window(Window::WINDOWS_IN_2_ROWS);
    $window->addWindow($width1, (int)$_POST[WINDOW_TREE_2_ROW_HEIGHT1_LABEL], $openDirection1);
    $window->addWindow((int)$_POST[WINDOW_TREE_2_ROW_WIDTH2_LABEL], $height2_3, $openDirection2);
    $window->addWindow((int)$_POST[WINDOW_TREE_2_ROW_WIDTH3_LABEL], $height2_3, $openDirection3);
} elseif (trim($_POST[TYPE_LABEL]) === WINDOW_FOUR) {
    $openDirection1 = Window::OPEN_DIRECTION_NONE;
    $openDirection2 = Window::OPEN_DIRECTION_NONE;
    $openDirection3 = Window::OPEN_DIRECTION_NONE;
    $openDirection4 = Window::OPEN_DIRECTION_NONE;

    switch (trim($_POST[WINDOW_FOUR_OPENING1_LABEL])) {
        case OPENING_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection1 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection1 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection1 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    switch (trim($_POST[WINDOW_FOUR_OPENING2_LABEL])) {
        case OPENING_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection2 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection2 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection2 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    switch (trim($_POST[WINDOW_FOUR_OPENING3_LABEL])) {
        case OPENING_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection3 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection3 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection3 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    switch (trim($_POST[WINDOW_FOUR_OPENING4_LABEL])) {
        case OPENING_TOP:
            $openDirection4 = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection4 = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection4 = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection4 = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection4 = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    $window = new Window;
    $window->addWindow((int)$_POST[WINDOW_FOUR_WIDTH1_LABEL], (int)$_POST[WINDOW_FOUR_HEIGHT1_LABEL], $openDirection1);
    $window->addWindow((int)$_POST[WINDOW_FOUR_WIDTH2_LABEL], (int)$_POST[WINDOW_FOUR_HEIGHT2_LABEL], $openDirection2);
    $window->addWindow((int)$_POST[WINDOW_FOUR_WIDTH3_LABEL], (int)$_POST[WINDOW_FOUR_HEIGHT3_LABEL], $openDirection3);
    $window->addWindow((int)$_POST[WINDOW_FOUR_WIDTH4_LABEL], (int)$_POST[WINDOW_FOUR_HEIGHT4_LABEL], $openDirection4);
} elseif (trim($_POST[TYPE_LABEL]) === DOOR_FULL) {
    $openDirection = Window::OPEN_DIRECTION_NONE;

    switch (trim($_POST[DOOR_FULL_OPENING_LABEL])) {
        case OPENING_TOP:
            $openDirection = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    $window = new Window;
    $window->addWindow((int)$_POST[DOOR_FULL_WIDTH_LABEL], (int)$_POST[DOOR_FULL_HEIGHT_LABEL], $openDirection);
} elseif (trim($_POST[TYPE_LABEL]) === DOOR_PVC) {
    $openDirection = Window::OPEN_DIRECTION_NONE;

    switch (trim($_POST[DOOR_PVC_OPENING_LABEL])) {
        case OPENING_TOP:
            $openDirection = Window::OPEN_DIRECTION_TOP;
            break;
        case OPENING_LEFT:
            $openDirection = Window::OPEN_DIRECTION_LEFT;
            break;
        case OPENING_RIGHT:
            $openDirection = Window::OPEN_DIRECTION_RIGHT;
            break;
        case OPENING_LEFT_TOP:
            $openDirection = Window::OPEN_DIRECTION_LEFT_TOP;
            break;
        case OPENING_RIGHT_TOP:
            $openDirection = Window::OPEN_DIRECTION_RIGHT_TOP;
            break;
    }

    $window = new Window;
    $window->addDoor((int)$_POST[DOOR_PVC_WIDTH_LABEL], (int)$_POST[DOOR_PVC_HEIGHT_LABEL], $openDirection, (int)$_POST[DOOR_PVC_PVC_HEIGHT_LABEL]);
} elseif (trim($_POST[TYPE_LABEL]) === HST_SCHEMA_A) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[HST_SCHEMA_A_OPENING_LABEL])) {
        case MOVING_HST_SCHEMA_A_LEFT:
            $moveDirection1 = Window::MOVE_DIRECTION_RIGHT;
            break;
        case MOVING_HST_SCHEMA_A_RIGHT:
            $moveDirection2 = Window::MOVE_DIRECTION_LEFT;
            break;
    }

    $windowWidth = (int)round((int)$_POST[HST_SCHEMA_A_WIDTH_LABEL] / 2);
    $windowHeight = (int)$_POST[HST_SCHEMA_A_HEIGHT_LABEL];

    $window = new Window;
    $window->addHST($windowWidth, $windowHeight, $moveDirection1);
    $window->addHST($windowWidth, $windowHeight, $moveDirection2);
} elseif (trim($_POST[TYPE_LABEL]) === HST_SCHEMA_C) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;
    $moveDirection3 = Window::MOVE_DIRECTION_NONE;
    $moveDirection4 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[HST_SCHEMA_C_OPENING_LABEL])) {
        case MOVING_HST_SCHEMA_C:
            $moveDirection2 = Window::MOVE_DIRECTION_LEFT;
            $moveDirection3 = Window::MOVE_DIRECTION_RIGHT;
            break;
    }

    $windowWidth = (int)round((int)$_POST[HST_SCHEMA_C_WIDTH_LABEL] / 4);
    $windowHeight = (int)$_POST[HST_SCHEMA_C_HEIGHT_LABEL];

    $window = new Window;
    $window->addHST($windowWidth, $windowHeight, $moveDirection1);
    $window->addHST($windowWidth, $windowHeight, $moveDirection2);
    $window->addHST($windowWidth, $windowHeight, $moveDirection3);
    $window->addHST($windowWidth, $windowHeight, $moveDirection4);
} elseif (trim($_POST[TYPE_LABEL]) === HST_SCHEMA_G1) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;
    $moveDirection3 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[HST_SCHEMA_G1_OPENING_LABEL])) {
        case MOVING_HST_SCHEMA_G1_LEFT:
            $moveDirection2 = Window::MOVE_DIRECTION_RIGHT;
            break;
        case MOVING_HST_SCHEMA_G1_RIGHT:
            $moveDirection2 = Window::MOVE_DIRECTION_LEFT;
            break;
    }

    $windowWidth = (int)round((int)$_POST[HST_SCHEMA_G1_WIDTH_LABEL] / 3);
    $windowHeight = (int)$_POST[HST_SCHEMA_G1_HEIGHT_LABEL];

    $window = new Window;
    $window->addHST($windowWidth, $windowHeight, $moveDirection1);
    $window->addHST($windowWidth, $windowHeight, $moveDirection2);
    $window->addHST($windowWidth, $windowHeight, $moveDirection3);
} elseif (trim($_POST[TYPE_LABEL]) === HST_SCHEMA_H) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;
    $moveDirection3 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[HST_SCHEMA_H_OPENING_LABEL])) {
        case MOVING_HST_SCHEMA_H:
            $moveDirection1 = Window::MOVE_DIRECTION_RIGHT;
            $moveDirection3 = Window::MOVE_DIRECTION_LEFT;
            break;
    }

    $windowWidth = (int)round((int)$_POST[HST_SCHEMA_H_WIDTH_LABEL] / 2);
    $windowHeight = (int)$_POST[HST_SCHEMA_H_HEIGHT_LABEL];

    $window = new Window;
    $window->addHST($windowWidth, $windowHeight, $moveDirection1);
    $window->addHST($windowWidth, $windowHeight, $moveDirection2);
    $window->addHST($windowWidth, $windowHeight, $moveDirection3);
} elseif (trim($_POST[TYPE_LABEL]) === HST_SCHEMA_K) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;
    $moveDirection3 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[HST_SCHEMA_K_OPENING_LABEL])) {
        case MOVING_HST_SCHEMA_K:
            $moveDirection1 = Window::MOVE_DIRECTION_RIGHT;
            $moveDirection3 = Window::MOVE_DIRECTION_LEFT;
            break;
    }

    $windowWidth1 = $windowWidth3 = (int)round((int)$_POST[HST_SCHEMA_K_WIDTH_LABEL] / 4);
    $windowWidth2 = $windowWidth1 * 2;
    $windowHeight = (int)$_POST[HST_SCHEMA_K_HEIGHT_LABEL];

    $window = new Window;
    $window->addHST($windowWidth1, $windowHeight, $moveDirection1);
    $window->addHST($windowWidth2, $windowHeight, $moveDirection2);
    $window->addHST($windowWidth3, $windowHeight, $moveDirection3);
} elseif (trim($_POST[TYPE_LABEL]) === PSK_SCHEMA_A) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[PSK_SCHEMA_A_OPENING_LABEL])) {
        case MOVING_PSK_SCHEMA_A_LEFT:
            $moveDirection1 = Window::MOVE_DIRECTION_RIGHT;
            break;
        case MOVING_PSK_SCHEMA_A_RIGHT:
            $moveDirection2 = Window::MOVE_DIRECTION_LEFT;
            break;
    }

    $windowWidth = (int)round((int)$_POST[PSK_SCHEMA_A_WIDTH_LABEL] / 2);
    $windowHeight = (int)$_POST[PSK_SCHEMA_A_HEIGHT_LABEL];

    $window = new Window;
    $window->addPSK($windowWidth, $windowHeight, $moveDirection1);
    $window->addPSK($windowWidth, $windowHeight, $moveDirection2);
} elseif (trim($_POST[TYPE_LABEL]) === PSK_SCHEMA_C) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;
    $moveDirection3 = Window::MOVE_DIRECTION_NONE;
    $moveDirection4 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[PSK_SCHEMA_C_OPENING_LABEL])) {
        case MOVING_PSK_SCHEMA_C:
            $moveDirection2 = Window::MOVE_DIRECTION_LEFT;
            $moveDirection3 = Window::MOVE_DIRECTION_RIGHT;
            break;
    }

    $windowWidth = (int)round((int)$_POST[PSK_SCHEMA_C_WIDTH_LABEL] / 4);
    $windowHeight = (int)$_POST[PSK_SCHEMA_C_HEIGHT_LABEL];

    $window = new Window;
    $window->addPSK($windowWidth, $windowHeight, $moveDirection1);
    $window->addPSK($windowWidth, $windowHeight, $moveDirection2);
    $window->addPSK($windowWidth, $windowHeight, $moveDirection3);
    $window->addPSK($windowWidth, $windowHeight, $moveDirection4);
} elseif (trim($_POST[TYPE_LABEL]) === PSK_SCHEMA_G) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;
    $moveDirection3 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[PSK_SCHEMA_G_OPENING_LABEL])) {
        case MOVING_PSK_SCHEMA_G_LEFT:
            $moveDirection2 = Window::MOVE_DIRECTION_RIGHT;
            break;
        case MOVING_PSK_SCHEMA_G_RIGHT:
            $moveDirection2 = Window::MOVE_DIRECTION_LEFT;
            break;
    }

    $windowWidth = (int)round((int)$_POST[PSK_SCHEMA_G_WIDTH_LABEL] / 3);
    $windowHeight = (int)$_POST[PSK_SCHEMA_G_HEIGHT_LABEL];

    $window = new Window;
    $window->addPSK($windowWidth, $windowHeight, $moveDirection1);
    $window->addPSK($windowWidth, $windowHeight, $moveDirection2);
    $window->addPSK($windowWidth, $windowHeight, $moveDirection3);
} elseif (trim($_POST[TYPE_LABEL]) === PSK_SCHEMA_K) {
    $moveDirection1 = Window::MOVE_DIRECTION_NONE;
    $moveDirection2 = Window::MOVE_DIRECTION_NONE;
    $moveDirection3 = Window::MOVE_DIRECTION_NONE;

    switch (trim($_POST[PSK_SCHEMA_K_OPENING_LABEL])) {
        case MOVING_PSK_SCHEMA_K:
            $moveDirection1 = Window::MOVE_DIRECTION_RIGHT;
            $moveDirection3 = Window::MOVE_DIRECTION_LEFT;
            break;
    }

    $windowWidth = (int)round((int)$_POST[PSK_SCHEMA_K_WIDTH_LABEL] / 3);
    $windowHeight = (int)$_POST[PSK_SCHEMA_K_HEIGHT_LABEL];

    $window = new Window;
    $window->addPSK($windowWidth, $windowHeight, $moveDirection1);
    $window->addPSK($windowWidth, $windowHeight, $moveDirection2);
    $window->addPSK($windowWidth, $windowHeight, $moveDirection3);
} elseif (trim($_POST[TYPE_LABEL]) === FS_SCHEMA_321) {
    $windowWidth = (int)round((int)$_POST[FS_SCHEMA_321_WIDTH_LABEL] / 3);
    $windowHeight = (int)$_POST[FS_SCHEMA_321_HEIGHT_LABEL];

    $window = new Window;

    switch (trim($_POST[FS_SCHEMA_321_OPENING_LABEL])) {
        case MOVING_FS_SCHEMA_321_LEFT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addWindow($windowWidth, $windowHeight, Window::OPEN_DIRECTION_LEFT_TOP);
            break;
        case MOVING_FS_SCHEMA_321_RIGHT:
            $window->addWindow($windowWidth, $windowHeight, Window::OPEN_DIRECTION_RIGHT_TOP);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            break;
    }
} elseif (trim($_POST[TYPE_LABEL]) === FS_SCHEMA_330) {
    $windowWidth = (int)round((int)$_POST[FS_SCHEMA_330_WIDTH_LABEL] / 3);
    $windowHeight = (int)$_POST[FS_SCHEMA_330_HEIGHT_LABEL];

    $window = new Window;

    switch (trim($_POST[FS_SCHEMA_330_OPENING_LABEL])) {
        case MOVING_FS_SCHEMA_330_LEFT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            break;
        case MOVING_FS_SCHEMA_330_RIGHT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            break;
    }
} elseif (trim($_POST[TYPE_LABEL]) === FS_SCHEMA_431) {
    $windowWidth = (int)round((int)$_POST[FS_SCHEMA_431_WIDTH_LABEL] / 4);
    $windowHeight = (int)$_POST[FS_SCHEMA_431_HEIGHT_LABEL];

    $window = new Window;

    switch (trim($_POST[FS_SCHEMA_431_OPENING_LABEL])) {
        case MOVING_FS_SCHEMA_431_LEFT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addWindow($windowWidth, $windowHeight, Window::OPEN_DIRECTION_RIGHT_TOP);
            break;
        case MOVING_FS_SCHEMA_431_RIGHT:
            $window->addWindow($windowWidth, $windowHeight, Window::OPEN_DIRECTION_RIGHT_TOP);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            break;
    }
} elseif (trim($_POST[TYPE_LABEL]) === FS_SCHEMA_541) {
    $windowWidth = (int)round((int)$_POST[FS_SCHEMA_541_WIDTH_LABEL] / 5);
    $windowHeight = (int)$_POST[FS_SCHEMA_541_HEIGHT_LABEL];

    $window = new Window;

    switch (trim($_POST[FS_SCHEMA_541_OPENING_LABEL])) {
        case MOVING_FS_SCHEMA_531_LEFT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addWindow($windowWidth, $windowHeight, Window::OPEN_DIRECTION_LEFT_TOP);
            break;
        case MOVING_FS_SCHEMA_531_RIGHT:
            $window->addWindow($windowWidth, $windowHeight, Window::OPEN_DIRECTION_RIGHT_TOP);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            break;
    }
} elseif (trim($_POST[TYPE_LABEL]) === FS_SCHEMA_550) {
    $windowWidth = (int)round((int)$_POST[FS_SCHEMA_550_WIDTH_LABEL] / 5);
    $windowHeight = (int)$_POST[FS_SCHEMA_550_HEIGHT_LABEL];

    $window = new Window;

    switch (trim($_POST[FS_SCHEMA_550_OPENING_LABEL])) {
        case MOVING_FS_SCHEMA_550_LEFT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            break;
        case MOVING_FS_SCHEMA_550_RIGHT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            break;
    }
} elseif (trim($_POST[TYPE_LABEL]) === FS_SCHEMA_633) {
    $windowWidth = (int)round((int)$_POST[FS_SCHEMA_633_WIDTH_LABEL] / 6);
    $windowHeight = (int)$_POST[FS_SCHEMA_633_HEIGHT_LABEL];

    $window = new Window;

    switch (trim($_POST[FS_SCHEMA_633_OPENING_LABEL])) {
        case MOVING_FS_SCHEMA_633_LEFT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            break;
        case MOVING_FS_SCHEMA_633_RIGHT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            break;
    }
} elseif (trim($_POST[TYPE_LABEL]) === FS_SCHEMA_651) {
    $windowWidth = (int)round((int)$_POST[FS_SCHEMA_651_WIDTH_LABEL] / 6);
    $windowHeight = (int)$_POST[FS_SCHEMA_651_HEIGHT_LABEL];

    $window = new Window;

    switch (trim($_POST[FS_SCHEMA_651_OPENING_LABEL])) {
        case MOVING_FS_SCHEMA_651_LEFT:
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT, Window::OPEN_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_LEFT);
            $window->addWindow($windowWidth, $windowHeight, Window::OPEN_DIRECTION_LEFT_TOP);
            break;
        case MOVING_FS_SCHEMA_651_RIGHT:
            $window->addWindow($windowWidth, $windowHeight, Window::OPEN_DIRECTION_RIGHT_TOP);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT);
            $window->addFS($windowWidth, $windowHeight, Window::MOVE_DIRECTION_RIGHT, Window::OPEN_DIRECTION_LEFT);
            break;
    }
}
else {
    // Если тип окна не распознан, создаем окно по умолчанию
    $window = new Window();
    $window->addWindow(500, 500);
    
    // Для отладки - можно добавить логирование
    error_log("Неизвестный тип окна: " . $_POST[TYPE_LABEL]);
}
/* function generateImage()
{
    $im = new Imagick();
    $specSvg = stristr(stripcslashes($_POST['order_image']), 'id="-aken-');
    $specSvg = '<svg><svg ' . $specSvg;
    $svgss = '<?xml version="1.0"?>' . $specSvg;
    $im->readImageBlob($svgss);
    $im->setImageFormat("png24");
    return $im;
}
 */
global $window;

// И убедитесь, что функция generateImage корректно получает доступ к объекту:
function generateImage() {
    global $window;
    
    if (!isset($window) || !$window instanceof Window) {
        // Создаем окно по умолчанию для отладки
        $window = new Window();
        $window->addWindow(500, 500);
    }

    try {
        $image = $window->paint();
        ob_start();
        imagepng($image);
        imagedestroy($image);
        return ob_get_clean();
    } catch (Exception $e) {
        // Создаем простое изображение с ошибкой
        $image = imagecreatetruecolor(400, 200);
        $bgColor = imagecolorallocate($image, 240, 240, 240);
        $textColor = imagecolorallocate($image, 255, 0, 0);
        imagefill($image, 0, 0, $bgColor);
        imagestring($image, 5, 50, 80, 'Error generating window image', $textColor);
        ob_start();
        imagepng($image);
        imagedestroy($image);
        return ob_get_clean();
    }
}
// function generateImage() {
//     global $window;

//     $image = $window->paint();

//     ob_start();
//     imagepng($image);
//     imagedestroy($image);

//     return ob_get_clean();
// }
