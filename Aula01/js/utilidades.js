/*
Arquivo
=> utilidades.js (arquivo com funções Javascript)
*/

// função para juntar nome e sobrenome

function juntarNome() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;

    // 1. Concatenação de string normal.
    let nomecompleto = nome + ' ' + sobrenome;

    // 2. Uso de interpolação strings (template strings)/
    let nomecompleto1 = `<i>${nome} <br>${sobrenome}</i>`;
    let nomecompleto2 = nomecompleto;

    // 3. Injetar texto da variável nomecompleto na tag <p> cujo id é "nomecompleto".

    document.getElementById("nomecompleto").innerText = nomecompleto;

    // 4. Injetar texto da variável nomecompleto1 na tag <p> cujo id é "nomecompleto1".

    document.getElementById("nomecompleto1").innerHTML = nomecompleto1;

    // 5. Injetar texto da variável nomecompleto2 na tag <p> cujo id é "nomecompleto2"
    document.getElementById("nomecompleto2").textContent = nomecompleto2;

}

function janelaNome() {
    let nome = prompt("Entre com seu nome: ", "Carlos");
    let sobrenome = prompt("Entre com seu sobrenome: ", "Oliveira");

    // Validação da entrada de dados do nome e sobrenome
    if (nome === null || sobrenome === null || nome === "" || sobrenome === "") {
        document.writeln("<p><strong>Nome e/ou sobrenome não foram informados!!!</strong></p>");
        //document.getElementById("nomecompleto1").innerHTML = "<p><strong>Nome e/ou sobrenome não foram informados!!!</strong></p>";
        console.log("Nome e/ou sobrenome vazios!")

    } else {
        // 2. Uso de interpolação strings (template strings)/
        let nomecompleto1 = `<i>${nome} <br>${sobrenome}</i>`;

        // Executar a injeção de tags (elementos HTML) + Textos
        document.getElementById('nomecompleto1').innerHTML = nomecompleto1
        console.log(nome + ' ' + sobrenome);
    }

}

// Função para escrever o nome completo na página web (document).
function escreverNome() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;
    let css = "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css'>";

    let resultado = "<strong>" + nome + " " + sobrenome + "</strong><br />";                     
    document.writeln(css);
    document.writeln(resultado);
    document.writeln("<button id='voltar' onclick='location.reload()'>" + "<i class='fa-solid fa-arrow-left'></i>Voltar</button>");
    
}

// Função para limpar o formulário de dados.
function limparDados() {
    // Exclui os valores contidos em nome e sobrenome (inputs).
    //document.getElementById("nome").value = "";
    //document.getElementById('sobrenome').value = "";
    
    // Exclui os valores contidos no formulário nomes (nome e sobrenome).
    document.getElementById("nomes").reset();

    // Limpar o parágrafo do nomecompleto e nomecompleto1.
    document.getElementById("nomecompleto").innerText = "";
    document.getElementById("nomecompleto1").innerHTML = "";
    document.getElementById("nomecompleto2").textContent = "";

    // Após limpar o formulário e limpar os parágrafos nomecompleto
    // e nomecompleto1, posicionar o cursor no foco do campo nome.
    ajustarFoco();
}

// Função para ajustar o foco no campo nome.
function ajustarFoco() {
    document.getElementById("nome").focus();
}

// Função para mostrar o log de saída de dados.
function mostrarLog(n,s) {
    console.log("Nome: " + n);
    console.log("Sobrenome: " + s);
    console.log("Nome Completo: " + n + " " + s);
}

// Função Alerta
function alerta() {
    window.alert("Enquanto não fechar esta janela, \nnão será mostrado o nome completo.");
}

