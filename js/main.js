// function esconderDetalhes(id) {
//     var detalhes = document.getElementById('mdl1');
//     detalhes.style.display = "none";
// }

// function contarCliques() {
//     contadorCliques++;
//     document.getElementById("contador").innerHTML = contadorCliques + " cliques";
// }

// function resetarContagem() {
//     contadorCliques = 0;
//     document.getElementById("contador").innerHTML = contadorCliques + " cliques";
// }

var modal = document.querySelector('.modal');
var modalIMG = document.querySelector('#mdlIMG');
var modalTlt = document.querySelector('#modal-title');
var modalDesc = document.querySelector('#modal-desc');
var modalPreco = document.querySelector('#modal-preco');

function mostrarDetalhes(nome, descricao, preco, imagem) {
    modalTlt.textContent = nome
    modalDesc.textContent = descricao;
    modalPreco.textContent = 'R$'+Number(preco).toFixed(2);
    modalIMG.src = imagem;
    modal.style.display = "block";
}
var btn = document.getElementsByClassName("openModal");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function () {
    modal.style.display = "block";
}

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
