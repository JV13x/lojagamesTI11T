<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoUsuarios.php")
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">PIN</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $usuarios=listaTudoUsuarios($conexao);
  foreach($usuarios as $usuario):
  ?> 
  <tr>
      <th scope="row"><?=$usuario['codUsu']?></th>
      <td><?=$usuario['emailUsu']?></td>
      <td><?=$usuario['senhaUsu']?></td>
      <td><?=$usuario['pinUsu']?></td>
      <td>
        <form action="../controller/deletarUsuarios.php" method="post">
          <input type="hidden" name="codUsudeletar" value="<?=$usuario['codUsu']?>" > <button type="submit" class="btn btn-danger">X</button>
        </form>
      </td>
      <td>
        <form action="formAlterarUsuarios.php" method="post">
          <input type="hidden" name="codUsualterar" value="<?=$usuario['codUsu']?>" > <button type="submit" class="btn btn-danger">Alterar</button>
        </form>
      </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>



<?php
include_once("../views/footer.php")
?>