/*function alterarButton(){
    gravar = document.getElementById("gravar");
    gravar.innerHTML = "Alterar";
}*/

function editar(linha){
    i = linha.parentNode.parentNode.rowIndex;
    objeto = document.getElementById('tbl').rows[i];

    document.getElementById("id").value = objeto.cells[1].innerHTML;
    document.getElementById("nome").value = objeto.cells[2].innerHTML;
    document.getElementById("apelido").value = objeto.cells[3].innerHTML;
    document.getElementById("obs").value = objeto.cells[4].innerHTML;

    document.getElementById("gravar").value = "Alterar";
}

function excluir(linha){
    i = linha.parentNode.parentNode.rowIndex;
    objeto = document.getElementById('tbl').rows[i];

    document.getElementById('id').value = objeto.cells[1].innerHTML;

    document.getElementById("gravar").value = "Excluir";
    document.getElementById("gravar").click();
}