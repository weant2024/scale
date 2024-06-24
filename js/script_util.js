// util.js

// Função de utilidade para obter o template do modal do HTML
export function obterTemplateModal() {
    return document.getElementById('modalTemplate').content.cloneNode(true);
}
