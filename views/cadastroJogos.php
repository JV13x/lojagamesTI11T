<?php
include("../views/header.php");
 ?>   
    <form method="POST" action="../controller/inserirJogos.php">
       <p>Jogo <input type="text" name="jogo"> </p> 
       <p>Tamanho do jogo <input type="text" name="tamanho"> </p> 
       <p>Preço do jogo<input type="text" name="preco"> </p> 
       <p>Requisitos do jogo <input type="text" name="requisitos"> </p> 
       <p>Console do jogo <input type="text" name="console"> </p> 
       <p>Classificação do jogo <input type="text" name="classificacao"> 
       <p>Avaliação do jogo <input type="text" name="avaliacao"> </p> 
     <button type="submit">Salvar</button>
    </form>
    <?php
include("../views/footer.php");
 ?>  