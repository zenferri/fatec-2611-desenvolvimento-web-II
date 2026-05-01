function calcularMaiorMenor() {
    let numero1 = Number(document.getElementById("numero1").value);
    let numero2 = Number(document.getElementById("numero2").value);
    let numero3 = Number(document.getElementById("numero3").value);
    let numero4 = Number(document.getElementById("numero4").value);
    let maior = Math.max(numero1, numero2, numero3, numero4);
    let menor = Math.min(numero1, numero2, numero3, numero4);
    let resposta = `Maior número: ${maior}, Menor número: ${menor}`;
    document.getElementById("resultado").innerText = resposta;
    document.getElementById("resultado1").innerHTML = `<strong>${resposta}</strong>`;
    document.getElementById("resultado2").textContent = resposta;
}

// Limpa os campos do formulário e apaga os resultados exibidos.
function limparCampos() {
    document.getElementById("ex02").reset();
    document.getElementById("resultado").innerText = "";
    document.getElementById("resultado1").innerHTML = "";
    document.getElementById("resultado2").textContent = "";
}

