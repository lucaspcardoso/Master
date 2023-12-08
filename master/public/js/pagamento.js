// Função para animação de retirada
function animateRetirada() {
    var block1 = document.getElementById("endBlock1");
    var block2 = document.getElementById("endBlock2");
    gsap.to("#endBlock1", {
        x: "0%",
        opacity: 1,
        duration: 0,
        onComplete: () => {
            block1.classList.add("none");
            block2.classList.remove("none");
            entrega.classList.remove("active");
            retirada.classList.add("active");
            empresa.innerHTML = "Pague no estabelecimento";
            gsap.from("#endBlock2", { x: "100%", duration: 0.5, opacity: 0 });
        },
    });
}

// Função para animação de entrega (o inverso de animateRetirada)
function animateEntrega() {
    var block1 = document.getElementById("endBlock1");
    var block2 = document.getElementById("endBlock2");
    gsap.to("#endBlock2", {
        x: "0%", // Altere para "0%" para garantir que volte à posição original
        opacity: 1,
        duration: 0,
        onComplete: () => {
            block2.classList.add("none");
            block1.classList.remove("none");
            retirada.classList.remove("active");
            entrega.classList.add("active");
            empresa.innerHTML = "Pague na entrega";
            gsap.from("#endBlock1", { x: "100%", duration: 0.5, opacity: 1 });
        },
    });
}

retirada.addEventListener("click", animateRetirada);
entrega.addEventListener("click", animateEntrega);

// Função para animação de empresa
function animateEmpresa() {
    var block1 = document.getElementById("metodoBlock1");
    var block2 = document.getElementById("metodoBlock2");
    gsap.to("#metodoBlock1", {
        x: "0%",
        opacity: 1,
        duration: 0,
        onComplete: () => {
            block1.classList.add("none");
            block2.classList.remove("none");
            site.classList.remove("active");
            empresa.classList.add("active");
            gsap.from("#metodoBlock2", {
                x: "100%",
                duration: 0.5,
                opacity: 1,
            });
        },
    });
}

// Função para animação de site (o inverso de animateEmpresa)
function animateSite() {
    var block1 = document.getElementById("metodoBlock1");
    var block2 = document.getElementById("metodoBlock2");
    gsap.to("#metodoBlock2", {
        x: "0%",
        opacity: 1,
        duration: 0,
        onComplete: () => {
            block2.classList.add("none");
            block1.classList.remove("none");
            empresa.classList.remove("active");
            site.classList.add("active");
            gsap.from("#metodoBlock1", {
                x: "100%",
                duration: 0.5,
                opacity: 1,
            });
        },
    });
}

empresa.addEventListener("click", animateEmpresa);
site.addEventListener("click", animateSite);
