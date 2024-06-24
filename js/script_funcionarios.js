function searchFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    table = document.querySelector('table');
    tr = table.getElementsByTagName('tr');

    // Loop por todas as linhas da tabela e ocultar as que não correspondem à busca
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName('td')[0]; // Primeira coluna (nome do funcionário)
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = ''; // Mostrar a linha se a busca corresponder
            } else {
                tr[i].style.display = 'none'; // Ocultar a linha se a busca não corresponder
            }
        }
    }
}
