var modal = document.querySelector('.modal');
var modalID = document.querySelector('#id-modal');
var modalIMG = document.querySelector('#mdlIMG');
var modalTlt = document.querySelector('#modal-title');
var modalDesc = document.querySelector('#modal-desc');
var modalPreco = document.querySelector('#modal-preco');

function mostrarDetalhes(id, nome, descricao, preco, imagem) {
    modalID.value = id;
    modalIMG.src = imagem;
    modalTlt.textContent = nome
    modalDesc.textContent = descricao;
    modalPreco.textContent = 'R$'+Number(preco).toFixed(2);
    modalIMG.src = imagem;
    modal.style.display = "block";
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function () {
    modal.style.display = "none";
}

// Fecha a modal quando se clica fora dela
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var cartItens = [];

function addToCart(nome, preco) {
    cartItens.push({nomee: nome, precoo: preco})
    console.log(cartItens);
}
