<?php
    include "../db.class.php";
    $db = new db();
    $data = $db->all(); 
    
        

?>

<table style='border:1px solid #000;'>
    <thead >
        <th>ID</th>
        <th>Nome</th>
    </thead>
    <tb >
        <?php
        foreach($data as $item){
            echo "<tr style='border:1px solid #000;'>
                <td style='border:1px solid #000;'>$item->id</td>
                <td  style='border:1px solid #000;'>$item->nome</td>
            </tr>";
        }
        
        ?>
        
    </tb>
</table>
