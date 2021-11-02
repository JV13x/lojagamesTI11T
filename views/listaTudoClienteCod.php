<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php")
?>
<div class="container m-5 p-5">
    <form action="listaTudoClienteCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do Cliente: </label>
            <div class="col-sm-2">
                <input type="number" required name="CodCli" class="form-control" id="inputCodigo">
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
        $codCliente = isset($_GET['CodCli']) ? $_GET['CodCli'] : 0;
        if ($codCliente > 0) {
            $cliente = listaTudoClienteCod($conexao, $codCliente);
            if ($cliente) {
        ?>
                <tr>
                    <th scope="row"><?= $cliente['codCli'] ?></th>
                    <td><?= $cliente['nomeCli'] ?></td>
                    <td><?= $cliente['cpfCli'] ?></td>
                    <td><?= $cliente['foneCli'] ?></td>
                    <td><?= $cliente['datanasCli'] ?></td>
                    <td>
                        <form action="../controller/deletarCliente.php" method="post">
                            <input type="hidden" name="codClideletar" value="<?= $cliente['codCli'] ?>"> <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </td>
                    <td>
                        <form action="formAlterarCliente.php" method="post">
                            <input type="hidden" name="codClialterar" value="<?= $cliente['codCli'] ?>"> <button type="submit" class="btn btn-danger">Alterar</button>
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