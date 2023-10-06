function mostrarDetalhes (nome, descricao, preco, imagem) {
    document.write(`
        <div class="modal-pdt" id="mdl1"><div class="modal-img-catl"><img src="${imagem}" alt="${nome}"></div><div class="modal-content"><h2>${nome}</h2><p>${descricao}</p><p>${preco}</p></div></div>`
        );
}

function esconderDetalhes(id) {
    var detalhes = document.getElementById('mdl1');
    detalhes.style.display = "none";
}
    
function mostrarDetalhes (nome, descricao, preco, imagem){
    
}