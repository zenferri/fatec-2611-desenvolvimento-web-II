function calcularPrimo() {
    let numero = Number(document.getElementById("numero").value);
    let resposta = numero % 2 === 0 ? "Primo" : "Não-primo";
    document.getElementById("resultado").innerText = resposta;
    document.getElementById("resultado1").innerHTML = `<strong>${resposta}</strong>`;
    document.getElementById("resultado2").textContent = resposta;
}

function limparCampos() {
    document.getElementById("ex04").reset();
    document.getElementById("resultado").innerText = "";
    document.getElementById("resultado1").innerHTML = "";
    document.getElementById("resultado2").textContent = "";
}
