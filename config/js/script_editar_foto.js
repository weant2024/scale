// Função para editar a foto do usuário
function editarFoto() {
    // Cria um input de tipo file oculto
    var input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*'; // Aceita apenas arquivos de imagem

    // Evento disparado quando o usuário seleciona um arquivo
    input.addEventListener('change', function(event) {
        var file = event.target.files[0]; // Obtém o arquivo selecionado

        if (file) {
            // Cria um objeto URL temporário para a imagem selecionada
            var imageUrl = URL.createObjectURL(file);

            // Seleciona o elemento da imagem
            var imagemUsuario = document.querySelector('.image-placeholder img');

            // Atualiza o atributo src da imagem com a URL temporária
            imagemUsuario.src = imageUrl;

            // Exibe mensagem de sucesso
            alert('Foto do usuário atualizada com sucesso!');
        } else {
            // Exibe mensagem se nenhum arquivo for selecionado
            alert('Nenhum arquivo selecionado. Nenhuma alteração foi feita.');
        }
    });

    // Dispara o clique no input file
    input.click();
}
