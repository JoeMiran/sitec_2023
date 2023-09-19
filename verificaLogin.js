
function consultarConta(event) {

    const usuario = document.querySelector('input[name="usuario"]').value;
    const senha = document.querySelector('input[name="senha"]').value;

        event.preventDefault();
    if (senha.length < 8 || usuario.length < 3) {

        const erroLogin = document.querySelector('.erro_login');
        erroLogin.innerHTML = "Usuário ou senha inválidos!";
  
    } else {

        document.querySelector('body').classList.add('exiting');

        setTimeout(() => {
            window.location.href = "consulta.php";
        }, 500);

    }
}

function cadastrarConta(event) {

    document.querySelector('body').classList.add('exiting');

    setTimeout(() => {
        window.location.href = "formulario.php";
    }, 500);

}