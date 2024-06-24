// Quando o formulário de login for enviado...
document.getElementById('login-form').addEventListener('submit', function (event) {
    // Prevenir o envio padrão do formulário
    event.preventDefault();
    
    // Obter os valores dos campos de nome de usuário e senha
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Simulação de autenticação (usuário e senha fixos para exemplo)
    if (username === 'admin' && password === 'admin') {
        // Redirecionamento para o dashboard após login bem-sucedido
        window.location.href = 'dashboard.html';
    } else {
        // Exibir mensagem de erro se a autenticação falhar
        alert('Usuário ou senha incorretos');
    }
});
