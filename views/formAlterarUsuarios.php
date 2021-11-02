<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoUsuarios.php")
 ?>   
    <form method="POST" action="../controller/alterarUsuarios.php">
    <?php
    $codUsuario= $_POST["codUsualterar"];
    
    $usuario=listaTudoUsuariosCod($conexao,$codUsuario);
    ?>
     <p>Código<input type="text" name="codigousuario" value="<?=$usuario['codUsu'] ?>" > </p> 
       <p>Email <input type="text" name="emailusuario" value="<?=$usuario['emailUsu'] ?>" > </p> 
       <p>Senha <input type="password" name="senhausuario" value="<?=$usuario['senhaUsu'] ?>"> </p> 
       <p>PIN <input type="text" name="pinusuario" value="<?=$usuario['pinUsu'] ?>" > </p> 
       
     <button type="submit">Salvar</button>
    </form>
    <?php
include("../views/footer.php");
 ?>  