document.addEventListener("DOMContentLoaded", function () {
    if (document.querySelector(".containerError")) {
        gsap.to(".containerError", {
            right: 10,
            duration: 1,
            ease: "power2.out",
        });
        const btnClose = document.getElementById("btnClose");
        btnClose.addEventListener("click", () => {
            if (document.querySelector(".containerError")) {
                gsap.to(".containerError", {
                    right: -300,
                    duration: 1,
                    ease: "power2.out",
                });
            }
        });
    }
});
