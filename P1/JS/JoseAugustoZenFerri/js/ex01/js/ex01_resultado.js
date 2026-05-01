// Lê as notas informadas, faz os cálculos e mostra os resultados na página.
function calcularMedia() {
    // Number(...) converte o conteúdo dos inputs para tipo numérico.
    let nota1 = Number(document.getElementById("nota1").value);
    let nota2 = Number(document.getElementById("nota2").value);
    let nota3 = Number(document.getElementById("nota3").value);
    let nota4 = Number(document.getElementById("nota4").value);
    let nota5 = Number(document.getElementById("nota5").value);

    // Calcula a média final com base nas 5 notas informadas.
    let media = (nota1 + nota2 + nota3 + nota4 + nota5) / 5;

    // Monta a resposta completa do exercício com as notas lançadas e a média.
    let resposta = `Notas informadas: ${nota1}, ${nota2}, ${nota3}, ${nota4}, ${nota5}. Média final: ${media}`;

    // Exibe a mesma resposta usando três propriedades diferentes.
    document.getElementById("resultado").innerText = resposta;
    document.getElementById("resultado1").innerHTML = `<strong>${resposta}</strong>`;
    document.getElementById("resultado2").textContent = resposta;

    // Também registra o resultado no console do navegador.
    console.log(resposta);
}

// Limpa os campos do formulário e apaga os resultados exibidos.
function limparCampos() {
    document.getElementById("ex01").reset();
    document.getElementById("resultado").innerText = "";
    document.getElementById("resultado1").innerHTML = "";
    document.getElementById("resultado2").textContent = "";
}