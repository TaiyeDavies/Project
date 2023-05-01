document.addEventListener('DOMContentLoaded', function () {
    const list = document.querySelectorAll("#background-image");
    for (let item of list) {
        item.addEventListener("click", function () {
            item.classList.toggle('shadow');
            console.log("Button was pressed");
        });
    }

});