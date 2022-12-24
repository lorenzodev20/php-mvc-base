    <!-- Barra Lateral -->
    <!-- <div id="content"> -->
    <aside id="lateral">
        <div id="login" class="block-aside">
            <?php if(!isset($_SESSION['identity'])):?>
            <h3>Entrar a la web</h3>
            <form action="<?=base_url?>user/login" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Ingresar" class="button">
                <a href="<?=base_url?>user/register"> Registrarse </a>
            </form>
            <?php else: ?>
            <h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
            <?php endif; ?>
        </div>
        <ul>
            <li><a href="#"> Mis pedidos</a></li>
            <?php if(isset($_SESSION['admin'])):?>
            <li><a href="<?=base_url?>category/index"> Gestionar categorias</a></li>
            <li><a href="#"> Gestionar pedidos</a></li>
            <?php endif; ?>

            <?php if(isset($_SESSION['identity'])):?>
            <li><a href="<?=base_url?>user/logout"> Cerrar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </aside>
    <!-- </div> -->
    <!-- Contendio Central  -->
    <div id="central">