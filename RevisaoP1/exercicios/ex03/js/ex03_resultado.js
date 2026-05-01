function gerarResultado() {
    let base = Number(document.getElementById("base").value);
    let altura = Number(document.getElementById("altura").value);
    let area = base * altura;
    let perimetro = 2 * (base + altura);

    let resposta = `A área do retângulo é ${area} e o perímetro é ${perimetro}`;

    document.getElementById("resultado").innerText = resposta;
    document.getElementById("resultado1").innerHTML = `<strong>${resposta}</strong>`;
    document.getElementById("resultado2").textContent = resposta;

}

function limparDados() {
    document.getElementById("ex03").reset();
    document.getElementById("resultado").innerText = "";
    document.getElementById("resultado1").innerHTML = "";
    document.getElementById("resultado2").textContent = "";
}

