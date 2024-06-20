document.getElementById('register-form').addEventListener('submit', function(event) {
    event.preventDefault();

    

    // Após o cadastro ser bem-sucedido, redirecione para a página de login
    window.location.href = 'index.html';
});
