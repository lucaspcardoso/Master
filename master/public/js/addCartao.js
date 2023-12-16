var db = document.getElementById("db");
var cr = document.getElementById("cr");
var vR = document.getElementById("vr");
var vA = document.getElementById("va");

var back = document.getElementById("back");

var saidaNcartao = document.getElementById("outNcartao");
var saidaName = document.getElementById("outName");
var saidaValidade = document.getElementById("outValidade");
var type = document.getElementById("type");

function nextStage(text) {
    var block1 = document.querySelector(".block1");
    var block2 = document.querySelector(".block2");
    var texto = document.getElementById("text");
    var cardTitle = document.getElementById("titleCard");
    gsap.to(".block1", {
        x: "0%",
        opacity: 1,
        duration: 0,
        onComplete: () => {
            block1.classList.add("none");
            block2.classList.remove("none");
            texto.innerHTML = text;
            cardTitle.innerHTML = text;
            type.value = text;
            gsap.from(".block2", {
                x: "100%",
                duration: 0.5,
                opacity: 1,
            });
        },
    });
}

var inputs = document.querySelectorAll(".containerForm input");

function backStage() {
    var block1 = document.querySelector(".block1");
    var block2 = document.querySelector(".block2");
    inputs.forEach((input) => {
        input.value = "";
    });
    saidaName.innerHTML = "Nome impresso no cartão";
    saidaNcartao.innerHTML = "0000 0000 0000 0000";
    saidaValidade.innerHTML = "MM/AA";

    gsap.to(".block2", {
        x: "0%",
        opacity: 1,
        duration: 0,
        onComplete: () => {
            block2.classList.add("none");
            block1.classList.remove("none");
            gsap.from(".block1", {
                x: "100%",
                duration: 0.5,
                opacity: 1,
            });
        },
    });
}

db.addEventListener("click", () => nextStage("Débito"));
cr.addEventListener("click", () => nextStage("Crédito"));
vR.addEventListener("click", () => nextStage("Vale-Refeição"));
vA.addEventListener("click", () => nextStage("Vale-Alimentação"));

back.addEventListener("click", backStage);

var nCartao = document.getElementById("nCartao");
var nome = document.getElementById("name");
var validade = document.getElementById("validade");
var cpf = document.getElementById("cpf");

var bandeira = document.getElementById("bandeira");

cpf.addEventListener("input", () => {
    cpf.value = cpf.value.replace(
        /(\d{3})(\d{3})(\d{3})(\d{2})/,
        "$1.$2.$3-$4"
    );
});

nCartao.addEventListener("input", () => {
    nCartao.value = nCartao.value.replace(
        /(\d{4})(\d{4})(\d{4})(\d{4})/,
        "$1 $2 $3 $4"
    );

    pDigito = nCartao.value[0];

    if (pDigito == 3) {
        bandeira.value = "American Express";
    } else if (pDigito == 4) {
        bandeira.value = "Visa";
    } else if (pDigito == 5) {
        bandeira.value = "Mastercard";
    } else if (pDigito == 6) {
        bandeira.value = "Discover";
    } else {
        bandeira.value = "";
    }

    saidaNcartao.innerHTML = nCartao.value.replace(
        /(\d{4})(\d{4})(\d{4})(\d{4})/,
        "$1 $2 $3 $4"
    );
});

nome.addEventListener("input", () => {
    saidaName.innerHTML = nome.value;
});

validade.addEventListener("input", () => {
    validade.value = validade.value.replace(/(\d{2})(\d{2})/, "$1/$2");
    saidaValidade.innerHTML = validade.value.replace(/(\d{2})(\d{2})/, "$1/$2");
});

if (document.getElementById("popup")) {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    var btnFechar = document.getElementById("btnFechar");

    popup.style.display = "flex";
    overlay.style.display = "flex";

    function closePopup() {
        popup.style.display = "none";
        overlay.style.display = "none";
    }

    btnFechar.addEventListener("click", closePopup);
}
