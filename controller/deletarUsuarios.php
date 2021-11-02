<?php

include("../model/conexao.php");
include("../model/bancoUsuarios.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
if (deletarUsuarios($conexao,$codUsudeletar)){ 
echo("Usuario deletado com sucesso");
}else{
    echo("Usuario não deletado ");
}


include("../views/footer.php");