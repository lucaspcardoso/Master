const textStage = document.getElementById("textStage");
const btnAvancar = document.getElementById("btnAvancar");
const circle1 = document.querySelector(".circle1");
const circle2 = document.querySelector(".circle2");
const stage1 = document.querySelector(".block1");
const stage2 = document.querySelector(".block2");

textStage.innerHTML = "Etapa 1";
btnAvancar.addEventListener("click", () => {
    var nome = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("password").value;
    var Csenha = document.getElementById("passwordC").value;

    if (
        nome.trim() !== "" &&
        email.trim() !== "" &&
        senha.trim() !== "" &&
        Csenha.trim() !== ""
    ) {
        console.log("Todos os campos foram preenchidos.");
    } else {
        console.log("Preencha todos os campos.");
    }

    gsap.to(".block1", {
        x: "-100%",
        opacity: 1,
        duration: 0.5,
        onComplete: () => {
            stage1.classList.add("none");
            stage2.classList.remove("none");
            textStage.innerHTML = "Etapa 2";
            circle1.style.backgroundColor = "#528570";
            circle2.style.backgroundColor = "#002a19";
            gsap.from(".block2", { x: "100%", duration: 0.5, opacity: 0 });
        },
    });
});

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
