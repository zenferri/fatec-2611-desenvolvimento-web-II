/* Leia uma nota e uma porcentagem de presença. Informe se o aluno
aprovou com nota maior ou superior a 6, se o aluno foi para a segunda época 
quando a nota é maior ou igual que 4 e menor que 6, ou se o aluno reprovou
nota inferior a 4. Entrada e saída de dados em HTML e JavaScript */

function gerarResultado() {
    let nota = Number(document.getElementById("nota").value);
    let presenca = Number(document.getElementById("presenca").value);
    let resultado = "";
    if (nota >= 6 && presenca >= 75) {
        resultado = `Aprovado com nota ${nota} e presença de ${presenca}%!`;
    } else if (nota >= 4 && presenca < 75) {
        resultado = `Aprovado na segunda época com nota ${nota} e presença ${presenca}%!`;
    } else {
        resultado = `Reprovado com nota ${nota} e presença ${presenca}%!`;
    }
    document.getElementById("resultado").innerText = resultado;
    document.getElementById("resultado1").innerHTML = `<strong>${resultado}</strong>`;
    document.getElementById("resultado2").textContent = resultado;
}

function limparDados() {
    document.getElementById("ex04").reset();
    document.getElementById("resultado").innerText = "";
    document.getElementById("resultado1").innerHTML = "";
    document.getElementById("resultado2").textContent = "";
}