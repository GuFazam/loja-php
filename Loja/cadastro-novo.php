<?php
include "cabecalho.php"; //include está incluindo um arquivo no caso ele está incluindo o cabeçalho
?>

<main class="conatiner">
    <form action="cadastro-salvar.php" method="post"></form>
    <input name="tipo">
    <input name="marca">
    <input name="tamanho">
    <input name="material">
    <input name="loja">
    <input name="sexo">
    <input name="quantidade">
    <input name="preco">
    <input name="codigo_produto">
    <input name="foto">
    <button type="submit">Salvar</button>
</main>

<?php
include "rodape.php"; //include está incluindo um arquivo no caso ele está incluindo o rodapé
?>