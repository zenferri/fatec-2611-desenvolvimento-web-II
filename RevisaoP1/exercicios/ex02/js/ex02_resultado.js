// Lê os valores informados, faz os cálculos e mostra os resultados na página.
function gerarResultado() {
    // Number(...) converte o conteúdo dos inputs para tipo numérico.
    let numero1 = Number(document.getElementById("numero1").value);
    let numero2 = Number(document.getElementById("numero2").value);

    // Operações matemáticas básicas com os 2 números digitados.
    let resultado = numero1 + numero2;
    let resultado1 = numero1 - numero2;
    let resultado2 = numero1 * numero2;
    let resultado3 = numero1 / numero2;

    // Monta a resposta completa do exercício.
    let resposta = `Soma: ${resultado}, Subtração: ${resultado1}, Multiplicação: ${resultado2}, Divisão: ${resultado3}`;

    // Exibe a mesma resposta usando três propriedades diferentes.
    document.getElementById("resultado").innerText = resposta;
    document.getElementById("resultado1").innerHTML = `<strong>${resposta}</strong>`;
    document.getElementById("resultado2").textContent = resposta;
}

// Limpa os campos do formulário e apaga os resultados exibidos.
function limparDados() {
    document.getElementById("ex02").reset();
    document.getElementById("resultado").innerText = "";
    document.getElementById("resultado1").innerHTML = "";
    document.getElementById("resultado2").textContent = "";
}