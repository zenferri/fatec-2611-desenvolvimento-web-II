/*
Arquivo
=> utilidades.js (arquivo com funções Javascript)
*/

// função para juntar nome e sobrenome

function juntarNome() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;

    // 1. Concatenação de string normal
    let nomecompleto = nome + ' ' + sobrenome;

    // 2. Template string
    let nomecompleto1 = `<i>${nome} <br>${sobrenome}</i>`;
    let nomecompleto2 = nomecompleto;

    document.getElementById("nomecompleto").innerText = nomecompleto;
    document.getElementById("nomecompleto1").innerHTML = nomecompleto1;
    document.getElementById("nomecompleto2").textContent = nomecompleto2;
}

function janelaNome() {

    let nome = prompt("Entre com seu nome:", "Carlos");
    let sobrenome = prompt("Entre com seu sobrenome:", "Oliveira");

    if (nome === null || sobrenome === null || nome === "" || sobrenome === "") {

        document.getElementById("resultado").innerHTML =
            "<strong>Nome e/ou sobrenome não foram informados!!!</strong>";

        console.log("Nome e/ou sobrenome vazios!");

    } else {

        let nomecompleto1 = `<i>${nome} <br>${sobrenome}</i>`;

        document.getElementById("nomecompleto1").innerHTML = nomecompleto1;

        console.log(nome + " " + sobrenome);
    }
}


// Função para escrever o nome completo na página

function escreverNome() {

    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;

    let resultado = "<strong>" + nome + " " + sobrenome + "</strong><br>";

    // document.writeln("<button id = 'voltar' onclick = 'location.reload()'>" + "<i class='fa-solid fa-arrow-left'></i> Voltar</button><br><br>");
    document.writeln("<button id='voltar' onclick='location.reload()'><i class='fa-solid fa-arrow-left'></i> Voltar</button><br><br>");
    document.getElementById("resultado").innerHTML = resultado;

}