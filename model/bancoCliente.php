<?php
function inserirCliente($conexao, $codigoUsuFK, $nomeCliente,$cpfCliente,$foneCliente,$dataNascCliente)
{

    $query = "insert into tbclientes(codUsuFK,nomeCli,cpfCli,foneCli,datanasCli)values('{$codigoUsuFK}','{$nomeCliente}','{$cpfCliente}','{$foneCliente}','{$dataNascCliente}')";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listaTudoClientes($conexao)
{
    $query = "Select * From tbclientes";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}


function listaTudoClienteCod($conexao, $codJogo)
{
    $query = "Select * From tbclientes where codUsuFK='{$codJogo}'";
    $resultados = mysqli_query($conexao, $query);
    $resul = mysqli_fetch_array($resultados);
    return $resul;
}


function alterarCliente($conexao,$codCli,$nomeCli,$cpfCli,$foneCli,$dataNasCli)
{
    $query = "update tbclientes set nomeCli='{$nomeCli}',cpfCli='{$cpfCli}',foneCli='{$foneCli}',datanasCli='{$dataNasCli}' where codCli = '{$codCli}', ";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function deletarCliente($conexao,$codCli){
    $query="delete from tbclientes where codCli = '{$codCli}'";
    $resultados= mysqli_query($conexao,$query);
    return $resultados;
}


function  listaTudoClienteNome($conexao, $nomeCliente){
  $query="select * from tbclientes where nomeCli like '%{$nomeCliente}%'";
  $resultados=mysqli_query($conexao,$query);
  
  return $resultados;
}