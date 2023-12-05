document.addEventListener("DOMContentLoaded", function () {
    var openPopupButtons = document.querySelectorAll(".btnOpenPopup");

    openPopupButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            var postId = button.getAttribute("data-post-id");
            openPopup(postId);
        });
    });

    function openPopup(postId) {
        var popup = document.getElementById("popup");
        var overlay = document.getElementById("overlay");
        var continueButton = document.getElementById("continue");
        var cancelButton = document.getElementById("cancel");
        var formPopUp = document.getElementById("formPopUp");

        formPopUp.action = "/remove-to-cart/" + postId;
        overlay.style.display = "block";
        popup.style.display = "flex";

        continueButton.addEventListener("click", function () {
            overlay.style.display = "none";
            popup.style.display = "none";
        });

        cancelButton.addEventListener("click", function () {
            overlay.style.display = "none";
            popup.style.display = "none";
        });
    }
});
