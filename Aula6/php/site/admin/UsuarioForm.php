<?php
include "./db.class.php";
$db = new db("usuario");
if (!empty($_POST)) {

    $db->insert($_POST);

    header("Location:PostList.php");

}


$status = empty($data->status) ? "1" : $data->status;

?>

<form action="UsuarioForm.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data->id ?? '' ?>">
    <input type="hidden" name="status" value="1">

    <h4>Formulário Usuario</h4>
    <label for="">Nome</label><br>
    <input type="text" name="nome"><br>

    <label for="">Login</label><br>
    <input type="text" name="login"><br>

    <label for="">senha</label><br>
    <input type="password" name="senha">


    <button type="submit">Salvar</button>
</form>