$(function() {
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 5) {
        $("#menu").addClass("efect");
      } else {
        $("#menu").removeClass("efect");
      }
    });
});
function mostrarMenu(){
    var menu = document.getElementById("menub");
    menu.style.right = "0";
}
function cerrarMenu(){
    var menu = document.getElementById("menub");
    menu.style.right = "-100%";
    menu.style.transition = "right .4s";
}