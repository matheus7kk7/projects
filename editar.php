<?php include_once ("templates/header.php") ?>

<title>Editar</title>



<form action="" method="post">
    <div class="mb-3">
        <label for="nameInput" class="form-label">Nome completo</label>
        <input type="text" class="form-control" id="nameInput" value="" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="precoInput" class="form-label">Preço</label>
        <input type="text" class="form-control" id="precoInput" value="" name="preco" required>
    </div>
    <input type="hidden" name="id" value="">
    <input type="submit" value="Enviar">
</form>

<?php include_once ("templates/footer.php") ?>