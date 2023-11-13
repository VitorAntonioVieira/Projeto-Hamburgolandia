document.addEventListener("DOMContentLoaded", function () {
    // Botão para abrir o modal
    var openModalBtn = document.getElementById("openModalBtn");
    // Modal
    var cartModal = document.getElementById("cartModal");
    // Botão para fechar o modal
    var closeModalBtn = document.getElementById("closeModalBtn");
    // Lista de itens do carrinho
    var cartItems = document.getElementById("cartItems");

    // Adicionar um item ao carrinho
    openModalBtn.addEventListener("click", function () {
        cartModal.style.display = "block";
        // Você pode adicionar itens ao carrinho aqui
    });

    // Fechar o modal
    closeModalBtn.addEventListener("click", function () {
        cartModal.style.display = "none";
    });

    // Fechar o modal se o usuário clicar fora dele
    window.addEventListener("click", function (event) {
        if (event.target == cartModal) {
            cartModal.style.display = "none";
        }
    });
});
