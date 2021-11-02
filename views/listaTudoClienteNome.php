<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");
?>
<div class="container m-5 p-5">
    <form action="../views/listaTudoClienteNome.php" method="GET">
        <div class="row mb-3">
            <label for="inputNome" class="col-sm-2 col-form-label">Digite o Nome do Cliente: </label>
            <div class="col-sm-2">
                <input type="text" required name="NomeCliente" class="form-control" id="inputNome">
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
            <th scope="col">Código usuario</th>
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
        $nomeCliente = isset($_GET['NomeCliente']) ? $_GET['NomeCliente'] : "";
        if ($nomeCliente !="") {
            $cliente = listaTudoClienteNome($conexao, $nomeCliente);
            if ($cliente) {
                foreach( $cliente as $clientes):
        ?>
                <tr>
                    <th scope="row"><?= $clientes['codCli'] ?></th>
                    <td><?= $clientes['codUsuFK'] ?></td>
                    <td><?= $clientes['nomeCli'] ?></td>
                    <td><?= $clientes['cpfCli'] ?></td>
                    <td><?= $clientes['foneCli'] ?></td>
                    <td><?= $clientes['datanasCli'] ?></td>
                    <td>
                        <form action="../controller/deletarCliente.php" method="post">
                            <input type="hidden" name="codClideletar" value="<?= $clientes['codCli'] ?>"> <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </td>
                    <td>
                        <form action="formAlterarCliente.php" method="post">
                            <input type="hidden" name="codClialterar" value="<?= $clientes['codCli'] ?>"> <button type="submit" class="btn btn-danger">Alterar</button>
                        </form>
                    </td>
                </tr>
     <?php
     endforeach;
     ?>
    </tbody>
</table>
<?php
            }
        }
        ?>


<?php
include_once("../views/footer.php")
?>