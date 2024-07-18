console.log("Script is running");

document.addEventListener("DOMContentLoaded", function () {
    var headerContainer = document.querySelector(".header-container");

    if (headerContainer) {
        var initialOffset = headerContainer.offsetTop;

        window.addEventListener("scroll", function () {
            if (window.scrollY > initialOffset) {
                headerContainer.classList.add("scrolled");           
                headerContainer.style.backgroundColor = "#BC7FCD";
            } else {
                headerContainer.classList.remove("scrolled");
                headerContainer.style.backgroundColor = "";
            }
        });
    }
});

