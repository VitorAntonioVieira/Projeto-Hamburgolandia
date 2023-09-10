// import swal from 'sweetalert';

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

// function alertaErro(){
//     // swal({
//     //     title: "Erro!",
//     //     text: "Usuário, email ou senha inválidos",
//     //     icon: "success",
//     //   });
//     alert('Dados incorretos');
// }

//document.getElementByClassName('produto').onclick = function abrir() {
//modal.showModal()
//}
//document.getElementsByClassName('adicionar').onclick= function adicionar(){
//    modal.close()
//}
