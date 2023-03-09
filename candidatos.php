<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<?php include_once 'components/variables.php'?>
<body id="body">
    <?php include_once 'templates/menu.php'?>
    <section class="banner center container">
        <div class="item-a">
            <h1>Soluciones para mejorar tu <br><span>perfil profesional</span></h1>
            <p>Somos una empresa dedicada a la selección de personal, consultoría, outsousing, coaching y asesoría profesional especializada.</p>
            <div class="botones center">
                <a class="boton" onclick="mostrarAsesoria();">Solicitar asesoría<i class="fa fa-angle-right"></i></a>
                <a class="boton-video" onclick="mostrarVideo();"><i id="play" class="fa fa-play"></i>Mira el video</a>
            </div>
        </div>
        <div class="item-b center">
            <img src="assets/img/banners/0001.png" alt="Imagen de soluciones de recolutamiento de personal">
        </div>
    </section>
    <section id="modal" class="video center">
        <i onclick="cerrarVideo();" class="fa fa-close"></i>
        <video id="video" controls src="<?php echo $video4?>"></video>
    </section>
    <?php include_once 'templates/asesoria.php'?>
</body>
</html>