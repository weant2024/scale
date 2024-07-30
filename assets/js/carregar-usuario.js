document.addEventListener('DOMContentLoaded', function() {
    console.log('Profissionais script carregado');

    const checkboxesProfissionais = document.querySelectorAll('.profissionais');
    const selectedProfissionaisDiv = document.getElementById('selected-profissionais');

    function atualizarConteudoProfissionais() {
        // Obtém todos os checkboxes selecionados
        const checkedBoxes = document.querySelectorAll('.profissionais:checked');
        console.log('Checkboxes selecionadas:', checkedBoxes);

        // Cria um array com os valores (IDs) das checkboxes selecionadas
        const selecionados = Array.from(checkedBoxes).map(box => box.value);
        console.log('IDs selecionados:', selecionados);
        
        // Atualiza o conteúdo da div com os IDs dos profissionais selecionados
        selectedProfissionaisDiv.innerHTML = selecionados.length > 0 
            ? `<p>Profissionais Selecionados: ${selecionados.join(', ')}</p>`
            : '<p>Nenhum profissional selecionado.</p>';
    }

    // Adiciona event listeners para atualizar a lista quando a seleção muda
    checkboxesProfissionais.forEach(checkbox => {
        checkbox.addEventListener('change', atualizarConteudoProfissionais);
    });

    // Atualiza o conteúdo ao carregar a página se houver checkboxes selecionadas
    atualizarConteudoProfissionais();
});

// Função para carregar os profissionais via AJAX
function carregarProfissionais() {
    const formData = new FormData();
    const checkboxesContratos = document.querySelectorAll('.contratos:checked');
    const idsContratos = Array.from(checkboxesContratos).map(cb => cb.value);

    if (idsContratos.length === 0) {
        console.log('Nenhum contrato selecionado');
        return;
    }

    formData.append('contratos', idsContratos.join(','));

    fetch('contratos.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Dados recebidos:', data);
        const profissionaisContainer = document.getElementById('profissionais-container');
        profissionaisContainer.innerHTML = data.profissionaisHtml;
        
        // Atualiza a lista de profissionais selecionados após o carregamento
        atualizarConteudoProfissionais();
    })
    .catch(error => console.error('Erro ao carregar profissionais:', error));
}

// Adiciona event listener ao botão ou outro trigger para carregar profissionais
document.getElementById('some-button').addEventListener('click', carregarProfissionais);
