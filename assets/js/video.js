function mostrarVideo(){
    var menu = document.getElementById("modal");
    var body = document.getElementById("body");
    var video = document.getElementById("video");
    var play = document.getElementById("play");
    menu.style.transform = "scale(1)";
    body.style.overflow = "hidden";
    video.play();
    play.className = "fas fa-pause";
}
function cerrarVideo(){
    var menu = document.getElementById("modal");
    var body = document.getElementById("body");
    menu.style.transform = "scale(0)";
    menu.style.transition = ".4s";
    body.style.overflow = "auto";
    video.pause();
    play.className = "fas fa-play";
}