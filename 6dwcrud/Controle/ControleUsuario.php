<?php
require_once '../Modelo/ClassUsuario.php';
require_once '../DAO/ClassUsuarioDAO.php';

$id =@$_POST['idx'];
$nome =@$_POST['nome'];
$email =@$_POST['email'];
$acao =@$_GET['ACAO'];

$novoUsuario = new ClassUsuario();
$novoUsuario->setIdUsuario($id);
$novoUsuario->setNome($nome);
$novoUsuario->setEmail($email);

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
        $usuario = $ClassUsuarioDAO->alterarUsuario($novoUsuario)
        if($usuario >=1){
            header('Location:../index.php?&MSG= Cadastro alterado com sucesso!');
        }
        else{
            header('Location:../index.php?&MSG= Não foi possível alteral o cadastro!');
        }
        break;

    case "excluirUsuario":
        if(isset($_GET['idex'])){
            $idUsuario = $_GET['idex'];
            $classUsuarioDAO = new ClassUsuarioDAO();
            $us = $ClassUsuarioDAO->excluirUsuario($idUsuario);
            if($us == TRUE){
                header('Location:../index.php?PAGINA=listaUsuario&MSG= Usuário FOI excluído!');
            }
            else{
            header('Location:../index.php?&MSG= Usuário NÃO FOI possível ecluído!');
            }
        }
        break;

        default :
        break;
}