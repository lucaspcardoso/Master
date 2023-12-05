// Variável para armazenar o último ID de post clicado
let lastClickedPostId;

function toggleCartItem(button) {
    var postId = button.getAttribute("data-post-id");
    var post = document.getElementById("post" + postId);
    var addToCartBtn = post.querySelector(".btnAddCarrinho");
    var removeFromCartBtn = createRemoveButton(postId);

    addToCartBtn.style.display = "none";
    removeFromCartBtn.style.display = "inline-block";

    // Armazena o ID do post clicado
    lastClickedPostId = postId;

    removeFromCartBtn.addEventListener("click", function () {
        showConfirmationModal(postId);
    });
}
function createRemoveButton(postId) {
    var post = document.getElementById("post" + postId);

    if (!post) {
        console.error("Post não encontrado para o ID " + postId);
        return null;
    }

    var containerBtn = post.querySelector(".containerBtn");

    if (!containerBtn) {
        console.error(
            "Container de botões não encontrado para o post " + postId
        );
        return null;
    }

    // Verifica se o botão de remover já existe
    var existingRemoveBtn = containerBtn.querySelector(".btnRemoveCarrinho");
    if (existingRemoveBtn) {
        return existingRemoveBtn; // Retorna o botão existente
    }

    var removeBtn = document.createElement("button");
    removeBtn.type = "button";
    removeBtn.className = "btnRemoveCarrinho";
    removeBtn.innerText = "Remover do Carrinho";
    removeBtn.style.display = "none";

    containerBtn.appendChild(removeBtn);

    return removeBtn;
}

function showConfirmationModal(postId) {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    if (popup && overlay) {
        popup.style.display = "flex";
        overlay.style.display = "block";

        document
            .getElementById("cancel")
            .addEventListener("click", function () {
                hideConfirmationModal();
            });

        document
            .getElementById("continue")
            .addEventListener("click", function () {
                // Adicione a lógica de adicionar ao carrinho aqui
                var post = document.getElementById("post" + lastClickedPostId);
                var addToCartBtn = post.querySelector(".btnAddCarrinho");
                var removeFromCartBtn =
                    post.querySelector(".btnRemoveCarrinho");

                addToCartBtn.style.display = "inline-block";
                removeFromCartBtn.style.display = "none";

                hideConfirmationModal();
            });
    }
}

function hideConfirmationModal() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    if (popup && overlay) {
        popup.style.display = "none";
        overlay.style.display = "none";
    }
}
