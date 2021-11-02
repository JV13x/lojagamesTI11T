<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoJogos.php")
?>
<div class="container m-5 p-5">
    <form action="listaTudoJogosCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do Jogo: </label>
            <div class="col-sm-2">
                <input type="number" required name="CodJog" class="form-control" id="inputCodigo">
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-dark">Buscar</button>
            </div>
        </div>

    </form>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Jogo</th>
            <th scope="col">Console</th>
            <th scope="col">Preço</th>
            <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codJogo = isset($_GET['CodJog']) ? $_GET['CodJog'] : 0;
        if($codJogo>0){
        $jogo =listaTudoJogosCod($conexao,$codJogo);
        if($jogo){
        ?>
        <tr>
            <th scope="row"><?=$jogo['codJog'] ?></th>
            <td><?=$jogo['nomeJog'] ?></td>
            <td><?=$jogo['consoleJog'] ?></td>
            <td><?=$jogo['precoJog'] ?></td>
            <td>
        <form action="../controller/deletarJogos.php" method="post">
          <input type="hidden" name="codJogdeletar" value="<?=$jogo['codJog']?>" > <button type="submit" class="btn btn-danger">X</button>
        </form>
      </td>
      <td>
        <form action="formAlterarJogos.php" method="post">
          <input type="hidden" name="codJogalterar" value="<?=$jogo['codJog']?>" > <button type="submit" class="btn btn-danger">Alterar</button>
        </form>
      </td>
        </tr>
        <?php
        }
        }
        ?>
    </tbody>
</table>



<?php
include_once("../views/footer.php")
?>