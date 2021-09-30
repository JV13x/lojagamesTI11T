<?php

function inserirJogo($conexao, $jogo, $tamanho, $preco, $requisitos, $console, $classificacao, $avaliacao)
{
    $query = "insert into tbjogos(nomeJog,tamanhoJog,precoJog,requisitosJog,consoleJog,classificacaoJog,avaliacaoJog)values('{$jogo}','{$tamanho}','{$preco}','{$requisitos}','{$console}','{$classificacao}','{$avaliacao}')";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listaTudoJogos($conexao)
{
    $query = "Select * From tbjogos";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}
function listaTudoJogosCod($conexao,$codJogo)
{
    $query = "Select * Form tbjogos where codJog={$codJogo}";
    $resultados = mysqli_query($conexao,$codJogo);
    return $resultados;
}
