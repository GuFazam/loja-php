<?php
include "cabecalho.php"; //include está incluindo um arquivo no caso ele está incluindo o cabeçalho
?>


<main class="conatiner">
    <form action="cadastro-salvar.php" method="post">
    <label>Tipo</label><br>
    <select name="tipo" type="text">
        <option value=""></option>
        <option value="esportivo">esportivo</option>
        <option value="casual">casual</option>
    </select><br>
    <label>Marca</label><br>
    <select name="marca" type="text">
        <option value=""></option>
        <option value="nike">nike</option>
        <option value="adidas">adidas</option>
    </select><br>
    <label>Cor</label><br>
    <input name="cor" type="text"><br>
    <label>Tamanho</label><br>
    <input name="tamanho" type="number"><br>
    <label>Material</label><br>
    <input name="material" type="text"><br>
    <label>Loja</label><br>
    <input name="loja" type="text"><br>
    <label>Sexo</label><br>
    <label>Feminino</label>
    <input type="radio" name="sexo" value="feminino">
    <label>Masculino</label>
    <input type="radio" name="sexo" value="masculino">
    <label>Unissex</label>
    <input type="radio" name="sexo" value="unissex">
    <!-- <select name="sexo" type="text">
        <option value=""></option>
        <option value="feminino">Feminino</option>
        <option value="masculino">Masculino</option>
        <option value="unissex">Unissex</option>
    </select><br> -->
    <label>Quantidade</label><br>
    <input name="quantidade" type="number"><br>
    <label>Preço</label><br>
    <input name="preco" type="number"><br>
    <label>Código do Produto</label><br>
    <input name="codigo_produto" type="number"><br>
    <label>Foto</label><br>
    <input name="foto"><br>
    <button type="submit" >Salvar</button>
</form>
</main>


<?php
include "rodape.php"; //include está incluindo um arquivo no caso ele está incluindo o rodapé
?>