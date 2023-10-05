function abrirModal(imagem, nome, preco) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("imagemModal");
    var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = imagem;
    captionText.innerHTML = "<h3>" + nome + "</h3><p>" + preco + "</p>";

    var span = document.getElementsByClassName("fechar")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }
}

function mostrarDetalhes(nome, descricao, preco, imagem) {
    document.write(`
        <div class="modal-pdt"><div class="modal-img-catl"><img src="${imagem}" alt="${nome}"></div><div class="modal-content"><h2>${nome}</h2><p>${descricao}</p><p>${preco}</p></div></div>`
        );
}

function esconderDetalhes(id) {
    var detalhes = document.getElementById(id);
    detalhes.style.display = "none";
}
    
