document.addEventListener('DOMContentLoaded', function () {
    const slider1 = document.querySelector("#image1Control");
    const slider2 = document.querySelector("#image2Control");


    slider1.addEventListener("input", function () {
        let fimage = document.getElementById("first-image");
        let ftext = document.getElementById("image1Opacity");
        fimage.style.opacity = slider1.value;
        ftext.value = slider1.value;
    })
    slider2.addEventListener("input", function () {
        let simage = document.getElementById("second-image");
        let stext = document.getElementById("image2Opacity");
        simage.style.opacity = slider2.value;
        stext.value = slider2.value;
    })

});