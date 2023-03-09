function mostrarOferta(){
    var oferta = document.getElementById("oferta");
    var body = document.getElementById("body");
    oferta.style.transform = "scale(1)";
    body.style.overflow = "hidden";
}
function cerrarOferta(){
    var oferta = document.getElementById("oferta");
    var body = document.getElementById("body");
    oferta.style.transform = "scale(0)";
    oferta.style.transition = ".4s";
    body.style.overflow = "auto";
}
function mostrarRegistro(){
    var registro = document.getElementById("registro");
    var body = document.getElementById("body");
    registro.style.transform = "scale(1)";
    body.style.overflow = "hidden";
}
function cerrarRegistro(){
    var registro = document.getElementById("registro");
    var body = document.getElementById("body");
    registro.style.transform = "scale(0)";
    registro.style.transition = ".4s";
    body.style.overflow = "auto";
}
function mostrarSesion(){
    var sesion = document.getElementById("sesion");
    var body = document.getElementById("body");
    sesion.style.transform = "scale(1)";
    body.style.overflow = "hidden";
}
function cerrarSesion(){
    var sesion = document.getElementById("sesion");
    var body = document.getElementById("body");
    sesion.style.transform = "scale(0)";
    sesion.style.transition = ".4s";
    body.style.overflow = "auto";
}
function mostrarP(){
    var eye = document.getElementById("eye");
    eye.className = "fa fa-eye-slash";
}
