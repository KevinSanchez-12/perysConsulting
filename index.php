<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<?php include_once 'components/variables.php'?>
<body id="body">
    <?php include_once 'templates/menu.php'?>
    <section class="banner center container">
        <div class="item-a">
            <h1>Soluciones de <br><span>reclutamiento de personal</span></h1>
            <p>Perys Consulting ofrece soluciones con alto impacto en el desarrollo corporativo y técnicas focalizadas en el éxito laboral.</p>
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
        <video id="video" controls src="<?php echo $video1?>"></video>
    </section>
    <?php include_once 'templates/asesoria.php'?>
    <!-- <h1 class="title">Te ofrecemos soluciones para escoger al mejor postulante</h1>
    <section class="services container">
        <div class="item center">
            <div class="item-a">
                <img src="assets/img/etc/0002.png" alt="">
            </div>
            <div class="item-b">
                <h1>Sistema de Verificación de Personal</h1>
                <p>Orientada a determinar si el trabajador o postulante cuenta con algún tipo de antecedente o requisitoria, estableciendo su nivel de responsabilidad.</p>
                <ul>
                    <li><i class="fa fa-check"></i>Incluye Ficha RENIEC, para constatar datos, y fotografía, principalmente para evitar homonimias y/o documentos fraguados.</li>
                    <li><i class="fa fa-check"></i>Antecedentes Policiales.</li>
                    <li><i class="fa fa-check"></i>Antecedentes Judiciales - Requisitorias (vigentes, suspendidas, caducadas).</li>
                    <li><i class="fa fa-check"></i>Antecedentes Penales.</li>
                    <li><i class="fa fa-check"></i>Referencias de Investigación.</li>
                </ul>
            </div>
        </div>
        <div class="item reverse center">
            <div class="item-a">
                <img src="assets/img/etc/0003.png" alt="">
            </div>
            <div class="item-b">
                <h1>Sistema de Selección de Personal</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et placeat minus quod excepturi corporis voluptates voluptas dignissimos suscipit unde. Fuga, libero mollitia voluptas ipsum tempore praesentium fugit adipisci quasi maxime!</p>
                <ul>
                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                </ul>
            </div>
        </div>
        <div class="item center">
            <div class="item-a">
                <img src="assets/img/etc/0004.png" alt="">
            </div>
            <div class="item-b">
                <h1>Sistema de Pruebas de Covid-19</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et placeat minus quod excepturi corporis voluptates voluptas dignissimos suscipit unde. Fuga, libero mollitia voluptas ipsum tempore praesentium fugit adipisci quasi maxime!</p>
                <ul>
                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                </ul>
            </div>
        </div>
    </section>
    <h2 class="title-business">Agencias creativas, StartUps y corporaciones trabajan con nosotros para seleccionar al mejor talento</h2>
    <section class="advice">
        <div class="container center">
            <div class="item-a">
                <h1>¿Te gustaría un asesoría <span>personalizada</span>?</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit dolores nesciunt id, aspernatur autem fugiat, cumque doloremque, inventore eaque minus placeat harum? Illum, reiciendis! Quasi dolores mollitia ex rerum eum.</p>
                <div>
                    <a class="boton" onclick="mostrarAsesoria();">Solicitar asesoría<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item-b center">
                <img src="assets/img/etc/0001.png" alt="Imagen sobre asesoría personalizada">
            </div>
        </div>
    </section>
    <h1 class="title">¿Qué opinan nuestros clientes?</h1>
    <h2 class="title-business">Tenemos una calificación promedio de 4.7 de 5 estrellas</h2>
    <?php include_once 'templates/footer.php'?> -->
</body>
</html>