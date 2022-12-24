<h1>Gestionar Categorias</h1>

<a href="<?=base_url?>category/create" class="button button-small">Crear Categoria</a>

<?php if(isset($_SESSION['category_create_status']) && $_SESSION['category_create_status'] == 'complete'): ?>
    <strong class="alert_green">Categoria creada correctamente</strong>
<?php elseif(isset($_SESSION['category_create_status']) && $_SESSION['category_create_status'] == 'failed'): ?>
    <strong class="alert_red">Creación de categoria fallido, introduce bien los datos</strong>
<?php endif; ?>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>

    <?php while ($category = $categories->fetch_object()): ?>
        <tr>
            <td><?=$category->id?></td>
            <td><?=$category->nombre?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
<?php  unset($_SESSION["category_create_status"]); ?>