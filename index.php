<html>
<body>
 <style>
  body{
    background-image: url("https://kanto.legiaodosherois.com.br/w728-h381-gnw-cfill-gcc/wp-content/uploads/2017/10/legiao_d2Cn_0MiQo6N49kwaByF3L1YjecGSXfUKIRbPWvmpz.png.webp");
    background-position: 50% auto 50%;
    color: purple;
    font-family: arial;

  }

 </style>
<center> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoA3</title>
    <link rel="stylesheet" href="estiloindex.css">
</head>
<body>
<div id="corpo-form">
</div> 
<center>

<?php
session_start();
?>
<html>
<body>
<center>
<h1>Olá!</h1><?php

if(isset($_SESSION['nome'])== null){
?> Visitante

<a href="login.php">Login</a>
<?php } else {
    echo $_SESSION['nome']; ?>

<a href="cadastrar.php"><h4>Cadastrar</h4></a>
<a href="logout.php"><h4>Sair</h4></a>
<a href="alterarsenha.php"><h4>alterar senha</a></h4>
<a href="lista.php"><h4>lista de usuários</a><br><h4>
<?php } ?>      

</body>
</html>