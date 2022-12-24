<h1>Crear Categoria</h1>
<form action="<?=base_url?>category/save" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>

    <input type="submit" value="Guardar" class="button">
</form>