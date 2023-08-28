class Item {
    constructor(tipo, imagem, nome, preco, descricao){
        this.tipo = tipo;
        this.imagem = imagem;
        this.nome = nome;
        this.preco = preco;
        this.descricao = descricao;
    }

    abrirModal(){
       
    }
}

let it = document.querySelector('#box');
        
it.addEventListener("click", () => {
    it.style.display = "none";
});
