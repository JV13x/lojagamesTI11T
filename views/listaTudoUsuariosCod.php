<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoUsuarios.php")
?>
<div class="container m-5 p-5">
    <form action="listaTudoUsuariosCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do Usuario: </label>
            <div class="col-sm-2">
                <input type="number" required name="CodUsu" class="form-control" id="inputCodigo">
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
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">PIN</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codUsuario = isset($_GET['CodUsu']) ? $_GET['CodUsu'] : 0;
        if ($codUsuario > 0) {
            $usuario=listaTudoUsuariosCod($conexao, $codUsuario);
            if($usuario){
        ?>
            <tr>
                <th scope="row"><?= $usuario['codUsu'] ?></th>
                <td><?= $usuario['emailUsu'] ?></td>
                <td><?= $usuario['senhaUsu'] ?></td>
                <td><?= $usuario['pinUsu'] ?></td>
                <td>
                    <form action="../controller/deletarUsuarios.php" method="post">
                        <input type="hidden" name="codUsudeletar" value="<?= $usuario['codUsu'] ?>"> <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
                <td>
                    <form action="formAlterarUsuarios.php" method="post">
                        <input type="hidden" name="codUsualterar" value="<?= $usuario['codUsu'] ?>"> <button type="submit" class="btn btn-danger">Alterar</button>
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