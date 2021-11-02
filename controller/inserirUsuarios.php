<?php

include("../model/conexao.php");
include("../model/bancoUsuarios.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(inserirUsuario($conexao,$emailusuario, $senhausuario,$pin)){
    echo("Usuario cadastrado com sucesso");
}else{
    echo("Usuario não cadastrado");
}


include("../views/footer.php");