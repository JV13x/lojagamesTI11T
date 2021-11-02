<?php
include_once("../views/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");
include_once("../model/bancoUsuarios.php");
?>
<div class="container m-5 p-5">
    <form action="cadastroCliente.php" method="POST">
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
<?php
$CodUsu=isset($_POST['CodUsu']) ? $_POST['CodUsu'] : 0;;
    $usuario=listaTudoUsuariosCod($conexao, $CodUsu) ;
    if($usuario){
?>
<form method="POST" action="../controller/inserirCliente.php"> 
       <p>Codigo Usuario <input type="text" name="codUsu" value="<?=$usuario['codUsu']?>"> </p> 
       <p>Nome<input type="text" name="nomeCliente"> </p>
       <p>CPF<input type="text" name="cpf"> </p>
       <p>Telefone<input type="text" name="fone"> </p>  
       <p>Data de nascimento<input type="date" name="datanasc"> </p>    
    <button type="submit">Salvar</button>
    </form>

<?php
}
include_once("../views/footer.php")
?>