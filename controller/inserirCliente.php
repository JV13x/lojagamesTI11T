<?php

include("../model/conexao.php");
include("../model/bancoCliente.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(inserirCliente($conexao,$codUsu,$nomeCliente,$cpf,$fone,$datanasc)){
    echo("Cliente cadastrado com sucesso");
}else{
    echo("Cliente não cadastrado");
}


include("../views/footer.php");