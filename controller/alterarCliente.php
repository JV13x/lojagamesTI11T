<?php

include("../model/conexao.php");
include("../model/bancoCliente.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(alterarCliente($conexao,$codigocliente,$nomecliente,$cpfcliente,$telefonecliente,$datacliente)){
    echo("Cliente alterado com sucesso");
}else{
    echo("Cliente não alterado");
}


include("../views/footer.php");