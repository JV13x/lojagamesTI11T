<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php")
 ?>   
    <form method="POST" action="../controller/alterarCliente.php">
    <?php
    $codCliente= $_POST["codClialterar"];
    
    $cliente=listaTudoClienteCod($conexao,$codCliente);
    ?>
     <p>Código<input type="text" name="codigocliente" value="<?=$cliente['codCli'] ?>" > </p> 
       <p>Nome <input type="text" name="nomecliente" value="<?=$cliente['nomeCli'] ?>" > </p> 
       <p>CPF <input type="text" name="cpfcliente" value="<?=$cliente['cpfCli'] ?>"> </p> 
       <p>Telefone<input type="text" name="telefonecliente" value="<?=$cliente['foneCli'] ?>" > </p> 
       <p>Data de nascimento<input type="date" name="datacliente" value="<?=$cliente['datanasCli'] ?>" > </p> 
     <button type="submit">Salvar</button>
    </form>
    <?php
include("../views/footer.php");
 ?>  