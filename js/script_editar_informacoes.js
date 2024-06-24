// editarInformacoes.js

import { fecharModal, criarModal } from './modal.js';

export function editarInformacoes() {
    const modalContent = `
        <div class="modal-content">
            <span class="close" onclick="fecharModal()">&times;</span>
            <h2>Editar Informações</h2>
            <form id="editForm">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="Colaborador 1">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" value="Colaborador@etc">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" value="123.456.789-00">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" value="(11) 999999999">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" value="">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="colaborador@exemplo.com">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" id="dataNascimento" name="dataNascimento" value="1990-01-01">
                <button type="submit">Salvar</button>
            </form>
        </div>
    `;

    const modal = criarModal(modalContent);
    document.body.appendChild(modal);

    document.getElementById('editForm').addEventListener('submit', function (event) {
        event.preventDefault();
        alert('Dados salvos com sucesso!');
        fecharModal();
    });
}
