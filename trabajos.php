<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<?php include_once 'components/variables.php'?>
<body id="body">
    <?php include_once 'templates/menu-trabajo.php'?>
    <section class="box-search container">
        <h1 class="title">Encuentra el empleo ideal para ti de <br> <span>manera rápida</span></h1>
        <form action="" class="center">
            <input class="input-text" type="text" placeholder="Cargo o área">
            <button type="submit" class="boton">Buscar<i class="fa fa-angle-right"></i></button>
        </form>
        <p>Ahora el empleo lo eliges tú, hay más de <span>1024</span> ofertas esperando por ti.</p>
    </section>
    <section id="modal" class="video center">
        <i onclick="cerrarVideo();" class="fa fa-close"></i>
        <video id="video" controls src="<?php echo $video6?>"></video>
    </section>
    <?php include_once 'templates/oferta.php'?>
    <?php include_once 'templates/registro.php'?>
    <?php include_once 'templates/iniciar-sesion.php'?>
</body>
    <script src="assets/js/pass.js?1.4"></script>
</html>