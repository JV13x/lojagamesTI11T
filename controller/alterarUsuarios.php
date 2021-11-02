<?php

include("../model/conexao.php");
include("../model/bancoUsuarios.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(alterarUsuarios($conexao,$codigousuario,$emailusuario,$senhausuario,$pinusuario)){
    echo("Usuario alterado com sucesso");
}else{
    echo("Usuario não alterado");
}


include("../views/footer.php");