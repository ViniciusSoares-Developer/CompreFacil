var senha = document.getElementById('senha'),
    iconSenha = document.getElementById('iconSenha')

function visiblePassword(){
    if(senha.type == "password"){
        senha.type = "text"
        iconSenha.classList.remove('fa-eye')
        iconSenha.classList.add('fa-eye-slash')
    }else{
        senha.type = "password"
        iconSenha.classList.remove('fa-eye-slash')
        iconSenha.classList.add('fa-eye')
    }
}