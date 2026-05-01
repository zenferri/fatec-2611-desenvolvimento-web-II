function calcularContagem() {
    let menor = Number(document.getElementById("menor").value);
    let maior = Number(document.getElementById("maior").value);
    let resposta = "";
    for (let i = menor; i <= maior; i++) {
        resposta += `${i} `;
    }
    document.getElementById("resultado").innerText = resposta;
    document.getElementById("resultado1").innerHTML = `<strong>${resposta}</strong>`;
    document.getElementById("resultado2").textContent = resposta;
}

function limparCampos() {  
    document.getElementById("ex05").reset();
    document.getElementById("resultado").innerText = "";
    document.getElementById("resultado1").innerHTML = "";
    document.getElementById("resultado2").textContent = "";
}

