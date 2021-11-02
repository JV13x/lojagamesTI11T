<?php
function inserirUsuario($conexao, $emailusuario, $senhausuario,$pin)
{
    $option = ['cost' => 8];
    $senhacryto = password_hash($senhausuario, PASSWORD_BCRYPT, $option);
    $query = "insert into tbusuarios(emailUsu,senhaUsu,pinUsu)values('{$emailusuario}','{$senhacryto}','{$pin}')";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listaTudoUsuarios($conexao)
{
    $query = "Select * From tbusuarios";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}


function listaTudoUsuariosCod($conexao, $codUsuario)
{
    $query = "Select * From tbusuarios where codUsu='{$codUsuario}'";
    $resultados = mysqli_query($conexao, $query);
    $resul = mysqli_fetch_array($resultados);
    return $resul;
}


function alterarUsuarios($conexao,$codUsu,$emailUsu,$senhaUsu,$pinUsu)
{
    $option = ['cost' => 8];
    $senhacryto = password_hash($senhaUsu, PASSWORD_BCRYPT, $option);
    $query = "update tbusuarios set emailUsu = '{$emailUsu}',
    senhaUsu='{$senhacryto}',pinUsu='{$pinUsu}' where codUsu='{$codUsu}' ";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function deletarUsuarios($conexao,$codUsu){
    $query="delete from tbusuarios where codUsu = '{$codUsu}'";
    $resultados= mysqli_query($conexao,$query);
    return $resultados;
}


