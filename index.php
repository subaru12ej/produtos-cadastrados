<?php
// informações de conexão  com o banco de  dados
$host = 'localhost';
$dhname = 'sistema';
$username = 'root';
$password = '';

//criar conexão
$conn = new mysqli($host,$username,$password,$dbname);

// verificar conexão
if ($conn->connect_error) {
    die("conexão falhou: " . $conn->connect_error);
}
// verificar se o formulario foi submetido
if ($_server["request_methoo"]=="post"){
 $nome = $_post['nome'];
 $descricao = $_post['descricao'];
 $preco = $_post['preco'];
 $foto = $_files['foto']['name'];
 
 //diretório onde a foto será armazenade
 $target_dir = "uploads";
 $target_file = $terget_dir . basename ($foto);

 //mover a foto para o diretório especificado
move_uploaded_file($_files["foto"]["tmp_name"], $target_file)

// inserir dados na tabela produtos
$sql = "INSERT INTO produto (nome, descricao, preco, fOTO)
VALUES (?,?,?,?)";

$STMT = $CONN->prepare($sql);
$tmt->bind_param("ssds", $nome,$descricao,$preco,$foto);
if ($stmt->execute()) {
    echo "produto cadastrado com suscesso";
}else {
    echo "erro ao cadastrar produto:" . $stmt->error;
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2›Cadastro de Produtos /52)
‹form method-"post" action-** enctype-"multipart/form-data"
‹label for-"nome" ›Nome do Produto: </label><br›
‹input type-text" ¡d-"nome" name-"none"
required><brschry
‹label for-"descricao" ›Descrição do Produto:</label›‹br)
«textarea id-"descricao' (nane-"descricao" required›/textare
«label for-"preco*›Preco do Produto: </label›‹br›
cinput type-"number" id-"preco" name-"preco" step-"0.01° reg
‹label for-"foto" ›Foto do Produto:‹/label>‹br›
‹input type-"file" id-"foto"
* name="foto" required›‹br›‹br)
<input type-"submit" value-"cadastrar Produto",

</html>