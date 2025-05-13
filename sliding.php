<div class="loadingGif"></div>
<div id="mfp-profil"
    class="mfp-wrap mfp-gallery mfp-close-btn-in mfp-auto-cursor avia-popup mfp-zoom-in mfp-ready mfp-image-loaded"
    tabindex="-1" style=" display:none;background-color: rgba(0, 0, 0, 0.31); z-index: 999999;">
    <div class="mfp-container mfp-image-holder mfp-s-ready">
        <div class="mfp-content">
            <div class="mfp-figure"><button title="" type="button" class="mfp-close" onclick="CloseProfil()">×</button>
                <figure><img class="mfp-img" id="mfp-img-profiil" alt=""
                        src="//aruhaus.eu/wp-content/uploads/2018/05/balcony-the-second-room.jpg"
                        style="max-height: 471px;">
                    <figcaption>
                        <div class="mfp-bottom-bar">
                            <div class="mfp-title" id="mfp-title-profil">balcony-the-second-room</div>
                            <div class="mfp-counter"></div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="mfp-preloader"></div>
    </div>
</div>
<div id="form-container">
    <form id="request-form-doors" method="post" action="<? echo $doorRequestFormAction ?>">
        <div class="progress-bar g-bar">
            <ul class="tabs-wrap">
                <li id="opt-1" class="step-tab">
                    <? echo $doorReqestStep1  ?>
                </li>
                <li id="opt-2" class="step-tab">
                    <? echo $doorReqestStep2  ?>
                </li>
                <li id="opt-3" class="step-tab">
                    <? echo $doorReqestStep3  ?>
                    <div id="additional-services" class="additional-services"></div>
                </li>

                <li id="opt-4" class="step-tab">
                    <? echo $doorReqestStep4  ?>
                </li>
                <li id="opt-5" class="step-tab">Ценовой запрос - Шаг 5 - Подтверждение</li>
            </ul>
        </div>
        <!-- 1 STEP type -->
        <div id="first_step" class="step">
            <div id="window-types" class="form-radios window-types shadow">
                <div class="HST">
                    <div class="progress-bar g-bar" style="margin: 20px 0;">
                        <ul class="tabs-wrap">
                            <li id="opt-1" class="step-tab">
                                <? echo   $doorRequestProfileHST  ?>
                            </li>
                        </ul>
                    </div>
                    <fieldset>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="HST-Schema-A" class="image-wrapper HST-Schema-A"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="HST-Schema-A" class="window-type" name="Ukse tüüp" type="radio"
                                value="HST-Schema-A" />
                            <label class="option" for="HST-Schema-A">HST
                                <? echo $doorRequestScheme  ?> A
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="HST-Schema-C" class="image-wrapper HST-Schema-C"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="HST-Schema-C" class="window-type" name="Ukse tüüp" type="radio"
                                value="HST-Schema-C" />
                            <label class="option" for="HST-Schema-C">HST
                                <? echo $doorRequestScheme  ?> C
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="HST-Schema-G1" class="image-wrapper HST-Schema-G1"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="HST-Schema-G1" class="window-type" name="Ukse tüüp" type="radio"
                                value="HST-Schema-G1" />
                            <label class="option" for="HST-Schema-G1">HST
                                <? echo $doorRequestScheme  ?> G1
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="HST-Schema-H" class="image-wrapper HST-Schema-H"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="HST-Schema-H" class="window-type" name="Ukse tüüp" type="radio"
                                value="HST-Schema-H" />
                            <label class="option" for="HST-Schema-H">HST
                                <? echo $doorRequestScheme  ?> H
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="HST-Schema-K" class="image-wrapper HST-Schema-K"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="HST-Schema-K" class="window-type" name="Ukse tüüp" type="radio"
                                value="HST-Schema-K" />
                            <label class="option" for="HST-Schema-K">HST
                                <? echo $doorRequestScheme  ?> K
                            </label>

                        </div>
                    </fieldset>
                    <div id="next-prev-submit-buttons"><input id="add-file"
                            class="add-file popup-element-title popup-title-active" name="add-file" type="button"
                            value="<? echo $priceRequestAddFile ?>" onclick="OpenPopup()" /></div>
                </div>
                <div class="Smoovio-old">
                    <div class="progress-bar g-bar" style="margin: 20px 0;">
                        <ul class="tabs-wrap">
                            <li id="opt-1" class="step-tab">Smoovio</li>
                        </ul>
                    </div>
                    <fieldset>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="Smoovio" class="image-wrapper Smoovio-wrapper"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="Smoovio" class="window-type" name="Ukse tüüp" type="radio" value="Smoovio" />
                            <label class="option" for="Smoovio">Smoovio</label>

                        </div>
                    </fieldset>

                    <div id="next-prev-submit-buttons"><input id="add-file"
                            class="add-file popup-element-title popup-title-active" name="add-file" type="button"
                            value="<? echo $priceRequestAddFile ?>" onclick="OpenPopup()" /></div>
                </div>
                <div class="PSK">
                    <div class="progress-bar g-bar" style="margin-bottom: 20px;">
                        <ul class="tabs-wrap">
                            <li id="opt-1" class="step-tab">
                                <? echo   $doorRequestProfilePSK  ?>
                            </li>
                        </ul>
                    </div>
                    <fieldset>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="PSK-Schema-A" class="image-wrapper PSK-Schema-A"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="PSK-Schema-A" class="window-type" name="Ukse tüüp" type="radio"
                                value="PSK-Schema-A" />
                            <label class="option" for="PSK-Schema-A">PSK
                                <? echo $doorRequestScheme  ?> A
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="PSK-Schema-C" class="image-wrapper PSK-Schema-C"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="PSK-Schema-C" class="window-type" name="Ukse tüüp" type="radio"
                                value="PSK-Schema-C" />
                            <label class="option" for="PSK-Schema-C">PSK
                                <? echo $doorRequestScheme  ?> C
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="PSK-Schema-G" class="image-wrapper PSK-Schema-G"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="PSK-Schema-G" class="window-type" name="Ukse tüüp" type="radio"
                                value="PSK-Schema-G" />
                            <label class="option" for="PSK-Schema-G">PSK
                                <? echo $doorRequestScheme  ?> G
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="PSK-Schema-K" class="image-wrapper PSK-Schema-K"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="PSK-Schema-K class=" name="Ukse tüüp" type="radio" value="PSK-Schema-K" />
                            <label class="option" for="PSK-Schema-K">PSK
                                <? echo $doorRequestScheme  ?> K
                            </label>

                        </div>
                    </fieldset>

                    <div id="next-prev-submit-buttons"><input id="add-file"
                            class="add-file popup-element-title popup-title-active" name="add-file" type="button"
                            value="<? echo $priceRequestAddFile ?>" onclick="OpenPopup()" /></div>
                </div>
                <div class="FS">
                    <div class="progress-bar g-bar" style="margin-bottom: 20px;">
                        <ul class="tabs-wrap">
                            <li id="opt-1" class="step-tab">
                                <? echo   $doorRequestProfileFS  ?>
                            </li>
                        </ul>
                    </div>
                    <fieldset>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="FS-Schema-321" class="image-wrapper FS-Schema-321"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="FS-Schema-321" class="window-type" name="Ukse tüüp" type="radio"
                                value="FS-Schema-321" />
                            <label class="option" for="FS-Schema-321">FS
                                <? echo $doorRequestScheme  ?> 321
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="FS-Schema-330" class="image-wrapper FS-Schema-330"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="FS-Schema-330" class="window-type" name="Ukse tüüp" type="radio"
                                value="FS-Schema-330" />
                            <label class="option" for="FS-Schema-330">FS
                                <? echo $doorRequestScheme  ?> 330
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="FS-Schema-431" class="image-wrapper FS-Schema-431"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="FS-Schema-431" class="window-type" name="Ukse tüüp" type="radio"
                                value="FS-Schema-431" />
                            <label class="option" for="FS-Schema-431">FS
                                <? echo $doorRequestScheme  ?> 431
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="FS-Schema-541" class="image-wrapper FS-Schema-541"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="FS-Schema-541" class="window-type" name="Ukse tüüp" type="radio"
                                value="FS-Schema-541" />
                            <label class="option" for="FS-Schema-541">FS
                                <? echo $doorRequestScheme  ?> 541
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="FS-Schema-550" class="image-wrapper FS-Schema-550"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="FS-Schema-550" class="window-type" name="Ukse tüüp" type="radio"
                                value="FS-Schema-550" />
                            <label class="option" for="FS-Schema-550">FS
                                <? echo $doorRequestScheme  ?> 550
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="FS-Schema-633" class="image-wrapper FS-Schema-633"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="FS-Schema-633" class="window-type" name="Ukse tüüp" type="radio"
                                value="FS-Schema-633" />
                            <label class="option" for="FS-Schema-633">FS
                                <? echo $doorRequestScheme  ?> 633
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="FS-Schema-651" class="image-wrapper FS-Schema-651"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="FS-Schema-651" class="window-type" name="Ukse tüüp" type="radio"
                                value="FS-Schema-651" />
                            <label class="option" for="FS-Schema-651">FS
                                <? echo $doorRequestScheme  ?> 651
                            </label>

                        </div>
                    </fieldset>

                    <div id="next-prev-submit-buttons"><input id="add-file"
                            class="add-file popup-element-title popup-title-active" name="add-file" type="button"
                            value="<? echo $priceRequestAddFile ?>" onclick="OpenPopup()" /></div>
                </div>
                <div class="SF">
                    <div class="progress-bar g-bar" style="margin-bottom: 20px;">
                        <ul class="tabs-wrap">
                            <li id="opt-1" class="step-tab">
                                <? echo   $doorRequestProfileSF  ?>
                            </li>
                        </ul>
                    </div>
                    <fieldset>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="SF-Schema-A" class="image-wrapper SF-Schema-A"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="SF-Schema-A" class="window-type" name="Ukse tüüp" type="radio"
                                value="SF-Schema-A" />
                            <label class="option" for="SF-Schema-A">SF
                                <? echo $doorRequestScheme  ?> A
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="SF-Schema-C" class="image-wrapper SF-Schema-C"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="SF-Schema-C" class="window-type" name="Ukse tüüp" type="radio"
                                value="SF-Schema-C" />
                            <label class="option" for="SF-Schema-C">SF
                                <? echo $doorRequestScheme  ?> C
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="SF-Scheme-D" class="image-wrapper SF-Scheme-D"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="SF-Scheme-D" class="window-type" name="Ukse tüüp" type="radio"
                                value="SF-Scheme-D" />
                            <label class="option" for="SF-Scheme-D">SF
                                <? echo $doorRequestScheme  ?> D
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="SF-Schema-F" class="image-wrapper SF-Schema-F"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="SF-Schema-F" class="window-type" name="Ukse tüüp" type="radio"
                                value="SF-Schema-F" />
                            <label class="option" for="SF-Schema-F">SF
                                <? echo $doorRequestScheme  ?> F
                            </label>

                        </div>
                        <div id="field-item-window" class="item-window" onclick="Select(this)">
                            <div class="window-wrapper">
                                <div id="SF-Schema-K" class="image-wrapper SF-Schema-K"></div>
                                <div class="tick-wrapper"></div>
                                &nbsp;

                            </div>
                            <input id="SF-Schema-K" class="window-type" name="Ukse tüüp" type="radio"
                                value="SF-Schema-K" />
                            <label class="option" for="SF-Schema-K">SF
                                <? echo $doorRequestScheme  ?> K
                            </label>

                        </div>
                    </fieldset>

                    <div id="next-prev-submit-buttons"><input id="add-file"
                            class="add-file popup-element-title popup-title-active" name="add-file" type="button"
                            value="<? echo $priceRequestAddFile ?>" onclick="OpenPopup()" /></div>
                </div>
            </div>
            <!-- clearfix -->
            <div class="clear"></div>
            <!-- /clearfix -->
            <!-- buttons old location -->

        </div>
        <!-- end.STEP 1 -->

        <!-- # STEP 2 OPTIONS -->
        <div id="second_step" class="step shadow">
            <input type="hidden" name="order_image" id="order_image" />
            <div class="form">
                <div class="second-step-result">
                    <h2>
                        <? echo $priceRequestMeusuremets  ?>
                    </h2>
                    <div class="result-wrapper window-values-only">
                        <div class="full-width-line">ширина</div>
                        <div class="full-height-line">высота</div>
                        <span id="clone">
                            <div style="margin-top: 30px;margin-left: 30px;">
                                <?php include(DRUPAL_ROOT."/sites/default/files/request/dynamic-window.php");  ?>
                            </div>
                            <span id="type-result" class="type-result">
                                <input id="aken_type" name="aken_type" type="text" value="test" /><span id="avatus"
                                    class="avatus"></span><span id="avatus2" class="avatus"></span><span id="avatus3"
                                    class="avatus"></span><span id="avatus4" class="avatus"></span><span id="avatus5"
                                    class="avatus"></span>
                            </span>
                        </span>
                        <div class="clear"></div>
                    </div>
                    <!-- end./result-wrapper window-values-only -->
                    <div class="result-wrapper window-sizes-inputs">

                        <div class="input-full-width field_size">
                            <div class="window-width">
                                <? echo $doorRequestWidth  ?>
                            </div>
                            <input id="window-full-width" class="full-width size disabled" max="10000" min="10"
                                name="Akna laius" size="6" step="1" type="number" />
                            <span class="field-suffix">mm</span>
                        </div>

                        <div class="input-full-height field_size">
                            <div class="window-height">
                                <? echo $doorRequestHeight  ?>
                            </div>
                            <input id="input-full-height" class="size disabled" max="10000" min="10" name="Akna kõrgus"
                                step="1" type="number" />
                            <span class="field-suffix">mm</span>
                        </div>

                        <!-- Avatus --> <!-- RESULT -->
                        <div id="cc">
                            <!--
<table border="0">
<tr id="cw" style="max-width:228px;height:228px;">
<td style="max-width:114px"><img id="c1" src="" /></td>
<td style="max-width:114px"><img id="c1" src="" /></td>
</tr>
</table>
-->
                            <span id="capture" style="float: left; width: 100%; position: relative;">
                                <img id="cw" />
                                <!--        <img style="margin: 0cm 0 0 0cm;float: left;" id="c1" class="cor" src=""/>
<img style="margin: 0cm 0 0 0cm;float: left;" id="c2" class="cor" src=""/>
<img style="margin: 0cm 0 0 0cm;float: left;" id="c3" class="cor" src=""/>
<img style="margin: 0cm 0 0 0cm;float: left;" id="c4" class="cor" src=""/>
<img style="margin: 0cm 0 0 0cm;float: left;" id="c5" class="cor" src=""/> -->
                            </span>
                        </div>
                        <!-- Clone -->

                    </div>
                    <!-- end./result-wrapper window-sizes-inputs -->

                    <div class="result-wrapper window-message-only">
                        <!-- Eriaken -->
                        <div id="options-select" class="form-item webform-component"><label for="erisoovid-input">
                                <? echo $priceRequestSpecialOrder  ?>
                            </label>
                            <input id="erisoovid-input" class="erisoovid-input show-if-checked disabled"
                                name="Erisoovid-input" type="checkbox" value="Special order"
                                onclick="ShowHideEriSoovid()" />
                        </div>
                        <div id="erisoovid" class="form-item webform-component" style="display: none;"><textarea
                                id="erisoovid-textbox" class="textarea disabled" name="Erisoovid"></textarea></div>
                        <!-- Erisoovid -->

                    </div>
                    <!-- end./result-wrapper message only -->

                </div>
                <!-- end./second-step-result -->
                <div class="second-step-options">
                    <h2>
                        <? echo   $priceReqeuestChooseparam  ?>
                    </h2>
                    <fieldset id="second-step-options-fieldset">
                        <!-- Avatus label -->
                        <div class="parameters-container">
                            <!-- Ukse -->
                            <div id="options-label" class="form-item webform-component avatus-ukse"
                                style="display: none;"><label for="ukse-avatavuss">
                                    <? echo $priceRequestDoorOpening  ?>
                                </label></div>
                            <!-- Ukse -->
                            <div id="options-select" class="form-item webform-component avatus-ukse"
                                style="display: none;"><select id="ukse-avatus"
                                    class="form-select disabled avatus-select" name="Ukse avatavus"
                                    onchange="SelectAva(this)">
                                    <optgroup label="<? echo $priceRequestDoorOpening  ?>">
                                        <option selected="selected" value="<? echo $doorUkseAvatusOpt1 ?>"
                                            data-op="vasakult">
                                            <? echo $doorUkseAvatusOpt1 ?>
                                        </option>
                                        <option value="<? echo $doorUkseAvatusOpt2 ?>" data-op="paremalt">
                                            <? echo $doorUkseAvatusOpt2 ?>
                                        </option>
                                        <option value="empty" data-op="empty" style="display:none">empty</option>
                                    </optgroup>
                                </select></div>
                        </div>
                        <div class="parameters-container profiil-container">
                            <!-- Profiil select-->
                            <div id="options-label" class="form-item webform-component profiil"><label for="profiil">
                                    <? echo $priceRequestProfile  ?>
                                </label></div>
                            <!-- Profiil select -->
                            <div id="options-select" class="form-item webform-component profiil"><select id="profiil"
                                    class="form-select disabled" name="profiil" onchange="SelectProfiil(this)">
                                    <optgroup label="<? echo $priceRequestProfile  ?>">
                                        <option value="HST_S8000">HST S8000</option>
                                        <option value="HST_S9000">HST S9000</option>
                                        <option value="HST_S9000_Design">HST S9000 Desing</option>
                                        <option value="Gealan_S8000">Gealan S8000</option>
                                        <option value="Gealan_S9000">Gealan S9000</option>
                                        <option value="Gealan_Lumaxx">Gealan Lumaxx</option>
                                        <option value="Sliding_windows_SF">
                                            <? echo $doorSfProfilOpt ?>
                                        </option>
                                        <option value="Smoovio">Smoovio</option>
                                        <option value="Gealan_Linear">Gealan Linear</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="profiil-link"><a href="#" class="profiil-a"
                                    onclick="ShowProfil(); return false;">?<img
                                        src="https://aruhaus.eu/wp-content/uploads/2018/06/Basic.png"
                                        style="display:none" class="profiil-img" id="profil-img"></a></div>
                        </div>
                        <div class="parameters-container klaaspaket-container">
                            <!-- Klaaspakett select -->
                            <div id="options-label" class="form-item webform-component klaaspaket"><label
                                    for="klaaspakett">
                                    <? echo $priceRequestGlazingUnit  ?>
                                </label></div>
                            <div id="options-select" class="form-item webform-component klaaspaket"><select
                                    id="klaaspaket" class="form-select disabled" name="klaaspakett"
                                    onchange="selectGlazing(this)">
                                    <optgroup label="<? echo   $priceRequestChooseGlazing  ?>">
                                        <option selected="selected" value="24 mm - 2k4-16-4LowE+ arg - Ug - 1,1 W/m2K">
                                            24 mm - 2k4-16-4LowE+ arg - Ug - 1,1 W/m2K</option>
                                        <option value="44mm - 3k4LowE-16TGU-4-16TGU-4LowE+arg - Ug - 0,6 W/m2K">44mm -
                                            3k4LowE-16TGU-4-16TGU-4LowE+arg - Ug - 0,6 W/m2K</option>
                                        <option value="44mm - 3k 4LowE(1,0)-16TGU-4-16TGU-4LowE(1,0)+arg - Ug=0,5 W/m2">
                                            44mm - 3k 4LowE(1,0)-16TGU-4-16TGU-4LowE(1,0)+arg - Ug=0,5 W/m2</option>
                                        <option value="48mm - 3k4LowE-18TGU-4-18TGU-4LowE+argon - Ug - 0,5 W/m2K">48mm -
                                            3k4LowE-18TGU-4-18TGU-4LowE+argon - Ug - 0,5 W/m2K</option>
                                        <option value="52mm - 3k4LowE-20TGU-4-20TGU-4LowE+argon - Ug - 0,5 W/m2K">52mm -
                                            3k4LowE-20TGU-4-20TGU-4LowE+argon - Ug - 0,5 W/m2K</option>
                                        <option value="Other">Other</option>
                                    </optgroup>
                                </select></div>
                            <div class="klaaspaket-link">
                                <a class="img-fancy fancy-no-arrows glazing-a"
                                    href="/sites/default/files/Double glazing.jpg"
                                    title="24 mm - 2k4-16-4LowE+ arg - Ug - 1,1 W/m2K" rel="gallery">?
                                    <img src="/sites/default/files/Double glazing.jpg" class="glazing-hover"
                                        alt="24 mm - 2k4-16-4LowE+ arg - Ug - 1,1 W/m2K">
                                </a>
                            </div>
                        </div>
                        <div class="parameters-container colors-container">
                            <!-- Color inside -->
                            <div id="options-label" class="form-item webform-component color-inside"><label
                                    for="color-inside">
                                    <? echo  $priceRequestColourInside  ?>
                                </label></div>
                            <!-- Color inside -->
                            <div id="options-select" class="form-item webform-component color-inside"><select
                                    id="color-inside" class="form-select color-box disabled" name="Värv seest"
                                    onchange="SelectColorInside(this); addColor();">
                                    <!-- 
<optgroup label="AcrylColor">
<option value="RAL7016-anthrazitgrau">Anthrazitgrau / RAL 7016</option>
<option value="DB703">DB703</option>
<option value="RAL7040-fenstergrau">Fenstergrau / RAL 7040</option>
<option value="RAL8014-sepiabraun">Sepiabraun / RAL 8014</option>
<option value="RAL7039-quarzgrau">Quarzgrau / RAL 7039</option>
<option value="RAL9007-silber">Silber / RAL 9007</option>
<option value="RAL7015-schiefergrau">Schiefergrau / RAL 7015</option>
<option value="RAL9005-tiefschwarz">Tiefschwarz / RAL 9005</option>
<option value="RAL9016-reinweiß">Reinweiß / RAL 9016</option>
</optgroup>
-->

                                    <optgroup label="<? echo $pricerequestLabelColorOpt1 ?>">
                                        <option selected="selected" value="RAL9016-weiß">
                                            <? echo    $pricerequestSelectedColorOpt  ?>
                                        </option>
                                        <option value="Deco-RAL-7016-genarbat-Antrazitgrau">Deco RAL 7016 genarbat
                                            Antrazitgrau</option>
                                        <option value="Golden Oak">Golden Oak</option>
                                        <option value="Mahagoni">Mahagoni</option>
                                        <option value="Mahagoni">Nussbaum</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt2 ?>">
                                        <option value="Realwood-Ginger-Oak">Realwood Ginger Oak</option>
                                        <option value="Realwood-Honey-Oak">Realwood Honey Oak</option>
                                        <option value="Realwood-Ral-7016">Realwood Ral 7016</option>
                                        <option value="Realwood-Ral-9010">Realwood Ral 9010</option>
                                        <option value="Realwood-Turner-Oak-malt">Realwood Turner Oak malt</option>
                                        <option value="Realwood-Weissbach-Eiche">Realwood Weissbach Eiche</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt3 ?>">
                                        <option value="anTEAK">anTEAK</option>
                                        <option value="Bergkiefer">Bergkiefer</option>
                                        <option value="Eiche-dunkel">Eiche dunkel</option>
                                        <option value="Eiche-hell">Eiche hell</option>
                                        <option value="Eiche-Rustikal">Eiche Rustikal</option>
                                        <option value="Meranti">Meranti</option>
                                        <option value="Moreiche">Moreiche</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Sheffield Oak Light">Sheffield Oak Light</option>
                                        <option value="Streifendouglasie">Streifendouglasie</option>
                                        <option value="Walnuss">Walnuss</option>
                                        <option value="Winchester-XA">Winchester XA</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt4 ?>">
                                        <option value="Deco-RAL-3005-Weinrot">Deco RAL 3005 Weinrot</option>
                                        <option value="Deco-RAL-3011-Braunrot">Deco RAL 3011 Braunrot</option>
                                        <option value="Deco-RAL-5011-Stahlblau">Deco RAL 5011 Stahlblau</option>
                                        <option value="Deco-RAL-6005-Mossgrün">Deco RAL 6005 - Mossgrün</option>
                                        <option value="Deco-RAL-6009-Tannegrün">Deco RAL 6009 - Tannegrün</option>
                                        <option value="Deco-RAL-7001-Silbergrau">Deco RAL 7001 Silbergrau</option>
                                        <option value="Deco-RAL-7012-Basaltgrau">Deco RAL 7012 - Basaltgrau</option>
                                        <option value="Deco-RAL-7023-Betongrau">Deco RAL 7023 - Betongrau</option>
                                        <option value="Deco-RAL-7035-Lichtgrau">Deco RAL 7035 Lichtgrau</option>
                                        <option value="Deco-RAL-7039-Quarzgrau">Deco RAL 7039 Quarzgrau</option>
                                        <option value="Deco-RAL-9001-CremeWeiß">Deco RAL 9001 CremeWeiß</option>
                                        <option value="Deco-RAL-9003-BrilliantWeiß">Deco RAL 9003 - BrilliantWeiß
                                        </option>
                                        <option value="Deco-RAL-9010-ReinWeiß">Deco RAL 9010 - ReinWeiß</option>
                                        <option value="Monumentegrün">Monumentegrün</option>
                                        <option value="Schokobraun">Schokobraun</option>
                                        <option value="Schwarzbraun">Schwarzbraun</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt5 ?>">
                                        <option value="Deko-RAL-7012-Basaltgrau-glatt">Deko RAL 7012 Basaltgrau glatt
                                        </option>
                                        <option value="Deko-RAL-7016-Anthrazitgrau-glatt">Deko RAL 7016 Anthrazitgrau
                                            glatt</option>
                                        <option value="Deko-RAL-7021-Schwarzgrau-glatt">Deko RAL 7021 Schwarzgrau glatt
                                        </option>
                                        <option value="Deko-RAL-7039-Quarzgrau-glatt">Deko RAL 7039 Quarzgrau glatt
                                        </option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt6 ?>">
                                        <option value="Alux-DB703">Alux DB703</option>
                                        <option value="Bronze-Platin">Bronze Platin</option>
                                        <option value="Metbrush-Messing">Metbrush Messing</option>
                                        <option value="Metbrush-Silver">Metbrush Silver</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt7 ?>">
                                        <option value="RAL-7016-Anthrazitgrau-matt">RAL 7016 Anthrazitgrau matt</option>
                                        <option value="RAL-9001-CremeWeiß">RAL 9001 CremeWeiß</option>
                                        <option value="RAL-9010-ReinWeiß-matt">RAL 9010 ReinWeiß matt</option>
                                        <option value="Schwarz-matt">Schwarz matt</option>
                                        <option value="Schwarzbraun-Matt">Schwarzbraun Matt</option>
                                    </optgroup>

                                    <!--
<optgroup label="Standard">
<option selected="selected" value="RAL9016-weiß"><? echo    $pricerequestSelectedColorOpt  ?></option>
<option value="anthrazitgrau">Anthrazitgrau</option>
<option value="golden-oak">Golden Oak</option>
<option value="mahagoni">Mahagoni</option>
<option value="nussbaum">Nussbaum</option>
<option value="eiche-dunkel">Eiche dunkel</option>
<option value="mooreiche">Mooreiche</option>
<option value="schwarzbraun">Schwarzbraun</option>
<option value="eiche-rustikal">Eiche rustikal</option>
</optgroup>
<optgroup label="Non-standard">
<option value="bronze-platin">Bronze Platin</option>
<option value="siena-pn-noce">Siena PN Noce</option>
<option value="quarzgrau">Quarzgrau</option>
<option value="silbergrau">Silbergrau</option>
<option value="reinweiß">Reinweiß</option>
<option value="stahlblau">Stahlblau</option>
<option value="bergkiefer">Bergkiefer</option>
<option value="streifendouglasie">Streifendouglasie</option>
<option value="kirsche">Kirsche</option>
<option value="tannengrün">Tannengrün</option>
<option value="weinrot">Weinrot</option>
<option value="nussbaum-natur">Nussbaum natur</option>
<option value="winterdouglasie">Winterdouglasie</option>
<option value="oregon">Oregon</option>
<option value="achatgrau">Achatgrau</option>
<option value="walnuss">Walnuss</option>
<option value="anteak">AnTEAK</option>
<option value="brillantweiss">Brillantweiss</option>
<option value="anthrazitgrau-glatt">Anthrazitgrau glatt</option>
<option value="sheffield-oak-light">Sheffield Oak Light</option>
<option value="braunrot">Braunrot</option>
<option value="metbrush-silver">Metbrush Silver</option>
<option value="brillantblau">Brillantblau</option>
<option value="metbrush-messing">Metbrush Messing</option>
<option value="cremeweiß">Cremeweiß</option>
<option value="schokobraun">Schokobraun</option>
<option value="lichtgrau">Lichtgrau</option>
<option value="schwarzbraun-glatt">Schwarzbraun glatt</option>
<option value="moosgrün">Moosgrün</option>
<option value="eiche-hell">Eiche hell</option>
</optgroup>
-->
                                </select></div>
                            <div class="color-inside-image"
                                style="background-image: url('/sites/default/files/RAL9016-weiß.jpg');">
                                <a class="img-fancy fancy-no-arrows" href="/sites/default/files/RAL9016-weiß.jpg"
                                    rel="gallery">
                                    <img src="/sites/default/files/RAL9016-weiß.jpg"
                                        style="height: 100%; width: 100%; display: block;">
                                    <img src="/sites/default/files/RAL9016-weiß.jpg" class="color-hover">
                                </a>
                            </div>
                        </div>
                        <div class="parameters-container colors-container">
                            <!-- Color outside -->
                            <div id="options-label" class="form-item webform-component color-outside"><label
                                    for="color-outside">
                                    <? echo   $priceRequestColourOutside  ?>
                                </label></div>
                            <!-- Color outside -->
                            <div id="options-select" class="form-item webform-component color-outside"><select
                                    id="color-outside" class="form-select color-box disabled" name="Värv väljast"
                                    onchange="SelectColorOutside(this); addColor();">
                                    <optgroup label="AcrylColor">
                                        <option value="DB703-AcrylColor">DB703 AcrylColor</option>
                                        <option value="RAL-7015-AcrylColor">RAL 7015 AcrylColor</option>
                                        <option value="RAL-7016-AcrylColor">RAL 7016 AcrylColor</option>
                                        <option value="RAL-7022-AcrylColor">RAL 7022 AcrylColor</option>
                                        <option value="RAL-7039-AcrylColor">RAL 7039 AcrylColor</option>
                                        <option value="RAL-7040-AcrylColor">RAL 7040 AcrylColor</option>
                                        <option value="RAL-8014-AcrylColor">RAL 8014 AcrylColor</option>
                                        <option value="RAL-9005-AcrylColor">RAL 9005 AcrylColor</option>
                                        <option value="SILBER-AcrylColor">SILBER AcrylColor</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt1 ?>">
                                        <option selected="selected" value="RAL9016-weiß">
                                            <? echo    $pricerequestSelectedColorOpt  ?>
                                        </option>
                                        <option value="Deco-RAL-7016-genarbat-Antrazitgrau">Deco RAL 7016 genarbat
                                            Antrazitgrau</option>
                                        <option value="Golden Oak">Golden Oak</option>
                                        <option value="Mahagoni">Mahagoni</option>
                                        <option value="Mahagoni">Nussbaum</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt2 ?>">
                                        <option value="Realwood-Ginger-Oak">Realwood Ginger Oak</option>
                                        <option value="Realwood-Honey-Oak">Realwood Honey Oak</option>
                                        <option value="Realwood-Ral-7016">Realwood Ral 7016</option>
                                        <option value="Realwood-Ral-9010">Realwood Ral 9010</option>
                                        <option value="Realwood-Turner-Oak-malt">Realwood Turner Oak malt</option>
                                        <option value="Realwood-Weissbach-Eiche">Realwood Weissbach Eiche</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt3 ?>">
                                        <option value="anTEAK">anTEAK</option>
                                        <option value="Bergkiefer">Bergkiefer</option>
                                        <option value="Eiche-dunkel">Eiche dunkel</option>
                                        <option value="Eiche-hell">Eiche hell</option>
                                        <option value="Eiche-Rustikal">Eiche Rustikal</option>
                                        <option value="Meranti">Meranti</option>
                                        <option value="Moreiche">Moreiche</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Sheffield Oak Light">Sheffield Oak Light</option>
                                        <option value="Streifendouglasie">Streifendouglasie</option>
                                        <option value="Walnuss">Walnuss</option>
                                        <option value="Winchester-XA">Winchester XA</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt4 ?>">
                                        <option value="Deco-RAL-3005-Weinrot">Deco RAL 3005 Weinrot</option>
                                        <option value="Deco-RAL-3011-Braunrot">Deco RAL 3011 Braunrot</option>
                                        <option value="Deco-RAL-5011-Stahlblau">Deco RAL 5011 Stahlblau</option>
                                        <option value="Deco-RAL-6005-Mossgrün">Deco RAL 6005 - Mossgrün</option>
                                        <option value="Deco-RAL-6009-Tannegrün">Deco RAL 6009 - Tannegrün</option>
                                        <option value="Deco-RAL-7001-Silbergrau">Deco RAL 7001 Silbergrau</option>
                                        <option value="Deco-RAL-7012-Basaltgrau">Deco RAL 7012 - Basaltgrau</option>
                                        <option value="Deco-RAL-7023-Betongrau">Deco RAL 7023 - Betongrau</option>
                                        <option value="Deco-RAL-7035-Lichtgrau">Deco RAL 7035 Lichtgrau</option>
                                        <option value="Deco-RAL-7039-Quarzgrau">Deco RAL 7039 Quarzgrau</option>
                                        <option value="Deco-RAL-9001-CremeWeiß">Deco RAL 9001 CremeWeiß</option>
                                        <option value="Deco-RAL-9003-BrilliantWeiß">Deco RAL 9003 - BrilliantWeiß
                                        </option>
                                        <option value="Deco-RAL-9010-ReinWeiß">Deco RAL 9010 - ReinWeiß</option>
                                        <option value="Monumentegrün">Monumentegrün</option>
                                        <option value="Schokobraun">Schokobraun</option>
                                        <option value="Schwarzbraun">Schwarzbraun</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt5 ?>">
                                        <option value="Deko-RAL-7012-Basaltgrau-glatt">Deko RAL 7012 Basaltgrau glatt
                                        </option>
                                        <option value="Deko-RAL-7016-Anthrazitgrau-glatt">Deko RAL 7016 Anthrazitgrau
                                            glatt</option>
                                        <option value="Deko-RAL-7021-Schwarzgrau-glatt">Deko RAL 7021 Schwarzgrau glatt
                                        </option>
                                        <option value="Deko-RAL-7039-Quarzgrau-glatt">Deko RAL 7039 Quarzgrau glatt
                                        </option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt6 ?>">
                                        <option value="Alux-DB703">Alux DB703</option>
                                        <option value="Bronze-Platin">Bronze Platin</option>
                                        <option value="Metbrush-Messing">Metbrush Messing</option>
                                        <option value="Metbrush-Silver">Metbrush Silver</option>
                                    </optgroup>

                                    <optgroup label="<? echo $pricerequestLabelColorOpt7 ?>">
                                        <option value="RAL-7016-Anthrazitgrau-matt">RAL 7016 Anthrazitgrau matt</option>
                                        <option value="RAL-9001-CremeWeiß">RAL 9001 CremeWeiß</option>
                                        <option value="RAL-9010-ReinWeiß-matt">RAL 9010 ReinWeiß matt</option>
                                        <option value="Schwarz-matt">Schwarz matt</option>
                                        <option value="Schwarzbraun-Matt">Schwarzbraun Matt</option>
                                    </optgroup>

                                    <!--
<optgroup label="Standard">
<option selected="selected" value="RAL9016-weiß"><? echo    $pricerequestSelectedColorOpt  ?></option>
<option value="anthrazitgrau">Anthrazitgrau</option>
<option value="golden-oak">Golden Oak</option>
<option value="mahagoni">Mahagoni</option>
<option value="nussbaum">Nussbaum</option>
<option value="eiche-dunkel">Eiche dunkel</option>
<option value="mooreiche">Mooreiche</option>
<option value="schwarzbraun">Schwarzbraun</option>
<option value="eiche-rustikal">Eiche rustikal</option>
</optgroup>
<optgroup label="Non-standard">
<option value="bronze-platin">Bronze Platin</option>
<option value="siena-pn-noce">Siena PN Noce</option>
<option value="quarzgrau">Quarzgrau</option>
<option value="silbergrau">Silbergrau</option>
<option value="reinweiß">Reinweiß</option>
<option value="stahlblau">Stahlblau</option>
<option value="bergkiefer">Bergkiefer</option>
<option value="streifendouglasie">Streifendouglasie</option>
<option value="kirsche">Kirsche</option>
<option value="tannengrün">Tannengrün</option>
<option value="weinrot">Weinrot</option>
<option value="nussbaum-natur">Nussbaum natur</option>
<option value="winterdouglasie">Winterdouglasie</option>
<option value="oregon">Oregon</option>
<option value="achatgrau">Achatgrau</option>
<option value="walnuss">Walnuss</option>
<option value="anteak">AnTEAK</option>
<option value="brillantweiss">Brillantweiss</option>
<option value="anthrazitgrau-glatt">Anthrazitgrau glatt</option>
<option value="sheffield-oak-light">Sheffield Oak Light</option>
<option value="braunrot">Braunrot</option>
<option value="metbrush-silver">Metbrush Silver</option>
<option value="brillantblau">Brillantblau</option>
<option value="metbrush-messing">Metbrush Messing</option>
<option value="cremeweiß">Cremeweiß</option>
<option value="schokobraun">Schokobraun</option>
<option value="lichtgrau">Lichtgrau</option>
<option value="schwarzbraun-glatt">Schwarzbraun glatt</option>
<option value="moosgrün">Moosgrün</option>
<option value="eiche-hell">Eiche hell</option>
</optgroup>
-->
                                </select></div>
                            <div class="color-outside-image"
                                style="background-image: url('/sites/default/files/RAL9016-weiß.jpg');">
                                <a class="img-fancy fancy-no-arrows" href="/sites/default/files/RAL9016-weiß.jpg"
                                    rel="gallery">
                                    <img src="/sites/default/files/RAL9016-weiß.jpg"
                                        style="height: 100%; width: 100%; display: block;">
                                    <img src="/sites/default/files/RAL9016-weiß.jpg" class="color-hover">
                                </a>
                            </div>
                        </div>
                        <div class="parameters-container">
                            <!-- Total -->
                            <div id="options-label" class="form-item webform-component"><label for="kogus">
                                    <? echo    $priceRequestAmount  ?>
                                </label></div>
                            <!-- Total -->
                            <div id="options-select" class="form-item webform-component"><input id="Amount"
                                    class="form-text form-number kogus disabled" min="1" name="Kogus" step="1"
                                    type="number" value="1" /></div>
                        </div>
                    </fieldset>
                </div>
                <!-- end./options -->

            </div>
            <!-- clearfix -->
            <div class="clear"></div>
            <!-- /clearfix -->
            <div id="next-prev-submit-buttons"><input id="back" class="back" type="button"
                    value="<? echo $priceRequestButtonBack  ?>"
                    onclick="StepJump('second_step','first_step','back')" /><input id="add-item"
                    class="submit add-item second" type="button" value="<? echo $doorAddNewButton  ?>"
                    onclick="if (StepJump('second_step','first_step','') == true)  SaveAken();" /><input
                    id="submit_second" class="submit go-to-service-selection" name="submit_second" type="button"
                    value="<? echo    $priceRequestNext  ?>" onclick="StepJump('second_step','third_step','')" /></div>
        </div>
        <!-- end.STEP 2 OPTIONS -->

        <!-- 3 STEP ADD -->
        <div id="third_step" class="step shadow">
            <div class="form">
                <div class="third-step-add">

                    <!-- yes or no -->
                    <h2>
                        <? echo   $priceReqeuestChooseparam  ?>
                    </h2>
                    <div id="delivery"
                        class="form-item webform-component webform-component-radios form-radios delivery">
                        <div class="form-item webform-component delivery-yes"><input id="delivery-yes"
                                class="delivery-on delivery-or-not" name="Lisateenused" type="radio"
                                value="<? echo     $priceRequestDelivery  ?>" data-id="Delivery"
                                onclick="ShowHideDelivery()" />
                            <label class="option" for="delivery-yes">
                                <? echo     $priceRequestDelivery  ?>
                            </label>
                        </div>
                        <div class="form-item webform-component delivery-no"><input id="delivery-no"
                                class="form-radio delivery-or-not" name="Lisateenused" type="radio"
                                value="<? echo     $priceRequestNoDelivery  ?>" data-id="No"
                                onclick="HideDeliveryInstallation()" />
                            <label class="option" for="delivery-no">
                                <? echo    $priceRequestNoDelivery  ?>
                            </label>
                        </div>
                        <? if($lang == 'et' || $lang == 'ru') {
        echo '
    <div class="form-item webform-component paigaldus-yes NonexportParam">
    <input type="radio" id="paigaldus-yes" name="Lisateenused" data-id="Install"  class="form-radio delivery-or-not jump-next" value="'. $priceRequestisntallation  .'" onclick="ShowHideInstallation()"> 
    <label class="option" for="paigaldus-yes">'. $priceRequestisntallation  .'</label>
     </div>
   '; } ?>
                        <!-- Yes Choices -->
                        <div id="delivery-enter" style="display: none;">

                            <!-- Address for delivery -->
                            <div id="delivery-on-millisele-aadressile"
                                class="form-item webform-component webform-component-textfield"><label
                                    for="delivery-on-address">
                                    <? echo     $priceRequestAdressForDelivery  ?>
                                </label>
                                <textarea id="delivery-on-address" class="textarea delivery-on-address disabled"
                                    name="Millisele_aadressile"></textarea>
                            </div>
                            <!-- Stage -->

                        </div>
                        <!-- Installation -->

                    </div>
                    <? if($lang == 'et' || $lang == 'ru') {
        echo '
<div class="installation-on NonexportParam" id="installation-on" style="display: none;">
<div class="form-item webform-component webform-component-select" id="webform-component-delivery-on--mille-korrusele">
            <label for="edit-submitted-delivery-on-mille-korrusele">'. $priceRequestFloor  .'</label>
            <select id="edit-submitted-delivery-on-mille-korrusele" name="Korrusele vedu" class="form-select">
            <optgroup label="'. $priceRequestFloorOptGroup  .'">
            <option value="'. $priceRequestFloorOpt1  .'">'. $priceRequestFloorOpt1  .'</option>
            <option value="1">1 '. $priceRequestFloor  .'.</option>
            <option value="2">2 '. $priceRequestFloor  .'.</option>
            <option value="3">3 '. $priceRequestFloor  .'.</option>
            <option value="4">4 '. $priceRequestFloor  .'.</option>
            <option value="5">5 '. $priceRequestFloor  .'.</option>
            <option value="6">6 '. $priceRequestFloor  .'.</option>
            <option value="7">7 '. $priceRequestFloor  .'.</option>
            <option value="8">8 '. $priceRequestFloor  .'.</option>
            <option value="9">9 '. $priceRequestFloor  .'.</option>
            <option value="10">10 '. $priceRequestFloor  .'.</option>
            <option value="11">11 '. $priceRequestFloor  .'.</option>
            <option value="12">12 '. $priceRequestFloor  .'.</option>
            <option value="13">13 '. $priceRequestFloor  .'.</option>
            <option value="14">14 '. $priceRequestFloor  .'.</option>
            <option value="15">15 '. $priceRequestFloor  .'.</option>
            <option value="16">16 '. $priceRequestFloor  .'.</option>
            </optgroup>
            </select>
            </div>
            <!-- Building type -->
            <div class="form-item webform-component webform-component-select" id="webform-component-paigaldus-on--maja-tuup">
            <label for="edit-submitted-paigaldus-on-maja-tuup">'. $priceRequestTypeOfBuildingOptGroup  .'</label>
            <select id="edit-submitted-paigaldus-on-maja-tuup" name="Hoonetüüp" class="form-select">
            <optgroup label="'.$priceRequestTypeOfBuilding .'">
            <option value="'. $priceRequestTypeOfBuildingOpt1  .'">'. $priceRequestTypeOfBuildingOpt1  .'</option>
            <option value="'. $priceRequestTypeOfBuildingOpt2  .'">'. $priceRequestTypeOfBuildingOpt2  .'</option>
            <option value="'. $priceRequestTypeOfBuildingOpt3  .'">'. $priceRequestTypeOfBuildingOpt3  .'</option>
            <option value="'. $priceRequestTypeOfBuildingOpt4  .'">'. $priceRequestTypeOfBuildingOpt4  .'</option>
            <option value="'.  $priceRequestWindowSillColorOpt12   .'">'.  $priceRequestWindowSillColorOpt12 .'</option>
            </optgroup>
            </select>
            </div>
            <!-- Prugiveo -->
            <div class="form-item webform-component webform-component-checkboxes" id="webform-component-paigaldus-on--prugiveo">
            <input type="checkbox" id="edit-submitted-paigaldus-on-prugiveo-1" name="Prugi aravedu" class="form-checkbox">
            <label class="option" for="edit-submitted-paigaldus-on-prugiveo-1">'. $priceRequestGarbage  .'</label>
            </div>
            <!-- Sissevimistlus -->
            <div class="form-item webform-component webform-component-checkboxes" id="webform-component-paigaldus-on--sise-viimistlus">
            <input type="checkbox" id="edit-submitted-paigaldus-on-sise-viimistlus-1" name="Siseviimistlus" class="form-checkbox">  <label class="option" for="edit-submitted-paigaldus-on-sise-viimistlus-1">'. $priceRequestInterior  .'</label>
            </div>
            <!-- Valjavimistlus -->
            <div class="form-item webform-component webform-component-checkboxes" id="webform-component-paigaldus-on--valja-viimistlus">
            <input type="checkbox" id="edit-submitted-paigaldus-on-valja-viimistlus-1" name="Valisviimistlus" class="form-checkbox">
            <label class="option" for="edit-submitted-paigaldus-on-valja-viimistlus-1">'. $priceRequestExterior  .'</label>
            </div>
            
            </div>'; } ?>
                </div>
                <!-- end./third-step-add -->

            </div>
            <!-- clearfix -->
            <div class="clear"></div>
            <!-- /clearfix -->
            <div id="next-prev-submit-buttons">
                <!-- <input class="back" type="button" value="<? echo $priceRequestButtonBack  ?>" id="back" onclick="StepJump('third_step','second_step','back')" /> --><input
                    id="submit_third" class="submit" name="submit_third" type="button"
                    value="<? echo $priceRequestNext ?>" onclick="StepJump('third_step','fourth_step','')" /></div>
        </div>
        <!-- end.STEP 3 ADD -->

        <!-- 4 STEP INFO -->
        <div id="fourth_step" class="step shadow">
            <div class="form">

                <!-- Summary -->
                <div class="summary-sidebar-wrapper">
                    <div id="summary-sidebar" class="summary">
                        <div id="summary-type" class="summary-type"></div>
                        <div id="summary-window-values-new" class="summary-result-new">
                            <div data-count="1" class="item-win-val1 item"><input class="red-sprite item-del button"
                                    type="button" title="Удалить" id="1" onclick="RemoveAken(this)">
                                <div class="item-type"><label>
                                        <? echo $priceRequestWindowType ?>
                                    </label><span class="type-result-window"></span></div><span
                                    class="item-arrow up pull"></span>
                            </div>
                        </div>
                        <div id="summary-add-values-new" class="summary-result"></div>
                    </div>
                </div>
                <!-- Info -->
                <div class="andmed-wrapper">
                    <div class="fourth-step-andmed">
                        <div id="webform-component-perekonnanimi"
                            class="form-item webform-component webform-component-textfield"><label for="Perekonnanimi">
                                <? echo       $priceRequestLastName  ?>
                            </label>
                            <input id="perekonnanimi" class="cname form-text" maxlength="128" name="Perekonnanimi"
                                size="60" type="text" value="" />
                        </div>
                        <div id="webform-component-nimi"
                            class="form-item webform-component webform-component-textfield"><label for="nimi">
                                <? echo   $priceRequestFirstName  ?>
                            </label>
                            <input id="nimi" class="cname form-text" maxlength="128" name="Nimi" size="60" type="text"
                                value="" />
                        </div>
                        <div id="webform-component-e-mail" class="form-item webform-component webform-component-email">
                            <label for="e-mail">
                                <? echo   $priceRequestEmail  ?>
                            </label>
                            <input id="e-mail" class="email form-text cmail" name="E-mail" size="60" type="email"
                                value="" />
                        </div>
                        <div id="webform-component-tel" class="form-item webform-component webform-component-tel"><label
                                for="tel">
                                <? echo   $priceRequestPhoneNumber  ?>
                            </label>
                            <input id="tel" class="tel form-num ctel" name="Tel.number" pattern="[0-9]{15}" size="20"
                                type="tel" value="" />
                        </div>
                        <div id="webform-component-filiaali-teenus"
                            class="form-item webform-component webform-component-select" <? if($lang !='et' && $lang
                            !='ru' ) {echo 'style="display:none"' ;} ?> ><label for="filiaali-teenus">
                                <? echo   $priceRequestServicingSalesDepartment  ?>
                            </label>
                            <select id="filiaali-teenus" name="Teenindav muugiosakond"
                                class="form-select required cfil">
                                <option value="" selected="selected" disabled>- Выберите Филиал обслуживания -</option>
                                <option value="" disabled>- Таллинн -</option>
                                <option value="info@arutech.ee">Главная контора</option>
                                <option value="haabersti@qi.aru.ee">Хааберсти</option>
                                <option value="punane@qi.aru.ee">Ласнамяэ</option>
                                <option value="mustamae@qi.aru.ee">Мустамяе</option>
                                <!-- <option value="vambola@qi.aru.ee">Sopruse</option>-->
                                <!-- <option value="tulika@qi.aru.ee">Tulika</option>-->
                                <option value="" disabled>Эстония</option>
                                <option value="ahtme@qi.aru.ee">Ахтме</option>
                                <option value="haapsalu@qi.aru.ee">Хаапсалу</option>
                                <option value="jogeva@qi.aru.ee">Йыегева</option>
                                <option value="johvi@qi.aru.ee">Йыхви</option>
                                <option value="ahtme@qi.aru.ee">Кохтла-ярве</option>
                                <option value="narva@qi.aru.ee">Нарва</option>
                                <option value="paide@qi.aru.ee">Пайде</option>
                                <option value="parnu@qi.aru.ee">Пярну</option>
                                <option value="rakvere.tellimus@qi.aru.ee">Раквере</option>
                                <option value="rapla@qi.aru.ee">Рапла</option>
                                <option value="tartu1@qi.aru.ee">Тарту</option>
                                <option value="valga@qi.aru.ee">Валга</option>
                                <option value="viljandi@qi.aru.ee">Вильянди</option>
                                <option value="voru@qi.aru.ee">Выру</option>
                                <option value="" disabled>- Экспорт -</option>
                                <option value="export@qi.aru.ee">Экспорт</option>
                            </select>
                        </div>
                        <!--<div class="g-recaptcha"
          data-sitekey = "6Lca540UAAAAAPuhFUjW2hoZvIxs8rT5fiuI5NJr"
          data-callback="onSubmit"
          data-size="invisible">
    </div>
<!-- end./fourth-step-andmed -->

                    </div>
                </div>
                <!-- clearfix -->
                <div class="clear"></div>
                <!-- /clearfix -->
                <div id="next-prev-submit-buttons"><input id="back" class="back" type="button"
                        value="<? echo   $priceRequestEditAdditionalServices  ?>"
                        onclick="StepJump('fourth_step','third_step','')" /><input id="add-item" class="submit add-item"
                        type="button" value="<? echo $doorAddNewButton ?>"
                        onclick="StepJump('fourth_step','first_step',''); SaveAken()" /><input id="submit_fourth"
                        class="submit" name="submit_fourth" type="button"
                        value="<? echo   $priceRequestSendPriceRequest  ?>" onclick="CheckLastStep()" /></div>
                <!-- Loading -->

            </div>
            <!-- end.STEP 4 INFO -->

    </form>
</div>