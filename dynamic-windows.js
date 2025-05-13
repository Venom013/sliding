var MaxHeight = 251;
var MaxWidth = 251;

var MinWidthOnepart = 0.25;
var MinWidthBalconydoor = 0.25;
var MinWidthBalconydoorhalfglass = 0.55;
var MinWidth1up2down = 0.85;
var MinWidthtwopart = 0.75;
var MinWidththreepart = 0.55;
var MinWidtfourpart = 0.55;

var MinWidthDoors = 0.4;

var MaxFrameHeight = 0.75;
var MinFrameHeight = 0.25;
var MaxFrameWidth = 0.75;
var MinFrameWidth = 0.25;

var MinBotHeight = 0.25;
var MaxBotHeight = 0.75;

var MinFrameWidthThreePart = 0.15;
var MaxFrameWidthThreePart = 0.70;

var MinFrameWidthFourPart = 0.166;
var MaxFrameWidthFourPart = 0.50;

function ChangeFrameWidth(val, aken_name, frame_numb) {
    if (val == '')
        return;

    var curWidth = document.getElementById('second_step').querySelector('#window-full-width').value;

    frameSize = 2;

    if (aken_name == '-aken-threepart')
        frameSize = 3;
    if (aken_name == '-aken-fourpart')
        frameSize = 4;

    firstFrame = document.getElementById('second_step').querySelector('#middle-frame-' + frame_numb + aken_name);
    firstFrameNumb = frame_numb;
    secondFrameNumb = frame_numb != frameSize ? frame_numb + 1 : 1;

    secondFrame = document.getElementById('second_step').querySelector('#middle-frame-' + secondFrameNumb + aken_name);

    SpecialMaxWidth = MaxFrameWidth;
    SpecialMinWidth = MinFrameWidth;
    if (aken_name == '-aken-threepart') {
        SpecialMaxWidth = MaxFrameWidthThreePart;
        SpecialMinWidth = MinFrameWidthThreePart;
    }

    if (aken_name == '-aken-fourpart') {
        SpecialMaxWidth = MaxFrameWidthFourPart;
        SpecialMinWidth = MinFrameWidthFourPart;
    }

    percentF = val / curWidth; // 0.25
    percentFirst = percentF;

    percentFirst = percentFirst > SpecialMaxWidth ? SpecialMaxWidth : (percentFirst < SpecialMinWidth ? SpecialMinWidth : percentFirst);

    field1FrameSize = document.getElementById('second_step').querySelector('#window-bottom-height-1');
    field2FrameSize = document.getElementById('second_step').querySelector('#window-bottom-height-2');
    field3FrameSize = document.getElementById('second_step').querySelector('#window-bottom-height-3');
    field4FrameSize = document.getElementById('second_step').querySelector('#window-bottom-height-4');

    fieldCurFrameSize = document.getElementById('second_step').querySelector('#window-bottom-height-' + secondFrameNumb);

    if (percentFirst == SpecialMaxWidth || percentFirst == SpecialMinWidth)
        document.getElementById('second_step').querySelector('#window-bottom-height-' + firstFrameNumb).value = Number(curWidth * percentFirst).toFixed(0);

    var svgWidth = document.getElementById('second_step').querySelector('#' + aken_name).getAttribute("width");

    firstSize = svgWidth * percentFirst;

    firstFrameS = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name);
    secondFrameS = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name);
    thirdFrameS = document.getElementById('second_step').querySelector('#middle-frame-3' + aken_name);
    fourFrameS = document.getElementById('second_step').querySelector('#middle-frame-4' + aken_name);

    if (aken_name == '-aken-threepart') {

        firstFrame.setAttribute("width", firstSize - 6);

        x = document.getElementById('second_step').querySelectorAll('#' + aken_name + ' .middle-frame-' + firstFrameNumb + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("width", firstSize - 6);

        widthExpectSecondFrameIMG = Number(firstFrameS.getAttribute("width")) + Number(secondFrameS.getAttribute("width")) + Number(thirdFrameS.getAttribute("width")) - Number(secondFrame.getAttribute("width"));

        SecondFrameNewWidth = Number(svgWidth) - widthExpectSecondFrameIMG;

        widthExpectSecondFrame = Number(field1FrameSize.value) + Number(field2FrameSize.value) + Number(field3FrameSize.value) - Number(fieldCurFrameSize.value);

        document.getElementById('second_step').querySelector('#window-bottom-height-' + secondFrameNumb).value = Number(curWidth) - widthExpectSecondFrame;

        secondFrame.setAttribute("width", SecondFrameNewWidth - 23);

        secondFrameS.setAttribute("x", Number(firstFrameS.getAttribute("width")) + 12);
        thirdFrameS.setAttribute("x", Number(firstFrameS.getAttribute("width")) + Number(secondFrameS.getAttribute("width")) + 16);

        x = document.getElementById('second_step').querySelectorAll('#' + aken_name + ' .middle-frame-' + secondFrameNumb + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("width", SecondFrameNewWidth - 23);

    } else if (aken_name == '-aken-fourpart') {
        firstFrame.setAttribute("width", firstSize - 6);

        x = document.getElementById('second_step').querySelectorAll('#' + aken_name + ' .middle-frame-' + firstFrameNumb + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("width", firstSize - 6);
        widthExpectSecondFrameIMG = Number(firstFrameS.getAttribute("width")) + Number(secondFrameS.getAttribute("width")) + Number(thirdFrameS.getAttribute("width")) + Number(fourFrameS.getAttribute("width")) - Number(secondFrame.getAttribute("width"));

        SecondFrameNewWidth = Number(svgWidth) - widthExpectSecondFrameIMG;

        widthExpectSecondFrame = Number(field1FrameSize.value) + Number(field2FrameSize.value) + Number(field3FrameSize.value) + Number(field4FrameSize.value) - Number(fieldCurFrameSize.value);

        document.getElementById('second_step').querySelector('#window-bottom-height-' + secondFrameNumb).value = Number(curWidth) - widthExpectSecondFrame;

        secondFrame.setAttribute("width", SecondFrameNewWidth - 27);

        x = document.getElementById('second_step').querySelectorAll('#' + aken_name + ' .middle-frame-' + secondFrameNumb + '' + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("width", SecondFrameNewWidth - 27);

        secondFrameS.setAttribute("x", Number(firstFrameS.getAttribute("width")) + 11);
        thirdFrameS.setAttribute("x", Number(firstFrameS.getAttribute("width")) + Number(secondFrameS.getAttribute("width")) + 16);
        fourFrameS.setAttribute("x", Number(firstFrameS.getAttribute("width")) + Number(secondFrameS.getAttribute("width")) + Number(thirdFrameS.getAttribute("width")) + 21);
    } else {
        firstFrame.setAttribute("width", firstSize - 9.5);

        x = document.getElementById('second_step').querySelectorAll('#' + aken_name + ' .middle-frame-' + firstFrameNumb + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("width", firstSize - 9.5);
        secondFrame.setAttribute("width", svgWidth - firstSize - 9.5);
        x = document.getElementById('second_step').querySelectorAll('#' + aken_name + ' .middle-frame-' + secondFrameNumb + '' + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("width", svgWidth - firstSize - 9.5);

        secondFrameS.setAttribute("x", Number(firstFrameS.getAttribute("width")) + 12);

        frame1Width = Number(document.getElementById('second_step').querySelector('#window-bottom-height-' + firstFrameNumb).value);
        document.getElementById('second_step').querySelector('#window-bottom-height-' + secondFrameNumb).value = curWidth - frame1Width;
    }

    RecalculateLines(aken_name);
    CallToRecalculate(aken_name);
    SaveProportionsForNonopen(aken_name);
    CalculateFSOpening(aken_name);
}

function ChangeWidth(val, aken_name) {

    var svg = document.getElementById('second_step').querySelector('#' + aken_name);
    var getX = val - 23;

    document.getElementById('second_step').querySelector('#' + aken_name).setAttribute("width", val);
    var x, i;

    if (document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name) != null)
        document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).setAttribute("width", val - 14);

    if (aken_name == '-aken-1up2down') {
        document.getElementById('second_step').querySelector('#top-frame' + aken_name).setAttribute("width", val - 14);

        x = document.getElementById('second_step').querySelectorAll('#' + aken_name + ' .top-frame' + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("width", val - 14);
    }
}

function recalculateFrameVal(aken_name) {
    var svgWidth = Number(document.getElementById('second_step').querySelector('#window-full-width').value);
    var svgHeight = Number(document.getElementById('second_step').querySelector('#input-full-height').value);

    if (aken_name == '-aken-threepart' || aken_name == '-aken-fourpart') {
        percent = aken_name == '-aken-threepart' ? 0.333 : 0.25;
        document.getElementById('second_step').querySelector('#window-bottom-height-1').value = (svgWidth * percent).toFixed(0);
        firstFrameVal = document.getElementById('second_step').querySelector('#window-bottom-height-1').value;
        document.getElementById('second_step').querySelector('#window-bottom-height-2').value = (svgWidth * percent).toFixed(0);
        secondFrameVal = document.getElementById('second_step').querySelector('#window-bottom-height-2').value;
        if (aken_name == '-aken-threepart') {
            document.getElementById('second_step').querySelector('#window-bottom-height-3').value = svgWidth - Number(firstFrameVal) - Number(secondFrameVal);
            thirdFrameVal = document.getElementById('second_step').querySelector('#window-bottom-height-3').value;
        } else {
            document.getElementById('second_step').querySelector('#window-bottom-height-3').value = (svgWidth * percent).toFixed(0);
            thirdFrameVal = document.getElementById('second_step').querySelector('#window-bottom-height-3').value;
            document.getElementById('second_step').querySelector('#window-bottom-height-4').value = svgWidth - Number(firstFrameVal) - Number(secondFrameVal) - Number(thirdFrameVal);
            fourFrameVal = document.getElementById('second_step').querySelector('#window-bottom-height-4').value;
        }
        ChangeFrameWidth(Number(firstFrameVal), aken_name, 1);
        ChangeFrameWidth(Number(secondFrameVal), aken_name, 2);
        ChangeFrameWidth(Number(thirdFrameVal), aken_name, 3);
        if (aken_name == '-aken-fourpart') {
            ChangeFrameWidth(Number(fourFrameVal), aken_name, 4);
        }
    }

    if (aken_name == '-aken-twopart' || aken_name == '-aken-1up2down') {
        valueF = document.getElementById('second_step').querySelector('#window-bottom-height-1').value;
        valueF = valueF / svgWidth; // 0.5

        valueF = Math.ceil(valueF * svgWidth);

        ChangeFrameWidth(valueF, aken_name, 1);
    }
}

function ChangeFrameHeight(frameheight, aken_name) {

    var svgHeight = document.getElementById('second_step').querySelector('#' + aken_name).getAttribute('height');

    var windowHeight = document.getElementById('second_step').querySelector('#input-full-height').value;
    var TopAkenP = frameheight / windowHeight;
    percentTop = TopAkenP.toFixed(2); // 0.5

    percentTop = percentTop > MaxFrameHeight ? MaxFrameHeight : (percentTop < MinFrameHeight ? MinFrameHeight : percentTop);

    TopFrameH = percentTop * svgHeight; // 0.25

    FrameH = svgHeight - TopFrameH;

    if (aken_name == '-aken-balconydoorhalfglass') {
        document.getElementById('second_step').querySelector('#bottom-frame' + aken_name).setAttribute("y", FrameH);
        document.getElementById('second_step').querySelector('#top-frame' + aken_name).setAttribute("height", FrameH - 4);
    }

    if (aken_name == '-aken-1up2down') {
        document.getElementById('second_step').querySelector('#top-frame' + aken_name).setAttribute("height", TopFrameH);
        x = document.getElementById('second_step').querySelector('#' + aken_name).querySelectorAll('.top-frame' + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("height", TopFrameH);

        document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).setAttribute("y", TopFrameH + 10);
        document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).setAttribute("y", TopFrameH + 10);

        x = document.getElementById('second_step').querySelector('#' + aken_name).querySelectorAll('#middle-frame-1' + aken_name + ',.middle-frame-1' + aken_name + ',#middle-frame-2' + aken_name + ',.middle-frame-2' + aken_name);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("height", FrameH - 17);
    }
    var curHei = document.getElementById('second_step').querySelector('#input-full-height').value;

    if (percentTop == MaxFrameHeight || percentTop == MinFrameHeight) {
        document.getElementById('second_step').querySelector('#window-side-height').value = (curHei * percentTop).toFixed(0);
        document.getElementById('second_step').querySelector('#window-bot-height').value = (curHei * percentTop).toFixed(0);
    }

    RecalculateLines(aken_name);
    CallToRecalculate(aken_name);
    SaveProportionsForNonopen(aken_name);
    CalculateFSOpening(aken_name);
}

function ChangeSize(val, aken_name, type) {
    aheight = document.getElementById('second_step').querySelector('#input-full-height').value;
    awidth = document.getElementById('second_step').querySelector('#window-full-width').value;
    percentC = type == 'h' ? (aheight / awidth) : (awidth / aheight); // 0.6
    percentS = type == 'h' ? (awidth / aheight) : (aheight / awidth); // 0.3

    percent_type = 0;

    if ((aken_name.indexOf('HST') != -1) || (aken_name.indexOf('PSK') != -1) || (aken_name.indexOf('FS') != -1) || (aken_name.indexOf('SF') != -1) || (aken_name.indexOf('Smoovio') != -1)) {
        percent_type_w = MinWidthDoors;
        aken_name = "-aken" + aken_name;
    }

    switch (aken_name) {
        case "-aken-onepart":
            percent_type_w = MinWidthOnepart;
            break;
        case "-aken-1up2down":
            percent_type_w = MinWidth1up2down;
            break;
        case "-aken-twopart":
            percent_type_w = MinWidthtwopart;
            break;
        case "-aken-balconydoor":
            percent_type_w = MinWidthBalconydoor;
            break;
        case "-aken-balconydoorhalfglass":
            percent_type_w = MinWidthBalconydoorhalfglass;
            break;
        case "-aken-threepart":
            percent_type_w = MinWidththreepart;
            break;
        case "-aken-fourpart":
            percent_type_w = MinWidtfourpart;
            break;
    }
    percentC = percentC > 1 ? 1 : (percentC < percent_type_w ? percent_type_w : percentC);
    percentS = percentS > 1 ? 1 : (percentS < percent_type_w ? percent_type_w : percentS);
    valCur = type == 'h' ? percentC * MaxHeight : percentC * MaxWidth;
    valSec = type == 'h' ? percentS * MaxWidth : percentS * MaxHeight;

    var svgWidth = Number(document.getElementById('second_step').querySelector('#window-full-width').value);
    var svgHeight = Number(document.getElementById('second_step').querySelector('#input-full-height').value);


    ChangeHeight(type == 'h' ? valCur : valSec, aken_name);
    if (aken_name != "-aken-threepart")
        if (aken_name != "-aken-fourpart")
            if (aken_name.indexOf('HST') == -1)
                if (aken_name.indexOf('PSK') == -1)
                    if (aken_name.indexOf('FS') == -1)
                        if (aken_name.indexOf('SF') == -1)
                            if (aken_name.indexOf('Smoovio') == -1) {
                                ChangeWidth(type == 'h' ? valSec : valCur, aken_name);
                            }

    recalculateFrameVal(aken_name);

    var svgWidth = document.getElementById('second_step').querySelector('#' + aken_name).getAttribute("width");
    svgWidth = Number(svgWidth) + 2;
    var svgHeight = document.getElementById('second_step').querySelector('#' + aken_name).getAttribute("height");

    document.getElementById('second_step').getElementsByClassName('second-svg' + aken_name)[0].setAttribute("height", Number(svgHeight));
    document.getElementById('second_step').getElementsByClassName('second-svg' + aken_name)[0].setAttribute("width", Number(svgWidth) - 2);

    if (document.getElementById('second_step').querySelector('#bg-frame' + aken_name) != null) {
        document.getElementById('second_step').querySelector('#bg-frame' + aken_name).setAttribute("width", Number(svgWidth) - 30);
        document.getElementById('second_step').querySelector('#bg-frame' + aken_name).setAttribute("height", Number(svgHeight) - 28);
    }

    document.getElementById('second_step').querySelector('#line-width-full' + aken_name).setAttribute("x", Number(svgWidth) / 2 - 20);
    document.getElementById('second_step').querySelector('#line-height-full' + aken_name).setAttribute("x", "-" + Number(svgHeight) / 2 - 20);
    document.getElementById('second_step').querySelector('#line-width-full' + aken_name).innerHTML = awidth + "mm";
    document.getElementById('second_step').querySelector('#line-height-full' + aken_name).innerHTML = aheight + "mm";

    RecalculateLines(aken_name);
    CallToRecalculate(aken_name);
    SaveProportionsForNonopen(aken_name);
    CalculateFSOpening(aken_name);
}

function CalculateFSOpening(aken_name) {

    var svgWidth = Number(document.getElementById('second_step').querySelector('#' + aken_name).getAttribute("width"));
    var svgHeight = Number(document.getElementById('second_step').querySelector('#' + aken_name).getAttribute("height"));
    var OPpoints = "";

    if (aken_name.indexOf('321') != -1) {
        OPpoints = svgWidth - 22 + ",15 ";
        OPpoints += svgWidth - 77 + "," + (svgHeight / 2) + " ";
        OPpoints += svgWidth - 22 + "," + (svgHeight - 15) + " ";
        OPpoints += svgWidth - 47 + ",15 ";
        OPpoints += svgWidth - 78 + "," + (svgHeight - 15);
    }

    if (aken_name.indexOf('431') != -1) {
        OPpoints = svgWidth - 16 + ",10 ";
        OPpoints += svgWidth - 62 + "," + (svgHeight / 2) + " ";
        OPpoints += svgWidth - 16 + "," + (svgHeight - 10) + " ";
        OPpoints += svgWidth - 39 + ",10 ";
        OPpoints += svgWidth - 62 + "," + (svgHeight - 10);
    }

    if (aken_name.indexOf('541') != -1) {
        OPpoints = svgWidth - 14 + ",8 ";
        OPpoints += svgWidth - 50 + "," + (svgHeight / 2) + " ";
        OPpoints += svgWidth - 14 + "," + (svgHeight - 8) + " ";
        OPpoints += svgWidth - 33 + ",8 ";
        OPpoints += svgWidth - 50 + "," + (svgHeight - 8);
    }

    if (aken_name.indexOf('651') != -1) {
        OPpoints = svgWidth - 13 + ",9 ";
        OPpoints += svgWidth - 43 + "," + (svgHeight / 2) + " ";
        OPpoints += svgWidth - 13 + "," + (svgHeight - 7) + " ";
        OPpoints += svgWidth - 27 + ",9 ";
        OPpoints += svgWidth - 43 + "," + (svgHeight - 7);
    }

    if (document.getElementById('second_step').querySelector('#open' + aken_name) != null)
        document.getElementById('second_step').querySelector('#open' + aken_name).setAttribute('points', OPpoints);
}

function ChangeHeight(val, aken_name) {

    var svg = document.getElementById('second_step').querySelector('#' + aken_name);
    var getY = val - 23;

    document.getElementById('second_step').querySelector('#' + aken_name).setAttribute("height", val);
    var i;

    var svgHeight = document.getElementById('second_step').querySelector('#input-full-height').value;

    if ((aken_name.indexOf('HST') != -1) || (aken_name.indexOf('PSK') != -1) || (aken_name.indexOf('FS') != -1) || (aken_name.indexOf('SF') != -1) || (aken_name.indexOf('Smoovio') != -1)) {
        if (document.getElementById('second_step').querySelector("#" + aken_name + "-grad-right") != null) {
            var valpadding = 19;
            if ((aken_name.indexOf('D') != -1) || (aken_name.indexOf('FS') != -1))
                valpadding = 31.5;

            document.getElementById('second_step').querySelector("#" + aken_name + "-grad-right").setAttribute("height", svg.getAttribute("height") - valpadding);
        }

        for (i = 0; i <= 6; i++) {
            var Specval = i == 0 ? "" : i;
            if (document.getElementById('second_step').querySelector("#handle" + Specval + aken_name) != null)
                document.getElementById('second_step').querySelector("#handle" + Specval + aken_name).setAttribute("y", svg.getAttribute("height") / 2 - (document.getElementById('second_step').querySelector("#handle" + Specval + aken_name).getAttribute("height") / 2.5));

            if (document.getElementById('second_step').querySelector("#arrow" + Specval + aken_name) != null)
                document.getElementById('second_step').querySelector("#arrow" + Specval + aken_name).setAttribute("y", svg.getAttribute("height") - (document.getElementById('second_step').querySelector("#arrow" + Specval + aken_name).getAttribute("height") * 4));
        }
        document.getElementById('second_step').querySelector("#" + aken_name + "-bot").setAttribute("y", svg.getAttribute("height") - document.getElementById('second_step').querySelector("#" + aken_name + "-bot").getAttribute("height"));
    }

    if (aken_name == '-aken-1up2down' || aken_name == '-aken-balconydoorhalfglass') {
        valueF = document.getElementById('second_step').querySelector('#window-side-height').value;
        valueF = valueF / svgHeight; // 0.5
        valueF = Math.ceil(valueF * svgHeight);
        document.getElementById('second_step').querySelector('#window-side-height').value = valueF;
        ChangeFrameHeight(valueF, aken_name);
    }

    if (aken_name != '-aken-1up2down')
        if (document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name) != null)
            document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).setAttribute("height", val - 14);

    if (aken_name == '-aken-twopart' || aken_name == '-aken-threepart' || aken_name == '-aken-fourpart') {
        document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).setAttribute("height", val - 14);
        if (aken_name == '-aken-threepart' || aken_name == '-aken-fourpart')
            document.getElementById('second_step').querySelector('#middle-frame-3' + aken_name).setAttribute("height", val - 14);

        if (aken_name == '-aken-fourpart')
            document.getElementById('second_step').querySelector('#middle-frame-4' + aken_name).setAttribute("height", val - 14);

        frames_spec = '.middle-frame-1' + aken_name + ',.middle-frame-2' + aken_name;

        if (aken_name == '-aken-threepart' || aken_name == '-aken-fourpart')
            frames_spec = frames_spec + ',.middle-frame-3' + aken_name;

        if (aken_name == '-aken-fourpart')
            frames_spec = frames_spec + ',.middle-frame-4' + aken_name;

        x = document.getElementById('second_step').querySelector('#' + aken_name).querySelectorAll(frames_spec);
        for (i = 0; i < x.length; i++)
            x[i].setAttribute("height", val - 14);

    }
}

function RecalculateLines(aken_name) {
    if ((aken_name.indexOf('HST') != -1) || (aken_name.indexOf('PSK') != -1) || (aken_name.indexOf('FS') != -1) || (aken_name.indexOf('SF') != -1) || (aken_name.indexOf('Smoovio') != -1))
        return;
    RecalculateLine('line-bottom-right' + aken_name, true, true, aken_name);
    RecalculateLine('line-bottom-left' + aken_name, false, true, aken_name);
    RecalculateLine('line-top-right' + aken_name, true, false, aken_name);

    switch (aken_name) {
        case "-aken-onepart":
            RecalculateLine('line-right-top-1-frame' + aken_name, true, false, 'middle-frame-1-aken-onepart');
            RecalculateLine('line-left-bot-1-frame' + aken_name, false, true, 'middle-frame-1-aken-onepart');
            RecalculateLine('line-right-bot-1-frame' + aken_name, true, true, 'middle-frame-1-aken-onepart');
            break;
        case "-aken-balconydoor":
            RecalculateLine('line-right-top-1-frame' + aken_name, true, false, 'middle-frame-1-aken-balconydoor');
            RecalculateLine('line-left-bot-1-frame' + aken_name, false, true, 'middle-frame-1-aken-balconydoor');
            RecalculateLine('line-right-bot-1-frame' + aken_name, true, true, 'middle-frame-1-aken-balconydoor');
            break;
        case "-aken-balconydoorhalfglass":
            RecalculateLine('line-right-top-1-frame' + aken_name, true, false, 'middle-frame-1-aken-balconydoorhalfglass');
            RecalculateLine('line-left-bot-1-frame' + aken_name, false, true, 'middle-frame-1-aken-balconydoorhalfglass');
            RecalculateLine('line-right-bot-1-frame' + aken_name, true, true, 'middle-frame-1-aken-balconydoorhalfglass');
            break;
        case "-aken-twopart":
            RecalculateLine('line-right-top-1-frame' + aken_name, true, false, 'middle-frame-1-aken-twopart');
            RecalculateLine('line-left-bot-1-frame' + aken_name, false, true, 'middle-frame-1-aken-twopart');
            RecalculateLine('line-right-bot-1-frame' + aken_name, true, true, 'middle-frame-1-aken-twopart');
            RecalculateLine('line-left-bot-2-frame' + aken_name, false, true, 'middle-frame-2-aken-twopart');
            RecalculateLine('line-right-top-2-frame' + aken_name, true, false, 'middle-frame-2-aken-twopart');
            RecalculateLine('line-right-bot-2-frame' + aken_name, true, true, 'middle-frame-2-aken-twopart');
            break;
        case "-aken-1up2down":
            RecalculateLine('line-right-top-topframe' + aken_name, true, false, 'top-frame-aken-1up2down');
            RecalculateLine('line-left-bot-topframe' + aken_name, false, true, 'top-frame-aken-1up2down');
            RecalculateLine('line-right-bot-topframe' + aken_name, true, true, 'top-frame-aken-1up2down');
            RecalculateLine('line-right-top-1-frame' + aken_name, true, false, 'middle-frame-1-aken-1up2down');
            RecalculateLine('line-left-bot-1-frame' + aken_name, false, true, 'middle-frame-1-aken-1up2down');
            RecalculateLine('line-right-bot-1-frame' + aken_name, true, true, 'middle-frame-1-aken-1up2down');
            RecalculateLine('line-left-bot-2-frame' + aken_name, false, true, 'middle-frame-2-aken-1up2down');
            RecalculateLine('line-right-top-2-frame' + aken_name, true, false, 'middle-frame-2-aken-1up2down');
            RecalculateLine('line-right-bot-2-frame' + aken_name, true, true, 'middle-frame-2-aken-1up2down');
            break;
        case "-aken-threepart":
            RecalculateLine('line-left-bot-1-frame' + aken_name, false, true, 'middle-frame-1-aken-threepart');
            RecalculateLine('line-right-top-1-frame' + aken_name, true, false, 'middle-frame-1-aken-threepart');
            RecalculateLine('line-right-bot-1-frame' + aken_name, true, true, 'middle-frame-1-aken-threepart');
            RecalculateLine('line-left-bot-2-frame' + aken_name, false, true, 'middle-frame-2-aken-threepart');
            RecalculateLine('line-right-top-2-frame' + aken_name, true, false, 'middle-frame-2-aken-threepart');
            RecalculateLine('line-right-bot-2-frame' + aken_name, true, true, 'middle-frame-2-aken-threepart');
            RecalculateLine('line-left-bot-3-frame' + aken_name, false, true, 'middle-frame-3-aken-threepart');
            RecalculateLine('line-right-top-3-frame' + aken_name, true, false, 'middle-frame-3-aken-threepart');
            RecalculateLine('line-right-bot-3-frame' + aken_name, true, true, 'middle-frame-3-aken-threepart');
            break;
        case "-aken-fourpart":
            RecalculateLine('line-left-bot-1-frame' + aken_name, false, true, 'middle-frame-1-aken-fourpart');
            RecalculateLine('line-right-top-1-frame' + aken_name, true, false, 'middle-frame-1-aken-fourpart');
            RecalculateLine('line-right-bot-1-frame' + aken_name, true, true, 'middle-frame-1-aken-fourpart');

            RecalculateLine('line-left-bot-2-frame' + aken_name, false, true, 'middle-frame-2-aken-fourpart');
            RecalculateLine('line-right-top-2-frame' + aken_name, true, false, 'middle-frame-2-aken-fourpart');
            RecalculateLine('line-right-bot-2-frame' + aken_name, true, true, 'middle-frame-2-aken-fourpart');

            RecalculateLine('line-left-bot-3-frame' + aken_name, false, true, 'middle-frame-3-aken-fourpart');
            RecalculateLine('line-right-top-3-frame' + aken_name, true, false, 'middle-frame-3-aken-fourpart');
            RecalculateLine('line-right-bot-3-frame' + aken_name, true, true, 'middle-frame-3-aken-fourpart');

            RecalculateLine('line-left-bot-4-frame' + aken_name, false, true, 'middle-frame-4-aken-fourpart');
            RecalculateLine('line-right-top-4-frame' + aken_name, true, false, 'middle-frame-4-aken-fourpart');
            RecalculateLine('line-right-bot-4-frame' + aken_name, true, true, 'middle-frame-4-aken-fourpart');
            break;
    }
}

function RecalculateLine(LineID, RecX, RecY, aken_name) {
    RecX = RecX || false;
    RecY = RecY || false;
    var additionPadding = 0;
    if (aken_name == 'middle-frame-1-aken-onepart' || aken_name == 'middle-frame-1-aken-balconydoorhalfglass' || aken_name == 'middle-frame-1-aken-balconydoor') {
        additionPadding = 14;
        aken_name = aken_name.replace('middle-frame-1', '');
    }
    var SVGWidth = document.getElementById('second_step').querySelector('#' + aken_name).getAttribute('width') - additionPadding;
    var SVGHeight = document.getElementById('second_step').querySelector('#' + aken_name).getAttribute('height') - additionPadding;

    var LineWidth = document.getElementById('second_step').querySelector('#' + LineID).getAttribute('width');
    var LineHeight = document.getElementById('second_step').querySelector('#' + LineID).getAttribute('height');

    if (RecX == true)
        document.getElementById('second_step').querySelector('#' + LineID).setAttribute("x", SVGWidth - LineWidth);
    if (RecY == true)
        document.getElementById('second_step').querySelector('#' + LineID).setAttribute("y", SVGHeight - LineHeight);
}

function DrawOpening(aken_name, selected_type, selected_val) {

    if (aken_name == "uheosaline")
        aken_name = "-aken-onepart";
    else if (aken_name == "kaheosaline")
        aken_name = "-aken-twopart";
    else if (aken_name == "kolmeosaline")
        aken_name = "-aken-threepart";
    else if (aken_name == "neljaosaline")
        aken_name = "-aken-fourpart";
    else if (aken_name == "ule-allall")
        aken_name = "-aken-1up2down";
    else if (aken_name == "rodu-taisklaas")
        aken_name = "-aken-balconydoor";
    else if (aken_name == "rodu-poolklaas")
        aken_name = "-aken-balconydoorhalfglass";

    if (selected_type == 'full-window-opening') {
        if (document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name) != null) {
            document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).setAttribute("opacity", selected_val == "Non-open" ? "0" : 1);
            RecalculateOpening('open-middle-frame-1', aken_name, 'middle-frame-1' + aken_name, 15, selected_val, 3, 12, 3, 5);
        }
    } else if (selected_type == '1-frame-opening') {
        document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).setAttribute("opacity", selected_val == "Non-open" ? "0" : 1);
        RecalculateOpening('open-middle-frame-1', aken_name, 'middle-frame-1' + aken_name, ((aken_name == '-aken-fourpart' || aken_name == '-aken-threepart') ? 10 : 15), selected_val, (aken_name == '-aken-fourpart' ? 2 : 3), (aken_name == '-aken-fourpart' ? 9 : 12), (aken_name == '-aken-fourpart' ? 3 : 5), (aken_name == '-aken-fourpart' ? 3.5 : (aken_name == '-aken-threepart' ? 4 : 5)));
    } else if (selected_type == '2-frame-opening') {
        document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).setAttribute("opacity", selected_val == "Non-open" ? "0" : 1);
        RecalculateOpening('open-middle-frame-2', aken_name, 'middle-frame-2' + aken_name, ((aken_name == '-aken-fourpart' || aken_name == '-aken-threepart') ? 10 : 15), selected_val, (aken_name == '-aken-fourpart' ? 2 : 3), (aken_name == '-aken-fourpart' ? 9 : 12), (aken_name == '-aken-fourpart' ? 3 : 5), (aken_name == '-aken-fourpart' ? 3.5 : (aken_name == '-aken-threepart' ? 4 : 5)));
    } else if (selected_type == '3-frame-opening') {
        document.getElementById('second_step').querySelector('#middle-frame-3' + aken_name).setAttribute("opacity", selected_val == "Non-open" ? "0" : 1);
        RecalculateOpening('open-middle-frame-3', aken_name, 'middle-frame-3' + aken_name, ((aken_name == '-aken-fourpart' || aken_name == '-aken-threepart') ? 10 : 15), selected_val, (aken_name == '-aken-fourpart' ? 2 : 3), (aken_name == '-aken-fourpart' ? 9 : 12), (aken_name == '-aken-fourpart' ? 3 : 5), (aken_name == '-aken-fourpart' ? 3.5 : (aken_name == '-aken-threepart' ? 4 : 5)));
    } else if (selected_type == '4-frame-opening') {
        document.getElementById('second_step').querySelector('#middle-frame-4' + aken_name).setAttribute("opacity", selected_val == "Non-open" ? "0" : 1);
        RecalculateOpening('open-middle-frame-4', aken_name, 'middle-frame-4' + aken_name, ((aken_name == '-aken-fourpart' || aken_name == '-aken-threepart') ? 10 : 15), selected_val, (aken_name == '-aken-fourpart' ? 2 : 3), (aken_name == '-aken-fourpart' ? 9 : 12), (aken_name == '-aken-fourpart' ? 3 : 5), (aken_name == '-aken-fourpart' ? 3.5 : (aken_name == '-aken-threepart' ? 4 : 5)));
    } else if (selected_type == 'top-frame-opening') {
        document.getElementById('second_step').querySelector('#top-frame' + aken_name).setAttribute("opacity", selected_val == "Non-open" ? "0" : 1);
        RecalculateOpening('open-top-frame', aken_name, 'top-frame' + aken_name, 15, selected_val, 3, 12, 3, 5);
    }
}

function SaveProportionsForNonopen(aken_name) {

    if (aken_name == '-aken-twopart') {
        orig_first_width = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).getAttribute("width");
        orig_sec_width = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).getAttribute("width");
        orig_sec_x = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).getAttribute("x");
        document.getElementById('second_step').querySelector('#middle-frame-1-nonopen' + aken_name).setAttribute("width", orig_first_width - 12);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("width", orig_sec_width - 12);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("x", orig_sec_x - 9);
    }

    if (aken_name == '-aken-threepart') {
        orig_first_width = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).getAttribute("width");
        orig_sec_width = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).getAttribute("width");
        orig_third_width = document.getElementById('second_step').querySelector('#middle-frame-3' + aken_name).getAttribute("width");
        orig_sec_x = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).getAttribute("x");
        orig_third_x = document.getElementById('second_step').querySelector('#middle-frame-3' + aken_name).getAttribute("x");
        document.getElementById('second_step').querySelector('#middle-frame-1-nonopen' + aken_name).setAttribute("width", orig_first_width - 10);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("width", orig_sec_width - 10);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("x", orig_sec_x - 9);
        document.getElementById('second_step').querySelector('#middle-frame-3-nonopen' + aken_name).setAttribute("width", orig_third_width - 12);
        document.getElementById('second_step').querySelector('#middle-frame-3-nonopen' + aken_name).setAttribute("x", orig_third_x - 10);
    }

    if (aken_name == '-aken-fourpart') {
        orig_first_width = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).getAttribute("width");
        orig_sec_width = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).getAttribute("width");
        orig_third_width = document.getElementById('second_step').querySelector('#middle-frame-3' + aken_name).getAttribute("width");
        orig_four_width = document.getElementById('second_step').querySelector('#middle-frame-4' + aken_name).getAttribute("width");
        orig_sec_x = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).getAttribute("x");
        orig_third_x = document.getElementById('second_step').querySelector('#middle-frame-3' + aken_name).getAttribute("x");
        orig_four_x = document.getElementById('second_step').querySelector('#middle-frame-4' + aken_name).getAttribute("x");
        document.getElementById('second_step').querySelector('#middle-frame-1-nonopen' + aken_name).setAttribute("width", orig_first_width - 9);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("width", orig_sec_width - 9);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("x", orig_sec_x - 9);
        document.getElementById('second_step').querySelector('#middle-frame-3-nonopen' + aken_name).setAttribute("width", orig_third_width - 8);
        document.getElementById('second_step').querySelector('#middle-frame-3-nonopen' + aken_name).setAttribute("x", orig_third_x - 11);
        document.getElementById('second_step').querySelector('#middle-frame-4-nonopen' + aken_name).setAttribute("width", orig_four_width - 10);
        document.getElementById('second_step').querySelector('#middle-frame-4-nonopen' + aken_name).setAttribute("x", orig_four_x - 12);
    }

    if (aken_name == '-aken-1up2down') {
        orig_first_width = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).getAttribute("width");
        orig_first_height = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).getAttribute("height");
        orig_sec_width = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).getAttribute("width");
        orig_third_height = document.getElementById('second_step').querySelector('#top-frame' + aken_name).getAttribute("height");

        orig_fir_y = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).getAttribute("y");

        orig_sec_x = document.getElementById('second_step').querySelector('#middle-frame-2' + aken_name).getAttribute("x");

        document.getElementById('second_step').querySelector('#middle-frame-1-nonopen' + aken_name).setAttribute("width", orig_first_width - 13);
        document.getElementById('second_step').querySelector('#middle-frame-1-nonopen' + aken_name).setAttribute("height", orig_first_height - 7);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("width", orig_sec_width - 13);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("height", orig_first_height - 7);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("x", orig_sec_x - 8);
        document.getElementById('second_step').querySelector('#middle-frame-2-nonopen' + aken_name).setAttribute("y", orig_fir_y - 4);
        document.getElementById('second_step').querySelector('#middle-frame-1-nonopen' + aken_name).setAttribute("y", orig_fir_y - 4);
        document.getElementById('second_step').querySelector('#middle-frame-top-nonopen' + aken_name).setAttribute("height", orig_third_height - 7);

    }

    if (aken_name == '-aken-onepart' || aken_name == "-aken-balconydoor" || aken_name == "-aken-balconydoorhalfglass") {
        orig_first_width = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).getAttribute("width");
        orig_first_height = document.getElementById('second_step').querySelector('#middle-frame-1' + aken_name).getAttribute("height");
        document.getElementById('second_step').querySelector('#middle-frame-1-nonopen' + aken_name).setAttribute("width", orig_first_width - 14);

        x = document.getElementById('second_step').querySelectorAll('.middle-frame-1' + aken_name);
        for (i = 0; i < x.length; i++) {
            x[i].setAttribute("height", orig_first_height);
            x[i].setAttribute("width", orig_first_width);
        }
    }
}

function RecalculateOpening(opName, aken_name, svg_name, padding_opening, type, leftPadding, RightPadding, TopPadding, TopLeftPadding) {
    if (document.getElementById('second_step').querySelector('#' + svg_name) == null || document.getElementById('second_step').querySelector('#' + svg_name) == null)
        return;

    var StrokeSize = aken_name == "-aken-fourpart" ? 20 : (opName == "open" ? 31 : (aken_name == "-aken-threepart" ? 20 : 30));
    var linesOpacity = 1;
    var LineSize = 22;
    if (type == "Non-open") {
        StrokeSize = opName == "open" ? 31 : 3;
        linesOpacity = 0;
        LineSize = 8;
    }

    var lines = document.querySelectorAll('#' + svg_name + ' ' + 'svg[id^="line-"]');
    for (i = 0; i < lines.length; i++)
        lines[i].querySelector("line").setAttribute("opacity", linesOpacity);

    x = document.getElementById('second_step').querySelectorAll('#' + svg_name + ' ' + '.' + svg_name);
    for (i = 0; i < x.length; i++)
        x[i].setAttribute("stroke-width", StrokeSize);

    var SVGWidth = document.getElementById('second_step').querySelector('#' + svg_name).getAttribute('width');
    var SVGHeight = document.getElementById('second_step').querySelector('#' + svg_name).getAttribute('height');
    var OPpoints = "";
    var SpecSVG_name = (svg_name.charAt(0) == "-" ? svg_name.substring(1, svg_name.length) : svg_name);

    if (type == "Left-side") {
        OPpoints = String(SVGWidth - padding_opening) + "," + padding_opening + " ";
        OPpoints += padding_opening + "," + String(SVGHeight / 2) + " ";
        OPpoints += String(SVGWidth - padding_opening) + "," + String(SVGHeight - padding_opening);
    }

    if (type == "Right-side") {
        OPpoints = padding_opening + "," + padding_opening + " ";
        OPpoints += String(SVGWidth - padding_opening) + "," + String(SVGHeight / 2) + " ";
        OPpoints += padding_opening + "," + String(SVGHeight - padding_opening);
    }

    if (type == "Upward") {
        OPpoints = padding_opening + "," + String(SVGHeight - padding_opening) + " ";
        OPpoints += String(SVGWidth / 2) + "," + padding_opening + " ";
        OPpoints += String(SVGWidth - padding_opening) + "," + String(SVGHeight - padding_opening);

        document.getElementById('second_step').querySelector('#handle-' + SpecSVG_name).setAttribute('x', (SVGWidth / 2) - TopLeftPadding);
        document.getElementById('second_step').querySelector('#handle-' + SpecSVG_name).setAttribute('y', TopPadding);
    }

    if (type == "Left-top") {
        OPpoints = String(SVGWidth - padding_opening) + "," + padding_opening + " ";
        OPpoints += padding_opening + "," + String(SVGHeight / 2) + " ";
        OPpoints += String(SVGWidth - padding_opening) + "," + String(SVGHeight - padding_opening) + " ";
        OPpoints += String(SVGWidth - padding_opening) + "," + String(SVGHeight - padding_opening) + " ";
        OPpoints += String(SVGWidth / 2) + "," + padding_opening + " ";
        OPpoints += padding_opening + "," + String(SVGHeight - padding_opening) + " ";
    }

    if (type == "Right-top") {
        OPpoints = padding_opening + "," + padding_opening + " ";
        OPpoints += String(SVGWidth - padding_opening) + "," + String(SVGHeight / 2) + " ";
        OPpoints += padding_opening + "," + String(SVGHeight - padding_opening) + " ";
        OPpoints += padding_opening + "," + String(SVGHeight - padding_opening) + " ";
        OPpoints += String(SVGWidth / 2) + "," + padding_opening + " ";
        OPpoints += String(SVGWidth - padding_opening) + "," + String(SVGHeight - padding_opening);
    }

    if (document.getElementById('second_step').querySelector('#handle-' + SpecSVG_name) == null)
        return;

    if (type == "Left-side" || type == "Left-top") {
        document.getElementById('second_step').querySelector('#handle-' + SpecSVG_name).setAttribute('x', leftPadding);
        document.getElementById('second_step').querySelector('#handle-' + SpecSVG_name).setAttribute('y', (SVGHeight / 2) - 10);
    } else if (type == "Right-top" || type == "Right-side") {
        document.getElementById('second_step').querySelector('#handle-' + SpecSVG_name).setAttribute('x', (SVGWidth - RightPadding));
        document.getElementById('second_step').querySelector('#handle-' + SpecSVG_name).setAttribute('y', (SVGHeight / 2) - 10);
    }

    if (document.getElementById('second_step').querySelector('#' + opName + aken_name) == null)
        return;
    document.getElementById('second_step').querySelector('#' + opName + aken_name).setAttribute('points', OPpoints);
    document.getElementById('second_step').querySelector('#' + opName + aken_name).setAttribute('opacity', (type == "Non-open" ? 0 : 1));

    document.getElementById('second_step').getElementsByClassName('handle-' + SpecSVG_name)[0].setAttribute('opacity', (type == "Non-open" ? 0 : 1));
    document.getElementById('second_step').getElementsByClassName('handle-' + SpecSVG_name)[1].setAttribute('opacity', (type == "Non-open" ? 0 : 1));
    document.getElementById('second_step').querySelector('#handle-' + SpecSVG_name).setAttribute('opacity', (type == "Non-open" ? 0 : 1));
}

function CallToRecalculate(aken_name) {
    switch (aken_name) {
        case "-aken-onepart":
            SelectAva(document.getElementById('second_step').querySelector('#akna-avatavus'));
            break;
        case "-aken-1up2down":
            SelectAva(document.getElementById('second_step').querySelector('#ule-jaotuse-avatus'));
            SelectAva(document.getElementById('second_step').querySelector('[id="1-jaotuse-avatus"]'));
            SelectAva(document.getElementById('second_step').querySelector('[id="2-jaotuse-avatus"]'));
            break;
        case "-aken-fourpart":
            SelectAva(document.getElementById('second_step').querySelector('[id="4-jaotuse-avatus"]'));
        case "-aken-threepart":
            SelectAva(document.getElementById('second_step').querySelector('[id="3-jaotuse-avatus"]'));
        case "-aken-twopart":
            SelectAva(document.getElementById('second_step').querySelector('[id="1-jaotuse-avatus"]'));
            SelectAva(document.getElementById('second_step').querySelector('[id="2-jaotuse-avatus"]'));
            break;
        case "-aken-balconydoor":
        case "-aken-balconydoorhalfglass":
            SelectAva(document.getElementById('second_step').querySelector('#ukse-avatus'));
            break;
    }
}