const decrementoButton = document.getElementById('decremento');
const incrementoButton = document.getElementById('incremento');
const contadorElement = document.getElementById('contador');

let contador = 0;

decrementoButton.addEventListener('click', () => {
    if (contador > 0) {
        contador--;
        contadorElement.textContent = contador;
    }
});

incrementoButton.addEventListener('click', () => {
    contador++;
    contadorElement.textContent = contador;
});
