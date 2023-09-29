

var modal = document.getElementById('myModal');
    var btn = document.getElementsByClassName("produto");
    var span = document.getElementsByClassName("close")[0];

    // Abre a modal quando o botão é clicado
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Fecha a modal quando o 'x' é clicado
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Fecha a modal quando se clica fora dela
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
