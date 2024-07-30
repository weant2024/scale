document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.contratos');
    const conteudoContratos = document.getElementById('conteudo-contratos');
    const profissionaisContainer = document.getElementById('profissionais-container');

    function atualizarConteudoContratos() {           
        const checkedBoxes = document.querySelectorAll('.contratos:checked');
        const ids = Array.from(checkedBoxes).map(box => box.value);

        if (ids.length > 0) {
            fetch('contratos.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({ 'contratos': ids })
            })
            .then(response => response.json())
            .then(data => {
                conteudoContratos.innerHTML = data.contratosHtml;
                profissionaisContainer.innerHTML = data.profissionaisHtml;
            })
            .catch(error => console.error('Erro ao carregar o conteúdo:', error));
        } else {
            conteudoContratos.innerHTML = ''; // Limpa o conteúdo se nenhuma checkbox estiver marcada
            profissionaisContainer.innerHTML = ''; // Limpa a lista de profissionais
        }
    }

    // Atualiza o conteúdo quando a checkbox é alterada
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', atualizarConteudoContratos);
    });

    // Atualiza o conteúdo ao carregar a página se houver checkboxes selecionadas
    atualizarConteudoContratos();
    
});

