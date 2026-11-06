<!DOCTYPE html>
<html lang="en">
<?php
$msg =@$_GET['MSG'];
if ($msg !=null || $msg != ''){
    echo "<script>alert('$msg)</script>";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1 align="center">Sistema de cadastro de usuários</h1>
    <?php
    include 'Visao/FormCadUsuario.php';
    echo "<hr>";
    include 'Visao/ListarUsuario.php';
    ?>
</body>
</html>