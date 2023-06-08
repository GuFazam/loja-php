<?php
//receber as informações
$tipo = $_POST["tipo"];
$marca = $_POST["marca"];
$cor = $_POST["cor"];
$tamanho = $_POST["tamanho"];
$material = $_POST["material"];
$loja = $_POST["loja"];
$sexo = $_POST["sexo"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
$codigo_produto = $_POST["codigo_produto"];
$foto = $_POST["foto"];

//dados da conexão
$bd_usuario = "root";
$bd_senha = "";
$bd_nome_do_banco = "db_loja";
$bd_servidor = "localhost";

//abrir a conexão
$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_nome_do_banco);

//criar o sql inserir
$sql = "insert into t_tenis(tipo, marca, cor, tamanho, material, loja, sexo, quantidade, preco, codigo_produto, foto) 
values('$tipo', '$marca', '$cor', $tamanho, '$material', '$loja', '$sexo', $quantidade, $preco, $codigo_produto, '$foto')";


//executar o sql no banco
mysqli_query($conexao, $sql);

//fechar a conexão
mysqli_close($conexao);

//redirecionar para a página de listagem
header('location:cadastro.php');

?>