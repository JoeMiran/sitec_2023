function validarEntrada(event) {
    const usuario = document.querySelector('input[name="login"]').value;
    const senha = document.querySelector('input[name="senha"]').value;
    if (senha.length < 8 || usuario.length < 3) {
        event.preventDefault();
        const erroLogin = document.querySelector('.erro_login');
        erroLogin.innerHTML = "Login ou senha inválidos!";
    }
}