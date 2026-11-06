<?php

$id =@$_POST['idx'];
$nome =@$_POST['nome'];
$email =@$_POST['email'];
$acao =@$_GET['ACAO'];

$ClassUsuarioDAO = new ClassUsuarioDAO();
switch($acao){
    case "cadastrarUsuario":
        $usuario = $ClassUsuarioDAO->cadastrar($novoUsuario);
        if($usuario >=1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        }
        else{
            header('Location:../index.php?&MSG= Não foi possível realizar o cadastro!');
        }
        break;

    case "alterarUsuario":
        $usuario = $ClassUsuarioDAO->alterarUsuario($novoUsuario);
        if($usuario >=1){
            header('Location:../index.php?&MSG= Cadastro alterado com sucesso!');
        }
        else{
            header('Location:../index.php?&MSG= Não foi possível alterar o cadastro!');
        }
        break;

    case "excluirUsuario":
        if(isset($_GET['idex'])){
            $idUsuario = $_GET['idex'];
            $us = $ClassUsuarioDAO->excluirUsuario($idUsuario);
            if($us == TRUE){
                header('Location:../index.php?&MSG= Usuário FOI excluído!');
            }
            else{
                header('Location:../index.php?&MSG= Não foi possível excluir o usuário!');
            }
        }
        break;

    default :
        break;
}