<?php
include "../db.class.php";
    $db = new db(); 
    
    if(!empty($_POST)){
        $db->insert($_POST);
        header("Location:CategoriaList.php");
    }
    

?>

<form action="CategoriaForm.php" method="post">
    <h4>Formulário Categoria</h4>
    <label for="">Nome</label><br>
    <input type="text" name="nome"><br>

    <button type="submit">Salvar</button>
</form>