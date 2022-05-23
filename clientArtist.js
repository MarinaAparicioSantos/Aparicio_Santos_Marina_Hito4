$(document).ready(function () {
    $('.artista').click(function () {
        $(".artistaMostrar").fadeIn();
        $(".ajustarCliente").show();
        
    });

    $('.cliente').click(function () {
        $(".artistaMostrar").fadeOut();
        $(".ajustarCliente").hide();
    });
});
