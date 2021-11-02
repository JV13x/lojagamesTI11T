<?php
include("../views/header.php");
 ?>   
    <form method="POST" action="../controller/inserirUsuarios.php"> 
       <p>Email <input type="text" name="emailusuario"> </p> 
       <p>Senha<input type="password" name="senhausuario"> </p>
       <p>PIN<input type="password" name="pin"> </p>  
    <button type="submit">Salvar</button>
    </form>
    <?php
include("../views/footer.php");
 ?>  