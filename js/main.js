// Display button when javascript is enable and html page is loading
window.onload=function() {
    var el_moreAboutMeButton = document.getElementById("moreAboutMeButton");
    el_moreAboutMeButton.style.display = "block";
}

// Toggle more about me infomation display
function moreAboutMe() {
    var el_moreAboutMe = document.getElementById("moreAboutMe");
    if (el_moreAboutMe.style.display === "none") {
        el_moreAboutMe.style.display = "block";
    } else {
        el_moreAboutMe.style.display = "none";
    }
}