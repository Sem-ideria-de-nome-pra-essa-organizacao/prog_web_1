<?php
    include "../db.class.php";
    $db = new db();
    $data = $db->all(); 
    
    if(!empty(($_GET['id']))){
        $db->destroy($_GET['id']);
        header('Location:CategoriaList.php');
    }
        

?>

<table style='border:1px solid #000;'>
    <thead >
        <th>ID</th>
        <th>Nome</th>
        <th colspan="2">Ações</th>
    </thead>
    <tb >
        <?php
        foreach($data as $item){
            echo "<tr style='border:1px solid #000;'>
                <td style='border:1px solid #000;'>$item->id</td>
                <td  style='border:1px solid #000;'>$item->nome</td>
                <td style='border:1px solid #000;'><a href='./CategoriaForm.php?id=$item->id'>Editar</a> <a onclick='return confirm(\" Deseja realmete excluir?\")'href='./CategoriaList.php?id=$item->id'>Deletar</a></td>
            </tr>";
        }
        
        ?>
    </tb>
    <?php
    echo "<a href='./CategoriaForm.php'>Cadastrar</a>";
    ?>
</table>
