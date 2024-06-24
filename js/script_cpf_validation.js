// Adiciona um listener de evento de entrada para o campo CPF
document.getElementById('cpf').addEventListener('input', function () {
    const cpfInput = this.value; // Obtém o valor atual do campo CPF
    const errorMessage = document.getElementById('cpf-error'); // Seleciona o elemento de mensagem de erro para CPF

    // Remove quaisquer caracteres não numéricos do valor do campo CPF
    this.value = cpfInput.replace(/[^\d]/g, '');

    // Verifica se o CPF tem exatamente 11 dígitos
    if (this.value.length === 11) {
        // Valida o CPF usando a função isCPFValid
        if (isCPFValid(this.value)) {
            errorMessage.style.display = 'none'; // Oculta a mensagem de erro se o CPF for válido
        } else {
            errorMessage.style.display = 'block'; // Exibe a mensagem de erro se o CPF for inválido
        }
    } else {
        errorMessage.style.display = 'none'; // Oculta a mensagem de erro se o CPF não tiver 11 dígitos
    }
});

// Função para validar o CPF
function isCPFValid(cpf) {
    // Remove quaisquer caracteres não numéricos do CPF
    cpf = cpf.replace(/[^\d]+/g, '');
    
    // Verifica se o CPF é vazio
    if (cpf === '') return false;

    // Verifica se o CPF tem exatamente 11 dígitos e se não é uma sequência repetida de números
    if (cpf.length !== 11 || 
        cpf === "00000000000" || 
        cpf === "11111111111" || 
        cpf === "22222222222" || 
        cpf === "33333333333" || 
        cpf === "44444444444" || 
        cpf === "55555555555" || 
        cpf === "66666666666" || 
        cpf === "77777777777" || 
        cpf === "88888888888" || 
        cpf === "99999999999")
        return false;

    // Primeira etapa de validação do dígito verificador
    let add = 0; // Inicializa a variável de soma
    for (let i = 0; i < 9; i++) // Loop através dos primeiros 9 dígitos do CPF
        add += parseInt(cpf.charAt(i)) * (10 - i); // Calcula a soma ponderada dos dígitos
    let rev = 11 - (add % 11); // Calcula o primeiro dígito verificador
    if (rev === 10 || rev === 11) // Ajusta se o resultado for 10 ou 11
        rev = 0;
    if (rev !== parseInt(cpf.charAt(9))) // Verifica se o dígito verificador calculado confere
        return false;

    // Segunda etapa de validação do dígito verificador
    add = 0; // Reinicializa a variável de soma
    for (let i = 0; i < 10; i++) // Loop através dos primeiros 10 dígitos do CPF
        add += parseInt(cpf.charAt(i)) * (11 - i); // Calcula a soma ponderada dos dígitos
    rev = 11 - (add % 11); // Calcula o segundo dígito verificador
    if (rev === 10 || rev === 11) // Ajusta se o resultado for 10 ou 11
        rev = 0;
    if (rev !== parseInt(cpf.charAt(10))) // Verifica se o dígito verificador calculado confere
        return false;

    return true; // Retorna verdadeiro se o CPF for válido
}
