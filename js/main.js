// function esconderDetalhes(id) {
//     var detalhes = document.getElementById('mdl1');
//     detalhes.style.display = "none";
// }
    
function mostrarDetalhes (nome, descricao, preco, imagem){
    
}
var modal = document.getElementById('myModal');
    var btn = document.getElementsByClassName("openModal");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    // Fecha a modal quando se clica fora dela
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
