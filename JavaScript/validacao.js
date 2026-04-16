
// Função para validar se foram inseridos dados antes de enviálos

function validar(){

    let nome = document.getElementById("idnome").value
    let email = document.getElementById("idemail").value

    if (nome === "" || email === "") {
        alert("Insira os Dados nos Campos Corretamente!!");
    }
    else{
        alert("Dados corretos.")
    }

}