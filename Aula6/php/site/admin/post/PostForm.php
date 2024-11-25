<?php
include "../db.class.php";
$db = new db();

if (!empty($_POST)) {
    if (empty($_POST["id"])) {
        $db->insert_categoria($_POST);
    } else {
        $db->update_categoria($_POST);

    }
    header("Location:CategoriaList.php");

}

if (!empty($_GET["id"])) {
    $data = $db->find_categoria($_GET['id']);
}


?>

<form action="CategoriaForm.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data->id ?? '' ?>">

    <h4>Formulário Categoria</h4>
    <label for="">Nome</label><br>
    <input type="text" name="nome" value="<?php echo $data->nome ?? '' ?>"><br>

    <button type="submit">Salvar</button>
</form>