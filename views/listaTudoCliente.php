<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");
include_once("../model/bancoUsuarios.php");
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $usuarios=listaTudoClientes($conexao);
  foreach($usuarios as $usuario):
  ?> 
  <tr>
      <th scope="row"><?=$usuario['codCli']?></th>
      <td><?=$usuario['nomeCli']?></td>
      <td><?=$usuario['cpfCli']?></td>
      <td><?=$usuario['foneCli']?></td>
      <td><?=$usuario['datanasCli']?></td>
      <td>
        <form action="../controller/deletarCliente.php" method="post">
          <input type="hidden" name="codClideletar" value="<?=$usuario['codCli']?>" > <button type="submit" class="btn btn-danger">X</button>
        </form>
      </td>
      <td>
        <form action="formAlterarCliente.php" method="post">
          <input type="hidden" name="codClialterar" value="<?=$usuario['codCli']?>" > <button type="submit" class="btn btn-danger">Alterar</button>
        </form>
      </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>



<?php
include_once("../views/footer.php")
?>