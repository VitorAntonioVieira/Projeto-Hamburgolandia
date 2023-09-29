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
    
