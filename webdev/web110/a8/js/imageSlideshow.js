var i = 0;
var imgTime = 2500;
var imgArray = ['imgs/2.jpg', 'imgs/3.jpg'];

function slideShow() {
    document.getElementById('showcaseImage_1').src = imgArray[i];
    i++;

    if (i == imgArray.length)
        i = 0;

    setTimeout("slideShow()", imgTime);
}
slideShow();