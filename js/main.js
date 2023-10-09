function mostrarDetalhes (nome, descricao, preco, imagem) {
    document.write(`
        <div class="modal-pdt" id="mdl1"><div class="modal-img-catl"><img src="${imagem}" alt="${nome}"></div><div class="modal-content"><h2>${nome}</h2><p>${descricao}</p><p>${preco}</p></div></div>`
        );
}

function modal (nome, descricao, preco, imagem) {
    document.write(`
        <div class="modal-pdt" id="mdl1"><div class="modal-img-catl"><img src="${imagem}" alt="${nome}"></div><div class="modal-content"><h2>${nome}</h2><p>${descricao}</p><p>${preco}</p> <button style="width: 50px; height: 150px;"  onclick="resetarContagem()">Reset</button> <p id="contador">0 cliques</p> <button style="width: 50px; height: 150px;"  onclick="contarCliques()">Clique aqui</button>
        `);
}

function contarCliques() {
    contadorCliques++;
    document.getElementById("contador").innerHTML = contadorCliques + " cliques";
}

function resetarContagem() {
    contadorCliques = 0;
    document.getElementById("contador").innerHTML = contadorCliques + " cliques";
}