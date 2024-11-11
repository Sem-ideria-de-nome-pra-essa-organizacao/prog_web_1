<?php include "./header.php"; ?>
<?php 
    if(!empty($_POST)){
        echo "<div class='alert alert-success' role='alert'>
                Nome:{$_POST['name']}<br>
                Email: {$_POST['email']}<br>
                Mensagem: {$_POST['text']}        
            </div>";
    }
?>
<div class="row">
    <div class="col">
        <h2>Contato</h2>
        <form action="contato.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Conteudo</label>
                <textarea class="form-control" name="text" id="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</div>
<?php include "./footer.php"; ?>