<?php

include("../model/conexao.php");
include("../model/bancojogos.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(alterarJogos($conexao, $codigo,$jogo, $tamanho, $preco, $requisitos, $console, $classificacao, $avaliacao)){
    echo("Jogo alterado com sucesso");
}else{
    echo("Jogo não alterado");
}


include("../views/footer.php");