window.addEventListener('load', function () {

    // رپذ؟ذ¸رپذ¾ذ؛ ذ؟ذ¾ر‡ر‚ذ¾ذ²ر‹ر… رڈر‰ذ¸ذ؛ذ¾ذ² ر‚رƒر‚: /request-filials.php - ذ² ذ؛ذ¾ر€ذ½ذµ رپذ°ذ¹ر‚ذ°

    // var arr = window.location.pathname
    /*
    var recaptchaDiv = document.createElement('div')
    recaptchaDiv.id = 'recaptchDiv'
    recaptchaDiv.style = 'z-index: 500000;'
    try {
      document.getElementById('webform-client-form-1716').appendChild(recaptchaDiv)
      grecaptcha.render('recaptchDiv', {
        sitekey: '6Lca540UAAAAAPuhFUjW2hoZvIxs8rT5fiuI5NJr',
        callback: 'submitAddfile',
        size: 'invisible'
      })
    } catch (err) {

    } */
    if (window.location.pathname.indexOf('windows-price-request') > -1 || window.location.pathname.indexOf('sliding-door-price-request') > -1) {
        window.onbeforeunload = function () {
            return true
        }
    }
    // Remove navigation prompt
    // window.onbeforeunload = null;
    switch (window.location.search.substr(1)) {
        case 'profile=SF':
            document.getElementsByClassName('SF')[0].style.margin = '20px 0'
            document.getElementById('request-form-doors').action = document.getElementById('request-form-doors').action + '&profile=SF'
            document.getElementsByClassName('Smoovio-old')[0].style.display = 'none'
            document.getElementsByClassName('HST')[0].style.display = 'none'
            document.getElementsByClassName('PSK')[0].style.display = 'none'
            document.getElementsByClassName('FS')[0].style.display = 'none'
            break
        case 'profile=HST':
            document.getElementById('request-form-doors').action = document.getElementById('request-form-doors').action + '&profile=HST'
            document.getElementsByClassName('Smoovio-old')[0].style.display = 'none'
            document.getElementsByClassName('SF')[0].style.display = 'none'
            document.getElementsByClassName('PSK')[0].style.display = 'none'
            document.getElementsByClassName('FS')[0].style.display = 'none'
            break
        case 'profile=PSK':
            document.getElementsByClassName('PSK')[0].style.margin = '20px 0'
            document.getElementById('request-form-doors').action = document.getElementById('request-form-doors').action + '&profile=PSK'
            document.getElementsByClassName('Smoovio-old')[0].style.display = 'none'
            document.getElementsByClassName('SF')[0].style.display = 'none'
            document.getElementsByClassName('HST')[0].style.display = 'none'
            document.getElementsByClassName('FS')[0].style.display = 'none'
            break
        case 'profile=FS':
            document.getElementsByClassName('FS')[0].style.margin = '20px 0'
            document.getElementById('request-form-doors').action = document.getElementById('request-form-doors').action + '&profile=FS'
            document.getElementsByClassName('Smoovio-old')[0].style.display = 'none'
            document.getElementsByClassName('SF')[0].style.display = 'none'
            document.getElementsByClassName('HST')[0].style.display = 'none'
            document.getElementsByClassName('PSK')[0].style.display = 'none'
            break
        case 'profile=Smoovio':
            document.getElementsByClassName('Smoovio-old')[0].style.margin = '20px 0'
            document.getElementById('request-form-doors').action = document.getElementById('request-form-doors').action + '&profile=Smoovio'
            document.getElementsByClassName('SF')[0].style.display = 'none'
            document.getElementsByClassName('FS')[0].style.display = 'none'
            document.getElementsByClassName('HST')[0].style.display = 'none'
            document.getElementsByClassName('PSK')[0].style.display = 'none'
            break
        default:
    }

    function listener(event) {
        var cur_form = event.data
        var arr = window.location.pathname
        var domain_name = window.location.hostname
        if ((cur_form['url'] != null) && cur_form['url'].indexOf('doors.proginta.lt') != -1) {
            var currentLocation = String(window.location)
            var loc = ''
            var lang = ''
            if (currentLocation.indexOf('entrance-doors') != -1) {
                loc = 'thank-you-page-en'
                lang = 'en'
            }
            if (currentLocation.indexOf('indgangsdore') != -1) {
                loc = 'thank-you-page-da'
                lang = 'da'
            }
            if (currentLocation.indexOf('sissepaasuuksed-valisuksed') != -1) {
                loc = 'thank-you-page-et'
                lang = 'et'
            }
            if (currentLocation.indexOf('sisaankayntiovet') != -1) {
                loc = 'thank-you-page-fi'
                lang = 'fi'
            }
            if (currentLocation.indexOf('portes-dentree') != -1) {
                loc = 'thank-you-page-fr'
                lang = 'fr'
            }
            if (currentLocation.indexOf('eingangsturen') != -1) {
                loc = 'thank-you-page-de'
                lang = 'de'
            }
            if (currentLocation.indexOf('porte-dingresso') != -1) {
                loc = 'thank-you-page-it'
                lang = 'it'
            }
            if (currentLocation.indexOf('inngangsdorer') != -1) {
                loc = 'thank-you-page-nb'
                lang = 'nb'
            }
            if (currentLocation.indexOf('vhodnye-dveri') != -1) {
                loc = 'thank-you-page-ru'
                lang = 'ru'
            }
            if (currentLocation.indexOf('puertas-de-entrada') != -1) {
                loc = 'thank-you-page-es'
                lang = 'es'
            }
            if (currentLocation.indexOf('ingangsdorrar') != -1) {
                loc = 'thank-you-page-sv'
                lang = 'sv'
            }

            loc = '//' + domain_name + '/' + lang + '/' + loc + '?from=' + arr + '&type=' + encodeURIComponent(cur_form['type']) + '&url=' + encodeURIComponent(cur_form['url']) + '&name=' + encodeURIComponent(cur_form['name']) + '&tel=' + encodeURIComponent(cur_form['tel']) + '&email=' + encodeURIComponent(cur_form['email']) + '&info=' + encodeURIComponent(cur_form['info']) + '&branch=' + encodeURIComponent(cur_form['branch']) + ''

            window.location.href = loc
        }
    }

    window.addEventListener('message', listener)
    document.getElementById('webform-client-form-1716').addEventListener('submit', function (evt) {
        window.onbeforeunload = null
        document.getElementById('loader').style.display = 'block'
    })
})

document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('PDF')) {
        mobileAndTabletcheck()
    }
})

document.addEventListener('DOMContentLoaded', function (event) {
    new SimpleBar(document.getElementById('sgcboxLoadedContent'))
    window.onload = function () {
        function addLabel() {
            /* Creating label */
            var fileLabel = document.createElement('label')
            fileLabel.setAttribute('for', 'edit-submitted-add-file-upload')
            fileLabel.classList.add('custom-file-upload')
            /* Adding label inner depending on language */
            if (siteLang == 'da') {
                fileLabel.innerHTML += 'Tilfأ¸j fil'
            } else if (siteLang == 'en') {
                fileLabel.innerHTML += 'Add file'
            } else if (siteLang == 'et') {
                fileLabel.innerHTML += 'Lisage fail'
            } else if (siteLang == 'fi') {
                fileLabel.innerHTML += 'Lisأ¤أ¤ tiedosto'
            } else if (siteLang == 'fr') {
                fileLabel.innerHTML += 'Ajouter un fichier'
            } else if (siteLang == 'de') {
                fileLabel.innerHTML += 'Datei hinzufأ¼gen'
            } else if (siteLang == 'it') {
                fileLabel.innerHTML += 'Aggiungi file'
            } else if (siteLang == 'nb') {
                fileLabel.innerHTML += 'Legg til fil'
            } else if (siteLang == 'ru') {
                fileLabel.innerHTML += 'ذ”ذ¾ذ±ذ°ذ²رŒر‚ذµ ر„ذ°ذ¹ذ»'
            } else if (siteLang == 'es') {
                fileLabel.innerHTML += 'Agregar archivo'
            } else if (siteLang == 'sv') {
                fileLabel.innerHTML += 'Lأ¤gg till fil'
            } else {
                fileLabel.innerHTML += 'Add file'
            }
            /* Appending label before input[type="file"] */
            var fileElement = document.querySelector('.form-managed-file')
            fileElement.insertBefore(fileLabel, fileElement.children[0])
        }
        addLabel()
    };
    (function ($) {
        $('.img-fancy').fancybox({
            helpers: {
                title: {
                    type: 'inside'
                }
            }
        })
        $('.fancy-no-arrows').fancybox({
            arrows: false
        })
        $('.fancy-no-arrows').fancybox({
            arrows: false
        })
    })(jQuery)

    try {
        document.getElementById('edit-submitted-add-file-upload').name = 'files[add_file2][]'
        document.getElementById('edit-submitted-add-file-upload-button').remove()
    } catch (err) {

    }
    console.log('test')
})

/*
function submitAddfile () {
  return new Promise(function (resolve, reject) {
    try {
      document.getElementsByClassName('loadingGif')[0].style.display = 'block'
    } catch (err) {}
    document.getElementById('loader').style.display = 'block'
    document.getElementById('webform-client-form-1716').submit()
  })
} */

var akennumber = 1

function ClosePopup() {
    document.getElementById('sgcboxOverlay').style.display = 'none'
    document.getElementById('sgcolorbox').style.display = 'none'
}
// document.getElementById("edit-submitted-add-file-upload").name ="files[add_file2][]"
function Printfiles() {
    var Files = document.getElementsByName('files[add_file2][]')[0]

    var filesLength = Files.files.length
    if (document.getElementById('fileNames').innerHTML === '');
    document.getElementById('fileNames').innerHTML = ''
    for (var i = 0; i < filesLength; i++) {
        document.getElementById('fileNames').innerHTML += i + 1 + '. ' + Files.files[i].name + '</br>'
    }
    document.getElementById('divID')
}
var innerDiv = document.createElement('div')
innerDiv.id = 'fileNames'

function OpenPopup() {
    var curentLang = (String(String(window.location).match(/[/][a-z][a-z]?[a-z]?[a-z][/]/g))).replace(/[/]/g, '')
    if (curentLang != 'et' && curentLang != 'ru') {
        document.getElementsByClassName('webform-component--filial')[0].style.display = 'none'
    }
    try {
        var elemfileslist = document.getElementsByClassName('MultiFile-list')[0]
        elemfileslist.remove()
    } catch (err) {

    }
    document.getElementsByName('files[add_file2][]')[0].addEventListener('change', Printfiles)
    document.getElementsByClassName('form-item webform-component webform-component-file webform-component--add-file')[0].appendChild(innerDiv)
    document.getElementsByName('files[add_file2][]')[0].multiple = 'true'
    var action = '/' + curentLang + '/thank-you-page-' + curentLang + '/' + '?type=addfile'
    document.getElementsByClassName('webform-client-form')[0].action = action
    document.documentElement.scrollTop = 0
    document.getElementById('sgcboxOverlay').style.display = 'block'
    document.getElementById('sgcolorbox').style.display = 'block'
    document.getElementById('sgcolorbox').scrollIntoView()

    var curentLang = (String(String(window.location).match(/[/][a-z][a-z]?[a-z]?[a-z][/]/g))).replace(/[/]/g, '')
}

function MovePref() {
    window.location.href = document.referrer
}

function RemoveAken(elem) {
    window.onbeforeunload = null
    var ids = elem.getAttribute('id')

    if (ids == akennumber) {
        ids = ''
    }

    document.getElementById('second_step' + ids).parentNode.removeChild(document.getElementById('second_step' + ids))

    if (ids == '') {
        ids = akennumber
    }

    RemoveDiv('item-win-val' + ids)

    if (document.getElementById('summary-window-values-new').childNodes.length == 2) {
        window.location.href = window.location.href
    }
}

function SelectColorInside(elem) {
    var colorDiv = document.getElementById('second_step').getElementsByClassName('color-inside-image')[0]
    colorDiv.style.backgroundImage = "url('/sites/default/files/" + elem.value + ".jpg')"

    var insideLink = document.getElementById('second_step').querySelector('.color-inside-image a')
    var insideImg = document.getElementById('second_step').querySelector('.color-inside-image a img')
    var insideHoverImg = document.getElementById('second_step').querySelector('.color-inside-image a .color-hover')

    insideLink.setAttribute('href', '/sites/default/files/' + elem.value + '.jpg')
    insideImg.setAttribute('src', '/sites/default/files/' + elem.value + '.jpg')
    insideHoverImg.setAttribute('src', '/sites/default/files/' + elem.value + '.jpg')

    var insideDiv = document.getElementById('second_step').querySelector('#color-inside')
    var insideColor = insideDiv.options[insideDiv.selectedIndex].text

    insideLink.setAttribute('title', insideColor)
    insideImg.setAttribute('alt', insideColor)
}

function SelectColorOutside(elem) {
    var colorDiv = document.getElementById('second_step').getElementsByClassName('color-outside-image')[0]
    colorDiv.style.backgroundImage = "url('/sites/default/files/" + elem.value + ".jpg')"

    var outsideLink = document.getElementById('second_step').querySelector('.color-outside-image a')
    var outsideImg = document.getElementById('second_step').querySelector('.color-outside-image a img')
    var outsideHoverImg = document.getElementById('second_step').querySelector('.color-outside-image a .color-hover')

    outsideLink.setAttribute('href', '/sites/default/files/' + elem.value + '.jpg')
    outsideImg.setAttribute('src', '/sites/default/files/' + elem.value + '.jpg')
    outsideHoverImg.setAttribute('src', '/sites/default/files/' + elem.value + '.jpg')

    var outsideDiv = document.getElementById('second_step').querySelector('#color-outside')
    var outsideColor = outsideDiv.options[outsideDiv.selectedIndex].text
    /* Add attributes alt and title and fill it with selected text */

    outsideLink.setAttribute('title', outsideColor)
    outsideImg.setAttribute('alt', outsideColor)
}

function SelectProfiil(elem) {
    ChangeProf(elem.value)
}

function mobileAndTabletcheck() {
    var check = false;
    (function (a) { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true })(navigator.userAgent || navigator.vendor || window.opera)
    if (check == true) {
        document.querySelector('#PDF').style.display = 'none'
    }
};

function printDocument() {
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1 || (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) == true) {
        window.open(document.getElementById('pdfDocument').src)
    } else {
        var doc = document.getElementById('pdfDocument')
        doc.contentWindow.print()
    }
}

var glazingUnitsList = {
    Gealan_S8000: 'Uf = 1.3 W/m2K',
    Gealan_S9000: 'Uf = 0.92 W/m2K',
    Gealan_Lumaxx: 'Uf = 1.2 W/m2K',
    Gealan_Kubus: 'Uf = 0.88 W/m2K',
    Gealan_Linear: 'Uf = 0.88 W/m2K',
    Nordline: 'Uf = 1.5 W/m2K',
    HST_S8000: 'Uf = 1.3 W/m2K',
    HST_S9000: 'Uf = 0.92 W/m2K',
    HST_S9000_Design: 'Uf = 0.92 W/m2K',
    Sliding_windows_SF: 'Uf = 2.2 W/m2K'
}

// ذ’ر‹ذ±ذ¾ر€ ذ؟ر€ذ¾ر„ذ¸ذ»رڈ
function ChangeProf(value) {
    var domain_name = window.location.hostname
    var profilImg = document.getElementById('second_step').querySelector('#profil-img')
    profilImg.src = '//' + domain_name + '/sites/default/files/' + value + '.jpg'
    var profilImg = document.getElementById('mfp-img-profiil')
    profilImg.src = '//' + domain_name + '/sites/default/files/' + value + '.jpg'
    var profTitle = document.getElementById('mfp-title-profil')
    profTitle.innerHTML = value + ' '
    if (glazingUnitsList[value]) {
        profTitle.innerHTML += glazingUnitsList[value]
    }
    if (value === 'Gealan_Kubus') {
        if (value === 'Gealan_Kubus') {
            for (var i = 0; i <= document.getElementById('color-outside').getElementsByTagName('optgroup').length - 1; i++) {
                if (document.getElementById('color-outside').getElementsByTagName('optgroup')[i].label != 'AcrylColor') {
                    document.getElementById('color-outside').getElementsByTagName('optgroup')[i].disabled = true
                    document.getElementById('color-outside').getElementsByTagName('optgroup')[i].style.display = "none"
                }
            }
        }
    } else {
        for (var i = 0; i <= document.getElementById('color-outside').getElementsByTagName('optgroup').length - 1; i++) {
            if (document.getElementById('color-outside').getElementsByTagName('optgroup')[i].label != 'AcrylColor') {
                document.getElementById('color-outside').getElementsByTagName('optgroup')[i].disabled = false
                document.getElementById('color-outside').getElementsByTagName('optgroup')[i].style.display = "block"
            };
        }
    }
    ChangeGlass(value)
}

// ذ’ر‹ذ±ذ¾ر€ رپر‚ذµذ؛ذ»ذ¾ذ؟ذ°ذ؛ذµر‚ذ°
function ChangeGlass(value) {
    if ((value.indexOf('Gealan') != -1) || (value.indexOf('Sliding_windows_SF') != -1) || (value.indexOf('HST') != -1) || (value.indexOf('Smoovio') != -1)) {
        var x = document.getElementById('second_step').querySelector('#klaaspaket')
        // var removeFromGeaS800 = ['RAL7040-fenstergrau', 'RAL8014-sepiabraun', 'RAL7039-quarzgrau', 'RAL9007-silber', 'RAL7015-schiefergrau', 'RAL9016-reinweiأں']
        var removeFromGeaS800 = ['RAL-7022-AcrylColor', 'RAL-7039-AcrylColor', 'RAL-7040-AcrylColor', 'RAL-8014-AcrylColor', 'RAL-7015-AcrylColor', 'SILBER-AcrylColor']

        // <option value="DB703-AcrylColor">DB703 AcrylColor</option>
        // <option value="RAL-9005-AcrylColor">RAL 9005 AcrylColor</option>
        // <option value="RAL-7016-AcrylColor">RAL 7016 AcrylColor</option>

        // <option value="RAL-7022-AcrylColor">RAL 7022 AcrylColor</option>
        // <option value="RAL-7039-AcrylColor">RAL 7039 AcrylColor</option>
        // <option value="RAL-7040-AcrylColor">RAL 7040 AcrylColor</option>
        // <option value="RAL-8014-AcrylColor">RAL 8014 AcrylColor</option>
        // <option value="RAL-7015-AcrylColor">RAL 7015 AcrylColor</option>
        // <option value="SILBER-AcrylColor">SILBER AcrylColor</option>

        var colorDis
        $alreadyselected = false
        for (i = 0; i < x.length; i++) {
            $isAdd = false

            if ((value == 'Sliding_windows_SF') || (value == 'Gealan_S8000') || (value == 'Gealan_S9000') || (value == 'Gealan_Lumaxx')) {
                if (i == 0) {
                    $isAdd = true
                }
            }

            if (value == 'Gealan_S8000' || value == 'HST_S8000' || value == 'Smoovio' || value == 'Gealan_Linear') {
                for (var s = 0; s < removeFromGeaS800.length; s++) {
                    colorDis = document.getElementById('second_step').querySelector('#color-outside option[value=' + removeFromGeaS800[s] + ']')
                    colorDis.style.display = 'none'
                    colorDis.disabled = true
                    if (document.getElementById('second_step').querySelector('#color-inside option[value=' + removeFromGeaS800[s] + ']')) {
                        colorDis = document.getElementById('second_step').querySelector('#color-inside option[value=' + removeFromGeaS800[s] + ']')
                        colorDis.style.display = 'none'
                        colorDis.disabled = true
                    }
                }
            } else {
                for (var s = 0; s < removeFromGeaS800.length; s++) {
                    colorDis = document.getElementById('second_step').querySelector('#color-outside option[value=' + removeFromGeaS800[s] + ']')
                    colorDis.style.display = 'block'
                    colorDis.disabled = false
                    if (document.getElementById('second_step').querySelector('#color-inside option[value=' + removeFromGeaS800[s] + ']')) {
                        colorDis = document.getElementById('second_step').querySelector('#color-inside option[value=' + removeFromGeaS800[s] + ']')
                        colorDis.style.display = 'block'
                        colorDis.disabled = false
                    }
                }
            }

            if ((value == 'Gealan_S8000') || (value == 'HST_S8000') || (value == 'Smoovio')) {
                if (i == 0) {
                    $isAdd = true
                }
                if (i == 1) {
                    $isAdd = true
                }
                if (i == 2) {
                    $isAdd = true
                }
            }

            if (value == 'Gealan_Kubus') {
                if (i == 3) {
                    $isAdd = true
                }
            }

            if ((value == 'Gealan_S9000') || (value == 'HST_S9000') || (value == 'HST_S9000_Design') || (value == 'Gealan_Lumaxx')) {
                if (i == 4) {
                    $isAdd = true
                }

                if (i == 1) {
                    $isAdd = true
                }
            }

            // ذ،ذ؛ر€ر‹ذ²ذ°ذµذ¼ رپر‚ذµذ؛ذ»ذ¾ذ؟ذ°ذ؛ذµر‚ر‹ ذ؟ذ¾ ذ½ذ¾ذ²ذ¾ذ¼رƒ ذ¢ذ—
            if (value == 'Gealan_S8000' || value == 'HST_S8000' || value == 'Smoovio') {
                if (i == 3 || i == 0) {
                    $isAdd = true
                }
                else {
                    $isAdd = false
                }
            }

            if (value == 'Gealan_S9000' || value == 'Gealan_Lumaxx') {
                if (i == 0 || i == 3 || i == 4) {
                    $isAdd = true
                }
                else {
                    $isAdd = false
                }
            }
            if (value == 'Gealan_Linear') {
                if (i == 3) {
                    $isAdd = true
                    var vfimg = 'TripleGlazing';
                }
            }

            // رپذ؛ر€ر‹ر‚ذ¸ذµ رپر‚ذµذ؛ذ»ذ¾ذ؟ذ°ذ؛ذµر‚ذ¾ذ²
            if ($isAdd == true) {
                if ($alreadyselected == false) {
                    x.options[i].selected = true
                    $alreadyselected = true
                }
                x.options[i].style.display = 'block'
                x.options[i].disabled = false
            } else {
                x.options[i].disabled = true
                x.options[i].selected = false
                x.options[i].style.display = 'none'
            }
        }

    }

    if (vfimg) {
        changeGlazing(vfimg);
    }
    else {
        changeGlazing('DoubleGlazing');
    }
}

function ShowProfil() {
    document.getElementById('mfp-profil').style.display = 'block'
}

function CloseProfil() {
    document.getElementById('mfp-profil').style.display = 'none'
}

function SelectAva(elem) {
    var aken = document.getElementById('second_step').querySelector('#type-result').classList.item(1)
    if (elem.id == 'akna-avatavus' || elem.id == 'ukse-avatus') {
        DrawOpening(aken, 'full-window-opening', elem.options[elem.selectedIndex].getAttribute('data-op'))
        // var avatus = document.getElementById('second_step').querySelector('#avatus');
        //  avatus.removeAttribute("class");
        // avatus.classList.add("avatus");
        // avatus.classList.add(elem.value.toLowerCase()+"-akna-avatavus-u");
    } else if (elem.id == '1-jaotuse-avatus') {
        DrawOpening(aken, '1-frame-opening', elem.options[elem.selectedIndex].getAttribute('data-op'))
        var avatus = document.getElementById('second_step').querySelector('#avatus')
        avatus.removeAttribute('class')
        avatus.classList.add('avatus')
        // avatus.classList.add(elem.value.toLowerCase()+"-1-jaotuse-avatus-k");
    } else if (elem.id == '2-jaotuse-avatus') {
        DrawOpening(aken, '2-frame-opening', elem.options[elem.selectedIndex].getAttribute('data-op'))
        var avatus = document.getElementById('second_step').querySelector('#avatus2')
        avatus.removeAttribute('class')
        avatus.classList.add('avatus2')
        // avatus.classList.add(elem.value.toLowerCase()+"-2-jaotuse-avatus-k");
    } else if (elem.id == 'ule-jaotuse-avatus') {
        DrawOpening(aken, 'top-frame-opening', elem.options[elem.selectedIndex].getAttribute('data-op'))
        var avatus = document.getElementById('second_step').querySelector('#avatus4')
        avatus.removeAttribute('class')
        avatus.classList.add('avatus4')
        // avatus.classList.add(elem.value.toLowerCase()+"-ule-jaotuse-avatus-uaa");
    } else if (elem.id == '3-jaotuse-avatus') {
        DrawOpening(aken, '3-frame-opening', elem.options[elem.selectedIndex].getAttribute('data-op'))
        var avatus = document.getElementById('second_step').querySelector('#avatus3')
        avatus.removeAttribute('class')
        avatus.classList.add('avatus3')
        // avatus.classList.add(elem.value.toLowerCase()+"-tuulutus-3-jaotuse-avatus-klm");
    } else if (elem.id == '4-jaotuse-avatus') {
        DrawOpening(aken, '4-frame-opening', elem.options[elem.selectedIndex].getAttribute('data-op'))
        var avatus = document.getElementById('second_step').querySelector('#avatus4')
        avatus.removeAttribute('class')
        avatus.classList.add('avatus4')
        //  avatus.classList.add(elem.value.toLowerCase()+"-4-jaotuse-avatus-n");
    }
    if (elem.id == 'ukse-avatus') {
        var avatus = document.getElementById('second_step').querySelector('#avatus')
        avatus.removeAttribute('class')
        avatus.classList.add('avatus')
        //  avatus.classList.add(elem.value.toLowerCase()+"-ukse-avatus-rtp");
        var list = document.getElementById('second_step').querySelector('#type-result').classList.item(1)
        if (list.indexOf('FS') == 0 || list.indexOf('PSK') == 0 || list.indexOf('HST') == 0 || list.indexOf('SF') == 0 || list.indexOf('Smoovio') == 0) {
            if (document.getElementById('second_step').querySelector('#' + aken + '-transform').getAttribute('transform').indexOf('scale') == 0) {
                document.getElementById('second_step').querySelector('#' + aken + '-transform').setAttribute('transform', '')
            } else {
                document.getElementById('second_step').querySelector('#' + aken + '-transform').setAttribute('transform', 'scale(-1,1) translate(-253,0)')
            }
        }
    }
}

function ClearValues() {
    var aken = document.getElementById('second_step').querySelector('#type-result').classList.item(1)

    fullw = document.getElementById('second_step').querySelector('#window-full-width')
    fullh = document.getElementById('second_step').querySelector('#input-full-height')
    frame1 = document.getElementById('second_step').querySelector('#window-bottom-height-1')
    frame2 = document.getElementById('second_step').querySelector('#window-bottom-height-2')
    frame3 = document.getElementById('second_step').querySelector('#window-bottom-height-3')
    frame4 = document.getElementById('second_step').querySelector('#window-bottom-height-4')
    topframe = document.getElementById('second_step').querySelector('#window-side-height')
    botframe = document.getElementById('second_step').querySelector('#window-bot-height')

    switch (aken) {
        case 'kaheosaline':
            frame1.value = Math.ceil(fullw.value / 2)
            frame2.value = fullw.value - frame1.value
            ChangeSize(fullw.value, '-aken-twopart', 'w')
            break
        case 'kolmeosaline':
            frame1.value = Math.ceil(fullw.value / 3)
            frame2.value = Math.ceil(fullw.value / 3)
            frame3.value = fullw.value - frame1.value - frame2.value
            ChangeSize(fullw.value, '-aken-threepart', 'w')
            break
        case 'neljaosaline':
            frame1.value = Math.ceil(fullw.value / 4)
            frame2.value = Math.ceil(fullw.value / 4)
            frame3.value = Math.ceil(fullw.value / 4)
            frame4.value = fullw.value - frame1.value - frame2.value - frame3.value
            ChangeSize(fullw.value, '-aken-fourpart', 'w')
            break
        case 'ule-allall':
            // topframe.value = fullh.value / 2;
            frame1.value = Math.ceil(fullw.value / 2)
            frame2.value = fullw.value - frame1.value
            ChangeSize(fullw.value, '-aken-1up2down', 'w')
            break
    }
}

function ShowHideFrames() {
    var aken = document.getElementById('second_step').querySelector('#type-result').classList.item(1)
    var displaying = document.getElementById('second_step').querySelector('#same-frames').checked == true ? 'none' : 'block'

    fullw = document.getElementById('second_step').querySelector('#window-full-width')
    fullh = document.getElementById('second_step').querySelector('#input-full-height')
    frame1 = document.getElementById('second_step').querySelector('#window-bottom-height-1')
    frame2 = document.getElementById('second_step').querySelector('#window-bottom-height-2')
    frame3 = document.getElementById('second_step').querySelector('#window-bottom-height-3')
    frame4 = document.getElementById('second_step').querySelector('#window-bottom-height-4')
    topframe = document.getElementById('second_step').querySelector('#window-side-height')
    botframe = document.getElementById('second_step').querySelector('#window-bot-height')

    if (displaying == 'none') {
        switch (aken) {
            case 'kaheosaline':
                frame1.value = Math.ceil(fullw.value / 2)
                frame2.value = fullw.value - frame1.value
                ChangeSize(fullw.value, '-aken-twopart', 'w')
                break
            case 'kolmeosaline':
                frame1.value = Math.ceil(fullw.value / 3)
                frame2.value = Math.ceil(fullw.value / 3)
                frame3.value = fullw.value - frame1.value - frame2.value
                ChangeSize(fullw.value, '-aken-threepart', 'w')
                break
            case 'neljaosaline':
                frame1.value = Math.ceil(fullw.value / 4)
                frame2.value = Math.ceil(fullw.value / 4)
                frame3.value = Math.ceil(fullw.value / 4)
                frame4.value = fullw.value - frame1.value - frame2.value - frame3.value
                ChangeSize(fullw.value, '-aken-fourpart', 'w')
                break
            case 'ule-allall':
                // topframe.value = fullh.value / 2;
                frame1.value = Math.ceil(fullw.value / 2)
                frame2.value = fullw.value - frame1.value
                ChangeSize(fullw.value, '-aken-1up2down', 'w')
                break
            //   case "rodu-poolklaas":
            //     botframe.value = Math.ceil(fullh.value / 2);
            //     ChangeSize(fullw.value, '-aken-balconydoorhalfglass', 'w');
            //     break;
        }
    }

    switch (aken) {
        case 'ule-allall':
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-1')[0].style.display = displaying
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-2')[0].style.display = displaying
            document.getElementById('second_step').getElementsByClassName('input-side-height')[0].style.display = displaying
            break
        case 'kaheosaline':
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-1')[0].style.display = displaying
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-2')[0].style.display = displaying
            break
        case 'kolmeosaline':
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-1')[0].style.display = displaying
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-2')[0].style.display = displaying
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-3')[0].style.display = displaying
            break
        case 'neljaosaline':
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-1')[0].style.display = displaying
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-2')[0].style.display = displaying
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-3')[0].style.display = displaying
            document.getElementById('second_step').getElementsByClassName('input-bottom-height-4')[0].style.display = displaying
            break
        case 'rodu-poolklaas':
            document.getElementById('second_step').getElementsByClassName('input-alumine-height')[0].style.display = displaying
            break
    }
}

function CallToResetValues(element) {
    if (element.querySelector('[id="1-jaotuse-avatus"]') != null) {
        element.querySelector('[id="1-jaotuse-avatus"]').selectedIndex = 0
    }

    if (element.querySelector('[id="2-jaotuse-avatus"]') != null) {
        element.querySelector('[id="2-jaotuse-avatus"]').selectedIndex = 0
    }

    if (element.querySelector('[id="3-jaotuse-avatus"]') != null) {
        element.querySelector('[id="3-jaotuse-avatus"]').selectedIndex = 0
    }

    if (element.querySelector('[id="4-jaotuse-avatus"]') != null) {
        element.querySelector('[id="4-jaotuse-avatus"]').selectedIndex = 0
    }

    if (element.querySelector('[id="ule-jaotuse-avatus"]') != null) {
        element.querySelector('[id="ule-jaotuse-avatus"]').selectedIndex = 0
    }

    if (element.querySelector('[id="akna-avatavus"]') != null) {
        element.querySelector('[id="akna-avatavus"]').selectedIndex = 0
    }
}

function SaveAken() {
    // ذںذµر€ذµذ´ ذ²ر‹ذ´ذµذ»ذµذ½ذ¸ذµذ¼ ذ½ذ¾ذ²ذ¾ذ³ذ¾ ذ¾ذ؛ذ½ذ° رپذ½ذ¸ذ¼ذ°ذµذ¼ رپذµذ»ذµذ؛ر‚ رپذ¾ رپر‚ذ°ر€ذ¾ذ³ذ¾
    var x = document.getElementsByClassName('selected')
    var i
    for (i = 0; i < x.length; i++) {
        x[i].classList.remove('selected')
    }

    actual_step = false
    if (document.getElementById('second_step') != null) {
        var list = document.getElementById('second_step').querySelector('#type-result').classList.item(1)
        if (document.getElementById('second_step').querySelector('#order_image') != null) {
            document.getElementById('second_step').querySelector('#order_image').value = document.getElementById('second_step').querySelector('#second-svg-' + list).innerHTML
        }

        actual_step = true
    }

    var mass = document.querySelectorAll('div[id^="second_step"]')
    var step = document.querySelectorAll('div[id^="second_step"]')[mass.length - 1]
    var element = document.createElement('div')
    element.id = 'second_step'
    element.innerHTML = step.innerHTML
    CallToResetValues(element)

    if (step.querySelector('.second-step-result #svg_start') != null) {
        step.querySelector('.second-step-result #svg_start').innerHTML = ''
    }

    if (document.getElementById('request-form-doors') != null) {
        document.getElementById('request-form-doors').appendChild(element)
    }
    if (document.getElementById('request-form') != null) {
        document.getElementById('request-form').appendChild(element)
    }

    if (document.querySelector('#get_svg') != null) {
        element.querySelector('.second-step-result #svg_start').innerHTML = document.querySelector('#get_svg').value
    }

    var step = document.getElementById('second_step')
    if (actual_step == true) {
        step.id = 'second_step' + (akennumber)
    } else {
        step.id = 'second_step'
    }

    step.style.display = 'none'

    var inputs = step.getElementsByTagName('input')
    var i
    for (i = 0; i < inputs.length; i++) {
        inputs[i].name = inputs[i].name.replace(/\d/g, '')
        inputs[i].name = inputs[i].name + (akennumber)
    }

    var selects = step.getElementsByTagName('select')
    for (i = 0; i < selects.length; i++) {
        selects[i].name = selects[i].name.replace(/\d/g, '')
        selects[i].name = selects[i].name + (akennumber)
    }

    var area = step.getElementsByTagName('textarea')
    for (i = 0; i < area.length; i++) {
        area[i].name = area[i].name.replace(/\d/g, '')
        area[i].name = area[i].name + (akennumber)
    }

    if (document.getElementById('second_step').querySelector('#aknalaud') != null) {
        document.getElementById('second_step').querySelector('#aknalaud').checked = false
        var x = document.getElementById('second_step').getElementsByClassName('aknalaud-show-if')
        for (i = 0; i < x.length; i++) {
            x[i].style.display = 'none'
        }
    }

    if (document.getElementById('second_step').querySelector('#Veeplekk') != null) {
        document.getElementById('second_step').querySelector('#Veeplekk').checked = false
        var x = document.getElementById('second_step').getElementsByClassName('veeplekk-show-if')
        for (i = 0; i < x.length; i++) {
            x[i].style.display = 'none'
        }
    }

    var colorDiv = document.getElementById('second_step').getElementsByClassName('color-inside-image')[0]
    colorDiv.style.backgroundImage = "url('/sites/default/files/RAL9016-weiأں.jpg')"

    var colorDiv = document.getElementById('second_step').getElementsByClassName('color-outside-image')[0]
    colorDiv.style.backgroundImage = "url('/sites/default/files/RAL9016-weiأں.jpg')"

    akennumber = akennumber + 1
}

function RemoveDiv(name) {
    var x = document.getElementsByClassName(name)
    var i
    for (i = 0; i < x.length; i++) {
        x[i].parentNode.removeChild(x[i])
    }
}

function AddDiv(name, text, where) {
    var element = document.createElement('div')
    element.classList.add(name)
    element.appendChild(document.createTextNode(text))
    document.getElementById(where).appendChild(element)
}

function setErrorSpan(elemID) {
    if (document.getElementById(elemID + 'error') == null) {
        var my_elem
        var span
        my_elem = document.getElementById(elemID)
        span = document.createElement('span')
        span.innerHTML = '*'
        span.id = elemID + 'error'
        span.setAttribute('style', 'color:red; padding: 1px; display:none;')
        my_elem.parentNode.insertBefore(span, my_elem)
    } else {
        document.getElementById(elemID + 'error').style.display = 'none'
    }
}

function CheckLastStep() {
    var isReturn = 0
    var reg = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/

    if (window.location.href.indexOf('windows-price-request') != -1) {
        for (var i = 0; i < document.getElementsByClassName('item-type').length; i++) {
            if (document.getElementsByClassName('item-type')[i].getElementsByTagName('span')[0].className.indexOf('FS') != -1 ||
                document.getElementsByClassName('item-type')[i].getElementsByTagName('span')[0].className.indexOf('PSK') != -1 ||
                document.getElementsByClassName('item-type')[i].getElementsByTagName('span')[0].className.indexOf('HST') != -1 ||
                document.getElementsByClassName('item-type')[i].getElementsByTagName('span')[0].className.indexOf('Smoovio') != -1) {
                if (document.getElementById('request-form').action.indexOf('?') == -1) {
                    document.getElementById('request-form').action = document.getElementById('request-form').action + '?type=sliding-door'
                } else {
                    if (document.getElementById('request-form').action.match(/\&type=sliding-door/) == null &&
                        document.getElementById('request-form').action.match(/\?type=sliding-door/) == null) {
                        document.getElementById('request-form').action = document.getElementById('request-form').action + '&type=sliding-door'
                    }
                }
            } else {
                if (document.getElementById('request-form').action.indexOf('?') == -1) {
                    document.getElementById('request-form').action = document.getElementById('request-form').action + '?type=window'
                } else {
                    if (document.getElementById('request-form').action.match(/\&type=window/) == null &&
                        document.getElementById('request-form').action.match(/\?type=window/) == null) {
                        document.getElementById('request-form').action = document.getElementById('request-form').action + '&type=window'
                    }
                }
            }
        }
    }
    setErrorSpan('perekonnanimi')
    setErrorSpan('nimi')
    setErrorSpan('e-mail')
    setErrorSpan('filiaali-teenus')
    document.getElementById('perekonnanimi').classList.remove('error')
    document.getElementById('nimi').classList.remove('error')
    document.getElementById('e-mail').classList.remove('error')
    document.getElementById('filiaali-teenus').classList.remove('error')
    if (document.getElementById('perekonnanimi').value == '') {
        isReturn = 1

        document.getElementById('perekonnanimierror').style.display = 'unset'
        document.getElementById('perekonnanimi').classList.add('error')
    }
    if (document.getElementById('nimi').value == '') {
        isReturn = 1
        document.getElementById('nimierror').style.display = 'unset'
        document.getElementById('nimi').classList.add('error')
    }
    if (document.getElementById('e-mail').value == '' || document.getElementById('e-mail').value.match(reg) == null) {
        isReturn = 1
        document.getElementById('e-mailerror').style.display = 'unset'
        document.getElementById('e-mail').classList.add('error')
    }
    if (document.getElementById('filiaali-teenus').value == '') {
        isReturn = 1
        document.getElementById('filiaali-teenuserror').style.display = 'unset'
        document.getElementById('filiaali-teenus').classList.add('error')
    }

    if (isReturn == 1) {
        return
    }

    if (document.getElementById('request-form') != null) {
        document.getElementsByClassName('loadingGif')[0].style.display = 'block'
        window.onbeforeunload = null

        document.getElementById('request-form').submit()
    }

    if (document.getElementById('request-form-doors') != null) {
        document.getElementsByClassName('loadingGif')[0].style.display = 'block'
        window.onbeforeunload = null

        document.getElementById('request-form-doors').submit()
    }
}

function CheckJarelmaks() {
    var x = document.getElementById('request-form-jarelmaks').getElementsByTagName('input')
    var isReturn = false
    for (i = 0; i < x.length; i++) {
        //   newFunction()
        if (x[i].value == '' && x[i].style.display != 'none' && x[i].type == 'text') {
            if (x[i].id != 'Elamislubakehtibkuni' && x[i].id != 'Firma' && x[i].id != 'Summajأ¤أ¤k' && x[i].id != 'Datajأ¤أ¤k' && x[i].id != 'Firma1' && x[i].id != 'Summajأ¤أ¤k1' && x[i].id != 'Datajأ¤أ¤k1') {
                x[i].style.backgroundColor = '#ffb5b5'
                isReturn = true
            }
            else {
                x[i].style.backgroundColor = 'white'
            }
        }

    }

    // ذ‍ذ³ر€ذ°ذ½ذ¸ر‡ذµذ½ذ¸ذµ ذ؟ذ¾ ذ»ذ¸ر‡ذ½ذ¾ذ¼رƒ ذ؛ذ¾ذ´رƒ
    var lcode = document.getElementById('Isikukood').value;
    if (lcode.length != 11) {
        isReturn = true;
        document.getElementById('Isikukood').style.backgroundColor = '#ffb5b5';
    }

    if (isReturn == true) {
        return
    }

    document.getElementById('request-form-jarelmaks').submit()

}

function HideDeliveryInstallation() {
    document.getElementById('delivery-enter').style.display = 'none'
    if (document.getElementById('installation-on') != null) {
        document.getElementById('installation-on').style.display = 'none'
    }
}

function ShowHideDelivery() {
    document.getElementById('delivery-enter').style.display = 'block'
    if (document.getElementById('installation-on') != null) {
        document.getElementById('installation-on').style.display = 'none'
    }
}

function ShowHideInstallation() {
    ShowHideDelivery()
    document.getElementById('installation-on').style.display = 'block'
}

function ShowHideEriSoovid() {
    if (document.getElementById('second_step').querySelector('#erisoovid').style.display == 'none') {
        document.getElementById('second_step').querySelector('#erisoovid').style.display = 'block'
    } else {
        document.getElementById('second_step').querySelector('#erisoovid').style.display = 'none'
    }
}

function ShowHideAknalaud() {
    var x = document.getElementById('second_step').getElementsByClassName('aknalaud-show-if')
    for (i = 0; i < x.length; i++) {
        x[i].style.display = document.getElementById('second_step').querySelector('#aknalaud').checked == false ? 'none' : 'block'
    }
}

function ShowHideVeeplek() {
    var x = document.getElementById('second_step').getElementsByClassName('veeplekk-show-if')
    for (i = 0; i < x.length; i++) {
        x[i].style.display = document.getElementById('second_step').querySelector('#Veeplekk').checked == false ? 'none' : 'block'
    }
}

function StepJump(From, To, back) {
    if (document.getElementById('HST_profile') != null) {
        document.getElementById('HST_profile').style.display = 'none'
    }
    if (document.getElementById('FS_profile') != null) {
        document.getElementById('FS_profile').style.display = 'none'
    }
    if (document.getElementById('PSK_profile') != null) {
        document.getElementById('PSK_profile').style.display = 'none'
    }

    if (From == 'first_step') {
        if (To == 'second_step') {
            var form = document.getElementById('request-form-doors')
            if (form == null) {
                form = document.getElementById('request-form')
            }
            var x = form.getElementsByClassName('selected')

            if (x.length == 0) {
                isReturn = 1
            }
            var obj = document.getElementsByClassName('selected')[0].querySelector('#HST-uksed')
            var obj1 = document.getElementsByClassName('selected')[0].querySelector('#FS-uksed')
            var obj2 = document.getElementsByClassName('selected')[0].querySelector('#PSK-uksed')
            if (obj != null) {
                To = 'HST_profile'
            }
            if (obj1 != null) {
                To = 'FS_profile'
            }
            if (obj2 != null) {
                To = 'PSK_profile'
            }
            if (document.getElementById('second_step').querySelector('#type-result').classList.item(1) === 'Smoovio') {
                for (var i = 0; i <= document.getElementById('color-outside').getElementsByTagName('optgroup').length - 1; i++) {
                    if (document.getElementById('color-outside').getElementsByTagName('optgroup')[i].label === 'AcrylColor') {
                        document.getElementById('color-outside').getElementsByTagName('optgroup')[i].disabled = true
                        document.getElementById('color-outside').getElementsByTagName('optgroup')[i].style.display = "none"
                    };
                }
            } else {
                for (var i = 0; i <= document.getElementById('color-outside').getElementsByTagName('optgroup').length - 1; i++) {
                    if (document.getElementById('color-outside').getElementsByTagName('optgroup')[i].label === 'AcrylColor') {
                        document.getElementById('color-outside').getElementsByTagName('optgroup')[i].disabled = false
                        document.getElementById('color-outside').getElementsByTagName('optgroup')[i].style.display = "block"
                    };
                }
            }
        }
    }
    if (From == 'second_step') {
        if (To == 'third_step' || To == 'first_step') {
            if (back == '') {
                document.getElementById('second_step').querySelector('#Amount').classList.remove('error')
                var x = document.getElementById('second_step').querySelector('#Amount').value
                var akenType = document.getElementById('second_step').querySelector('#aken_type').value
                var check = field_size_display()
                var isReturn = 0
                if (check == 0) {
                    isReturn = 1
                }

                if (x.length == 0) {
                    document.getElementById('second_step').querySelector('#Amount').classList.add('error')
                    isReturn = 1
                }
            }
        }
    }

    if (From == 'second_step') {
        if (To == 'third_step') {
            if (document.getElementById('second_step') != null) {
                var list = document.getElementById('second_step').querySelector('#type-result').classList.item(1)
                if (document.getElementById('second_step').querySelector('#order_image') != null) {
                    document.getElementById('second_step').querySelector('#order_image').value = document.getElementById('second_step').querySelector('#second-svg-' + list).innerHTML
                }
            }
        }
    }

    if (From == 'third_step') {
        if (To == 'fourth_step') {
            RemoveDiv('Lisateenused-add')
            RemoveDiv('Millisele-add')

            document.getElementById('delivery').classList.remove('error')
            document.getElementById('delivery-on-address').classList.remove('error')
            if (document.getElementById('delivery-no').checked == false) {
                if (document.getElementById('delivery-on-address').value == '') {
                    document.getElementById('delivery-on-address').classList.add('error')
                    document.getElementById('delivery').classList.add('error')
                    isReturn = 1
                }
            }
            var services = document.getElementById('additional-services').innerHTML
            var delivery_name = document.querySelector('.third-step-add h2').innerHTML
            if (document.getElementById('delivery-no').checked == true) {
                AddDiv('Lisateenused-add', services + ': ' + document.getElementById('delivery-no').value, 'summary-add-values-new')
            } else if (document.getElementById('delivery-yes').checked == true) {
                AddDiv('Lisateenused-add', services + ': ' + delivery_name, 'summary-add-values-new')
                var val = document.getElementById('delivery-on-address').value
                AddDiv('Millisele-add', delivery_name + ': ' + val, 'summary-add-values-new')
            } else if (document.getElementById('paigaldus-yes').checked == true) {
                var installation_name = document.querySelector('.paigaldus-yes .option').innerHTML
                AddDiv('Lisateenused-add', services + ': ' + installation_name, 'summary-add-values-new')
                var val = document.getElementById('delivery-on-address').value
                AddDiv('Millisele-add', delivery_name + ': ' + val, 'summary-add-values-new')
            }
        }
    }

    if (From == 'second_step') {
        if (To == 'first_step') {
            if (back == 'back') {
                CallToResetValues(document.getElementById('second_step'))
                var list = document.getElementById('second_step').querySelector('#type-result').classList.item(1)
                var formCheck = document.getElementById('request-form')
                if (list.indexOf('FS') == 0) {
                    if (formCheck != null) {
                        To = 'FS_profile'
                        window.scrollTo(0, 0)
                    }
                }
                if (list.indexOf('PSK') == 0) {
                    if (formCheck != null) {
                        To = 'PSK_profile'
                        window.scrollTo(0, 0)
                    }
                }
                if (list.indexOf('HST') == 0) {
                    if (formCheck != null) {
                        To = 'HST_profile'
                        window.scrollTo(0, 0)
                    }
                }
            }
        }
    }

    if (isReturn == 1) {
        return false
    }

    if (To == 'first_step') {
        var formCheck = document.getElementById('request-form')
        if (formCheck != null) {
            if (document.getElementById('second_step') != null) {
                document.getElementById('second_step').querySelector('#type-result').style.display = 'none'
            }
        }
    }

    if (From == 'second_step') {
        if (back == '') {
            if (document.querySelectorAll('div[id^="second_step"]').length > 1) {
                var list = document.getElementById('second_step').querySelector('#type-result').classList.item(1)
                var item_type = document.querySelector('#summary-window-values-new .item')
                var element = document.createElement('div')
                element.classList.add('item-win-val' + akennumber)
                element.classList.add('item')
                var result = item_type.innerHTML
                element.innerHTML = result
                element.querySelector('.item-del').id = akennumber
                var res = element.getElementsByClassName('type-result-window')[0]
                res.removeAttribute('class')
                res.classList.add('type-result-window')
                res.classList.add(list)
                document.getElementById('summary-window-values-new').appendChild(element)
            }
        }
    }

    document.getElementById(From).style.display = 'none'
    document.getElementById(To).style.display = 'block'
    var avatus = document.getElementById('avatus')
    avatus.removeAttribute('class')
    var avatus = document.getElementById('avatus2')
    avatus.removeAttribute('class')
    var avatus = document.getElementById('avatus3')
    avatus.removeAttribute('class')
    var avatus = document.getElementById('avatus4')
    avatus.removeAttribute('class')

    document.getElementById('opt-1').style.display = 'none'
    document.getElementById('opt-2').style.display = 'none'
    document.getElementById('opt-3').style.display = 'none'
    document.getElementById('opt-4').style.display = 'none'
    document.getElementById('opt-5').style.display = 'none'

    switch (To) {
        case 'first_step':
            document.getElementById('opt-1').style.display = 'block'
            window.scrollTo(0, 0)
            break
        case 'second_step':
            document.getElementById('opt-2').style.display = 'block'
            window.scrollTo(0, 0)
            break
        case 'third_step':
            document.getElementById('opt-3').style.display = 'block'
            window.scrollTo(0, 0)
            break
        case 'fourth_step':
            document.getElementById('opt-4').style.display = 'block'
            window.scrollTo(0, 0)
            break
    }

    return true
}

function Select(elem, additional) {
    // ذںذµر€ذµذ´ ذ²ر‹ذ´ذµذ»ذµذ½ذ¸ذµذ¼ ذ½ذ¾ذ²ذ¾ذ³ذ¾ ذ¾ذ؛ذ½ذ° رپذ½ذ¸ذ¼ذ°ذµذ¼ رپذµذ»ذµذ؛ر‚ رپذ¾ رپر‚ذ°ر€ذ¾ذ³ذ¾
    var x = document.getElementsByClassName('selected')
    var i
    for (i = 0; i < x.length; i++) {
        x[i].classList.remove('selected')
    }
    // ذ،ر‚ذ°ذ²ذ¸ذ¼ رپذµذ»ذµذ؛ر‚ ذ½ذ° ذ²ر‹ذ±ر€ذ°ذ½ذ½ر‹ذ¹ رچذ»ذµذ¼ذµذ½ر‚
    elem.classList.add('selected')

    if (additional != null) {
        return
    }

    // ذ،ر‚ذ°ذ²ذ¸ذ¼ ذ½رƒذ¶ذ½ذ¾ذµ ذ¾ذ؛ذ½ذ¾ ذ² ذ؛ذ»ذ°رپرپ
    var imgClass = elem.getElementsByClassName('image-wrapper')[0].getAttribute('id')
    document.getElementById('second_step').querySelector('#type-result').removeAttribute('class')
    document.getElementById('second_step').querySelector('#type-result').classList.add('type-result')
    document.getElementById('second_step').querySelector('#type-result').classList.add(imgClass)

    if (document.getElementById('second_step').getElementsByClassName('NonexportParam')[0] != null) {
        if ((imgClass.indexOf('HST') != -1) || (imgClass.indexOf('PSK') != -1) || (imgClass.indexOf('FS') != -1) || (imgClass.indexOf('SF') != -1) || (imgClass.indexOf('Smoovio') != -1)) {
            document.getElementById('second_step').getElementsByClassName('NonexportParam')[0].style.display = 'none'
        } else {
            document.getElementById('second_step').getElementsByClassName('NonexportParam')[0].style.display = 'block'
        }
    }

    var ColorOutsideSelect = document.getElementById('second_step').querySelector('#color-outside')
    ColorOutsideSelect.value = ColorOutsideSelect.options[ColorOutsideSelect.selectedIndex].value
    SelectColorOutside(ColorOutsideSelect)

    var ColorInsideSelect = document.getElementById('second_step').querySelector('#color-inside')
    ColorInsideSelect.value = ColorInsideSelect.options[ColorInsideSelect.selectedIndex].value
    SelectColorInside(ColorInsideSelect)

    if (document.getElementById('second_step').querySelector('#erisoovid') != null) {
        document.getElementById('second_step').querySelector('#erisoovid').style.display = 'none'
    }

    var x = document.getElementById('second_step').getElementsByClassName('spec_ak')
    var i
    for (i = 0; i < x.length; i++) {
        x[i].style.display = 'none'
    }

    if (document.getElementById('second_step').querySelector('#aken-svg-' + imgClass) != null) {
        document.getElementById('second_step').querySelector('#aken-svg-' + imgClass).style.display = 'block'

        fullw = document.getElementById('second_step').querySelector('#window-full-width')
        fullh = document.getElementById('second_step').querySelector('#input-full-height')
        frame1 = document.getElementById('second_step').querySelector('#window-bottom-height-1')
        frame2 = document.getElementById('second_step').querySelector('#window-bottom-height-2')
        frame3 = document.getElementById('second_step').querySelector('#window-bottom-height-3')
        frame4 = document.getElementById('second_step').querySelector('#window-bottom-height-4')
        topframe = document.getElementById('second_step').querySelector('#window-side-height')
        botframe = document.getElementById('second_step').querySelector('#window-bot-height')

        switch (imgClass) {
            case 'HST-Schema-A':
            case 'HST-Schema-C':
            case 'HST-Schema-G1':
            case 'HST-Schema-H':
            case 'HST-Schema-K':
            case 'PSK-Schema-A':
            case 'PSK-Schema-C':
            case 'PSK-Schema-G':
            case 'PSK-Schema-K':
            case 'SF-Schema-A':
            case 'SF-Scheme-D':
            case 'SF-Schema-C':
            case 'SF-Schema-F':
            case 'SF-Schema-K':
            case 'Smoovio':
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-" + imgClass + "','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-" + imgClass + "','h')")
                fullw.value = 3000
                fullh.value = 2100
                ChangeSize(fullw.value, '-' + imgClass + '', 'w')
                break
            case 'FS-Schema-321':
            case 'FS-Schema-330':
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-" + imgClass + "','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-" + imgClass + "','h')")
                fullw.value = 2700
                fullh.value = 2100
                ChangeSize(fullw.value, '-' + imgClass + '', 'w')
                break
            case 'FS-Schema-431':
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-" + imgClass + "','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-" + imgClass + "','h')")
                fullw.value = 3600
                fullh.value = 2100
                ChangeSize(fullw.value, '-' + imgClass + '', 'w')
                break
            case 'FS-Schema-541':
            case 'FS-Schema-550':
            case 'FS-Schema-633':
            case 'FS-Schema-651':
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-" + imgClass + "','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-" + imgClass + "','h')")
                fullw.value = 4200
                fullh.value = 2100
                ChangeSize(fullw.value, '-' + imgClass + '', 'w')
                break;
            case 'uheosaline':
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-aken-onepart','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-aken-onepart','h')")
                fullw.value = 1380
                fullh.value = 1340
                ChangeSize(fullw.value, '-aken-onepart', 'w')
                break
            case 'kaheosaline':
                fullw.value = 1530
                fullh.value = 1330
                frame1.value = 765
                frame2.value = 765
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-aken-twopart','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-aken-twopart','h')")
                frame1.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-twopart',1)")
                frame2.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-twopart',2)")
                ChangeSize(fullw.value, '-aken-twopart', 'w')
                break
            case 'kolmeosaline':
                fullw.value = 2110
                fullh.value = 1330
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-aken-threepart','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-aken-threepart','h')")
                frame1.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-threepart',1)")
                frame2.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-threepart',2)")
                frame3.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-threepart',3)")
                ChangeSize(2110, '-aken-threepart', 'w')
                break
            case 'neljaosaline':
                fullw.value = 2110
                fullh.value = 1330
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-aken-fourpart','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-aken-fourpart','h')")
                frame1.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-fourpart',1)")
                frame2.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-fourpart',2)")
                frame3.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-fourpart',3)")
                frame4.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-fourpart',4)")
                ChangeSize(fullw.value, '-aken-fourpart', 'w')
                break
            case 'ule-allall':
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-aken-1up2down','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-aken-1up2down','h')")
                frame1.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-1up2down',1)")
                frame2.setAttribute('onchange', "ChangeFrameWidth(this.value,'-aken-1up2down',2)")
                topframe.setAttribute('onchange', "ChangeFrameHeight(this.value,'-aken-1up2down')")
                fullw.value = 1530
                fullh.value = 1330
                topframe.value = 444
                frame1.value = 765
                frame2.value = 765
                ChangeSize(fullw.value, '-aken-1up2down', 'w')
                break
            case 'rodu-taisklaas':
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-aken-balconydoor','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-aken-balconydoor','h')")
                fullw.value = 730
                fullh.value = 2130
                ChangeSize(fullw.value, '-aken-balconydoor', 'w')
                break
            case 'rodu-poolklaas':
                fullw.setAttribute('onchange', "ChangeSize(this.value,'-aken-balconydoorhalfglass','w')")
                fullh.setAttribute('onchange', "ChangeSize(this.value,'-aken-balconydoorhalfglass','h')")
                botframe.setAttribute('onchange', "ChangeFrameHeight(this.value,'-aken-balconydoorhalfglass')")
                fullw.value = 730
                fullh.value = 2130
                ChangeSize(fullw.value, '-aken-balconydoorhalfglass', 'w')
                break
        }
    }
    var windowAkenRes = document.getElementsByClassName('type-result-window')[0]

    if (document.querySelectorAll('div[id^="second_step"]').length > 1) {
        // var item_type = document.querySelector("#summary-window-values-new .item");
        // var element = document.createElement("div");
        //  element.classList.add("item-win-val"+akennumber);
        //  element.classList.add("item");
        // var result = item_type.innerHTML;
        //  element.innerHTML = result;
        // element.querySelector('.item-del').id = akennumber;
        // var res = element.getElementsByClassName("type-result-window")[0];
        //  res.removeAttribute("class");
        // // res.classList.add("type-result-window");
        // res.classList.add(imgClass);
        // document.getElementById('summary-window-values-new').appendChild(element);
    } else {
        windowAkenRes.removeAttribute('class')
        windowAkenRes.classList.add('type-result-window')
        windowAkenRes.classList.add(imgClass)
    }
    document.getElementById('second_step').querySelector('#aken_type').value = imgClass
    DisplaySize(imgClass)
    StepJump('first_step', 'second_step', '')
}

function hide_all_size_fields() {
    var x = document.getElementById('second_step').getElementsByClassName('field_size')
    for (i = 0; i < x.length; i++) {
        x[i].style.display = 'none'
    }
}

function field_size_display() {
    var all_writed = 1
    var x = document.getElementById('second_step').getElementsByClassName('field_size')
    for (i = 0; i < x.length; i++) {
        if (x[i].style.display == 'block') {
            if (x[i].getElementsByTagName('input')[0].value.length == 0) {
                all_writed = 0
                x[i].getElementsByTagName('input')[0].classList.add('error')
            } else {
                x[i].getElementsByTagName('input')[0].classList.remove('error')
            }
        }
    }
    return all_writed
}

// ذ’ذ°ر€ذ¸ذ°ذ½ر‚ر‹ ذ¾ر‚ذ؛ر€ر‹ر‚ذ¸رڈ
function DisplaySize(aken) {
    hide_all_size_fields()

    if (document.getElementById('second_step').getElementsByClassName('avatus-akna')[0] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-akna')[0].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-akna')[1] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-akna')[1].style.display = 'none'
    }

    // ذ¢ذ¸ذ؟ ذ¾ر‚ذ؛ر€ر‹ر‚ذ¸رڈ ذ¾ذ؛ذ½ذ°
    if (document.getElementById('second_step').getElementsByClassName('avatus-1')[0] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-1')[0].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-1')[1] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-1')[1].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-2')[0] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-2')[0].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-2')[1] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-2')[1].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-3')[0] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-3')[0].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-3')[1] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-3')[1].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-4')[0] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-4')[0].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-4')[1] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-4')[1].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-ule')[0] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-ule')[0].style.display = 'none'
    }
    if (document.getElementById('second_step').getElementsByClassName('avatus-ule')[1] != null) {
        document.getElementById('second_step').getElementsByClassName('avatus-ule')[1].style.display = 'none'
    }

    var x = document.getElementById('second_step').querySelector('#ukse-avatus')
    var i
    for (i = 0; i < x.length; i++) {
        if (i <= 2) {
            x[i].style.display = 'none'
            x.options[i].disabled = true
            x.options[i].selected = false
        } else {
            if (i == 3) x.options[i].selected = true
            x[i].style.display = 'block'
            x.options[i].disabled = false
        }
    }

    if ((aken.indexOf('HST') != -1) || (aken.indexOf('PSK') != -1) || (aken.indexOf('FS') != -1) || (aken.indexOf('SF') != -1) || (aken.indexOf('Smoovio') != -1)) {
        document.getElementById('second_step').getElementsByClassName('avatus-ukse')[0].style.display = 'block'
        document.getElementById('second_step').getElementsByClassName('avatus-ukse')[1].style.display = 'block'
        var isSliding = false
        var x = document.getElementById('second_step').querySelector('#ukse-avatus')
        var i, text
        for (i = 0; i < x.length; i++) {
            if (i <= 1) {
                x[i].style.display = 'none'
                x.options[i].disabled = true
            } else {
                x[i].style.display = 'block'
                x.options[i].disabled = false
            }
        }

        if (document.getElementById('second_step').getElementsByClassName('same-frames-container')[0] != null) {
            document.getElementById('second_step').getElementsByClassName('same-frames-container')[0].style.display = 'none'
        }

        if (aken.indexOf('-C') == -1) {
            if (aken.indexOf('-D') == -1) {
                if (aken.indexOf('-F') == -1) {
                    if (aken.indexOf('-K') == -1) {
                        if (aken.indexOf('-H') == -1) {
                            if (aken.indexOf('-633') == -1 || aken.indexOf('Smoovio') == -1) {
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = 'block'
                                    x.options[i].disabled = false
                                    x.options[i].selected = false
                                    if (i <= 1) {
                                        text = x.options[i].value
                                        text = text.split(',')[0]
                                        x.options[i].value = text + ',' + aken
                                        x.options[i].innerHTML = text + ', ' + aken
                                        if (i == 0) {
                                            x.options[i].selected = true
                                        }
                                    } else {
                                        x[i].style.display = 'none'
                                        x.options[i].disabled = true
                                    }
                                }

                                isSliding = true
                            }
                        }
                    }
                }
            }
        }

        if (isSliding == false) {
            for (i = 0; i < x.length; i++) {
                x[i].style.display = 'block'
                x.options[i].disabled = false
                x.options[i].selected = false
                if (i < 1) {
                    x.options[i].style.display = 'none'
                    x.options[i].disabled = true
                    text = x.options[i].value
                    text = text.split(',')[0]
                    x.options[i].value = text
                    x.options[i].innerHTML = text
                } else if (i == 2) {
                    x.options[i].style.display = 'block'
                    x.options[i].value = aken
                    x.options[i].innerHTML = aken
                    x.options[i].selected = true
                } else {
                    x.options[i].style.display = 'none'
                    x.options[i].disabled = true
                }
            }
        }

        var x = document.getElementById('second_step').querySelector('#profiil')
        if (aken.indexOf('SF') != -1) {
            ChangeProf('Sliding_windows_SF')
            for (i = 0; i < x.length; i++) {
                x.options[i].disabled = true
                x.options[i].selected = false
                x.options[i].style.display = 'none'
                if (i == 6) {
                    x.selectedIndex = x.options[i]
                    x.options[i].selected = true
                    x.options[i].style.display = 'block'
                    x.options[i].disabled = false
                }
            }
        }

        if (aken.indexOf('HST') != -1) {
            ChangeProf('HST_S8000')
            for (i = 0; i < x.length; i++) {
                x.options[i].disabled = true
                x.options[i].selected = false
                x.options[i].style.display = 'none'
                if (i == 1) {
                    x.selectedIndex = x.options[i]
                    x.options[i].selected = true
                }
                if (i >= 1 && i < 3) {
                    x.options[i].style.display = 'block'
                    x.options[i].disabled = false
                }
            }
        }
        if (aken.indexOf('Smoovio') != -1) {
            ChangeProf('Smoovio')
            for (i = 0; i < x.length; i++) {
                x.options[i].disabled = true
                x.options[i].selected = false
                x.options[i].style.display = 'none'
                if (i == 7) {
                    x.selectedIndex = x.options[i]
                    x.options[i].selected = true
                }
                if (i == 7) {
                    x.options[i].style.display = 'block'
                    x.options[i].disabled = false
                }
            }
        }

        if ((aken.indexOf('PSK')) != -1 || (aken.indexOf('FS') != -1)) {
            ChangeProf('Gealan_S8000')
            for (i = 0; i < x.length; i++) {
                x.options[i].disabled = true
                x.options[i].selected = false
                x.options[i].style.display = 'none'
                if (i == 3) {
                    x.selectedIndex = x.options[i]
                    x.options[i].selected = true
                }
                if (i >= 3 && i < 6) {
                    x.options[i].style.display = 'block'
                    x.options[i].disabled = false
                }

                // ذ”ذ¾ذ±ذ°ذ²ذ»رڈذµذ¼ Linear ذ´ذ»رڈ ذ·ذ°ذ؟ر€ذ¾رپذ° ذ½ذ° ذ¾ذ؛ذ½ذ°
                if (x.options[i].value == 'Gealan_Linear') {
                    x.options[i].style.display = 'block'
                    x.options[i].disabled = false
                }
            }
        }

        document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
        document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
    } else {
        var x = document.getElementById('second_step').querySelector('#profiil')
        ChangeProf('Gealan_S8000')
        for (i = 0; i < x.length; i++) {
            x.options[i].disabled = true
            x.options[i].selected = false
            x.options[i].style.display = 'none'
            if (i == 3) {
                x.selectedIndex = x.options[i]
                x.options[i].selected = true
            }
            if (i >= 3) {
                x.options[i].style.display = 'block'
                x.options[i].disabled = false
            }
        }

        // ذ‍ر‚ذ؛ر€ر‹ر‚ذ¸ذµ ذ´ذ²ذµر€ذ¸
        document.getElementById('second_step').getElementsByClassName('avatus-ukse')[0].style.display = 'none'
        document.getElementById('second_step').getElementsByClassName('avatus-ukse')[1].style.display = 'none'
        // eriaken
        if (document.getElementById('second_step').querySelector('#eriaken-message-box') != null) {
            document.getElementById('second_step').querySelector('#eriaken-message-box').style.display = 'none'
        }
        document.getElementById('second_step').getElementsByClassName('window-values-only')[0].style.display = 'block'
        document.getElementById('second_step').getElementsByClassName('second-step-options')[0].style.display = 'block'
        // frames
        if (document.getElementById('second_step').getElementsByClassName('same-frames-container')[0] != null) {
            document.getElementById('second_step').getElementsByClassName('same-frames-container')[0].style.display = 'none'
        }

        switch (aken) {
            case 'ule-allall':
                document.getElementById('second_step').getElementsByClassName('avatus-1')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-1')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-2')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-2')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-ule')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-ule')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-1')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-2')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-side-height')[0].style.display = 'block'
                if (document.getElementById('second_step').getElementsByClassName('same-frames-container')[0] != null) {
                    document.getElementById('second_step').getElementsByClassName('same-frames-container')[0].style.display = 'block'
                }
                break
            case 'kaheosaline':
                document.getElementById('second_step').getElementsByClassName('avatus-1')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-1')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-2')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-2')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-1')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-2')[0].style.display = 'block'
                if (document.getElementById('second_step').getElementsByClassName('same-frames-container')[0] != null) {
                    document.getElementById('second_step').getElementsByClassName('same-frames-container')[0].style.display = 'block'
                }
                break
            case 'uheosaline':
                document.getElementById('second_step').getElementsByClassName('avatus-akna')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-akna')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                break
            case 'rodu-taisklaas':
                document.getElementById('second_step').getElementsByClassName('avatus-ukse')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-ukse')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                break
            case 'rodu-poolklaas':
                document.getElementById('second_step').getElementsByClassName('avatus-ukse')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-ukse')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-alumine-height')[0].style.display = 'block'
                //  if (document.getElementById('second_step').getElementsByClassName("same-frames-container")[0] != null)
                //     document.getElementById('second_step').getElementsByClassName("same-frames-container")[0].style.display = "block";
                break
            case 'kolmeosaline': // ذ’رپذµ ذ½ذ¾ر€ذ¼ذ°ذ»رŒذ½ذ¾
                document.getElementById('second_step').getElementsByClassName('avatus-1')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-1')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-2')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-2')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-3')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-3')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-1')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-2')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-3')[0].style.display = 'block'
                if (document.getElementById('second_step').getElementsByClassName('same-frames-container')[0] != null) {
                    document.getElementById('second_step').getElementsByClassName('same-frames-container')[0].style.display = 'block'
                }
                break
            case 'neljaosaline': // ذ‌ذµ ذ؟ر€ذ¾ذ³ر€رƒذ¶ذ°رژر‚رپرڈ ذ؟ذ¾ذ»رڈ ذ¸ ذ؛ذ°ر€ر‚ذ¸ذ½ذ؛ذ°
                document.getElementById('second_step').getElementsByClassName('avatus-1')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-1')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-2')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-2')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-3')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-3')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-4')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-4')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-1')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-2')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-3')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-bottom-height-4')[0].style.display = 'block'
                if (document.getElementById('second_step').getElementsByClassName('same-frames-container')[0] != null) {
                    document.getElementById('second_step').getElementsByClassName('same-frames-container')[0].style.display = 'block'
                }
                break
            case 'rodu-taisklaas-uheneaken':
                document.getElementById('second_step').getElementsByClassName('avatus-ukse')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-ukse')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                break
            case 'rodu-poolklaas-uheneaken':
                document.getElementById('second_step').getElementsByClassName('avatus-ukse')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('avatus-ukse')[1].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-height')[0].style.display = 'block'
                document.getElementById('second_step').getElementsByClassName('input-full-width')[0].style.display = 'block'
                break
        }
    }

}

function selectGlazing(element) {
    changeGlazing(element.value)
}

// ذ’ر‹ذ±ذ¾ر€ ذ؛ذ°ر€ر‚ذ¸ذ½ذ؛ذ¸ رپر‚ذµذ؛ذ»ذ¾ذ؟ذ°ذ؛ذµر‚ذ°
function changeGlazing(value) {
    var glazingHoverImg = document.getElementById('second_step').querySelector('.glazing-hover')
    var glazingImg = document.getElementById('second_step').querySelector('.glazing-a')
    if (value == '24 mm - 2k4-16-4LowE+ arg - Ug - 1,1 W/m2K' || value == 'DoubleGlazing') {
        glazingHoverImg.setAttribute('src', '/sites/default/files/Double glazing.jpg')
        glazingImg.setAttribute('href', '/sites/default/files/Double glazing.jpg')
        glazingImg.setAttribute('title', value)
        glazingHoverImg.setAttribute('alt', value)
    } else {
        glazingHoverImg.setAttribute('src', '/sites/default/files/Triple glazing.jpg')
        glazingImg.setAttribute('href', '/sites/default/files/Triple glazing.jpg')
        glazingImg.setAttribute('title', value)
        glazingHoverImg.setAttribute('alt', value)
    }
}

function addColor() { }
document.addEventListener('DOMContentLoaded', function (event) {
    if (String(window.location).indexOf('addfile') != -1 || String(window.location).indexOf('type=metal-door-request') != -1) {
        document.getElementById('PDF').style.display = 'none'
        try {
            document.getElementById('printText').style.display = 'none'
        } catch (err) {

        }
    } else {
        var selectId = document.getElementById('filiaali-teenus')
        var curentLang = (String(String(window.location).match(/[/][a-z][a-z]?[a-z]?[a-z][/]/))).replace(/[/]/g, '')
        var request = new XMLHttpRequest()
        var params = {
            lang: curentLang
        }
        // console.log(curentLang);

        request.open('GET', '/request-filials.php' + '?lang=' + curentLang, true)
        request.onload = function () {
            if (request.status >= 200 && request.status < 400) {
                var html
                var data = JSON.parse(request.responseText)
                // رپذ؟ذ¸رپذ¾ذ؛ ذ؟ذ¾ر‡ر‚ذ¾ذ²ر‹ر… رڈر‰ذ¸ذ؛ذ¾ذ² ر‚رƒر‚: /request-filials.php - ذ² ذ؛ذ¾ر€ذ½ذµ رپذ°ذ¹ر‚ذ°
                if (curentLang == 'et' || curentLang == 'ru') {
                    html += '<option value="" selected="selected" disabled=""></option>'
                    for (var z = 0; z <= data.length - 1; z++) {
                        html += '<optgroup label="' + data[z].Group + '">'
                        for (var i = 0; i <= data[z].Filials.length - 1; i++) {
                            html += '<option value ="' + data[z].Filials[i].Email + '">' + data[z].Filials[i].Filial + '</option>'
                        }
                    }
                } else {
                    html += '<option value ="' + data[0].Filials[0].Email + '" selected="selected">' + data[0].Filials[0].Filial + '</option>'
                }
                try {
                    document.getElementById('filiaali-teenus').innerHTML = html
                } catch (err) { }
                document.getElementById('edit-submitted-filial').innerHTML = html
            } else {
                console.log('Error', request.statusText)
            }
        }

        request.onerror = function () {
            // There was a connection error of some sort
            console.log('Error', request.statusText)
        }

        request.send()
    }
})