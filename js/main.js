var modal = document.querySelector('.modal');
var modalID = document.querySelector('#id-modal');
var modalIMG = document.querySelector('#mdlIMG');
var modalTlt = document.querySelector('#modal-title');
var modalDesc = document.querySelector('#modal-desc');
var modalPreco = document.querySelector('#modal-preco');
var modalObs = document.querySelector('#observacao-modal');

document.getElementsByClassName('modal').style.display = 'none';

function mostrarDetalhes(id, nome, descricao, preco, imagem) {
    modalID.textContent = id;
    modalIMG.src = imagem;
    modalTlt.textContent = nome
    modalDesc.textContent = descricao;
    modalPreco.textContent = 'R$'+Number(preco).toFixed(2);
    modalIMG.src = imagem;
    modal.style.display = "block";
}
naoMostrarDetalhes();

var span = document.getElementsByClassName("close")[0];

span.onclick = function () {
    modal.style.display = "none";
    modalObs.value = null;
}

// Fecha a modal quando se clica fora dela
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
        modalObs.value = null;
    }
}

var cartItens = [];

function addToCart(nome, preco, observacao) {
    pr = parseInt(preco.match(/\d\./g).join(''));

    if (observacao != null){
        cartItens.push({nome: nome, preco: pr, observacao: observacao});
    }
    console.log(cartItens);
    modal.style.display = "none";
    modalObs.value = null;
}
function openCartModal1() {
    updateCartUI();
    document.getElementById('cartModal1').style.display = 'block';
}

// Função para fechar o modal
function closeCartModal1() {
    document.getElementById('cartModal1').style.display = 'none';
}

document.getElementById('cartModal1').style.display = 'none';


function menu(){

console.log("testeS")
if(document.getElementById("encaminhamentos").style.display=="block"){

    document.getElementById("encaminhamentos").style.display="none"
}else{
    document.getElementById("encaminhamentos").style.display="block"

}
}