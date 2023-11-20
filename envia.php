
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<?php
$conexao = mysqli_connect("localhost","root","","teste");
// CHECAR CONEXÃO
if(!$conexao){
echo"NÃO CONECTADO";
}
echo"CONECTADO AO BANCO>>>>>>>>>>>>>";

//RECUPERAR E VERIFICAR JÁ EXISTE

$email = $_POST['email'];
$email = mysqli_real_escape_string($conexao, $email);

$sql = "SELECT email FROM teste.dados WHERE email = '$email'";
$retorno = mysqli_query($conexao,$sql);

if(mysqli_num_rows($retorno)>0){
echo"EMAIL JÁ CADASTRADO!<br>";
}else{

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO teste.dados(nome, email) values('$nome','$email')";
$resultado = mysqli_query($conexao, $sql);
echo">>USUÁRIO CADASTRADO COM SUCESSO!<BR>";
}
?>
</body>
</html>