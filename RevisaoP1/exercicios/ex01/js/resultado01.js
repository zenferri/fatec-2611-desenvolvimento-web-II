/* Função Gerar Resultado */
function gerarResultado() {
    // 1. Capturar dados do formulário
    let nomecompleto = document.getElementById("nomecompleto").value;
    let email = document.getElementById("email").value;
    let telefone = document.getElementById("telefone").value;
    let idade = document.getElementById("idade").value;
    
    let resposta = "";
    // 2. Montagem da string de resposta.
    resposta = `${nomecompleto} tem ${idade} anos. Seu email: ${email} e telefone: ${telefone}`;
    
    // 3. Resposta com innerText.
    document.getElementById("resultado").innerText = resposta;
    // 4. Resposta com innerHTML.
    document.getElementById("resultado1").innerHTML = "<strong>" + resposta + "</strong>";
    // 5. Resposta com textContent.
    document.getElementById("resultado2").textContent = resposta;
}

/* Função limpar dados do formulário. */
function limparDados() {
    document.getElementById("ex01").reset();
    document.getElementById("resultado").innerText = "";
    document.getElementById("resultado1").innerHTML = "";
    document.getElementById("resultado1").textContent = "";
}