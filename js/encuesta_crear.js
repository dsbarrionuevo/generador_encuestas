$(document).ready(function() {
    $(".filaPreguntaTipo").hide();
    $(".botonAceptarPregunta").addClass("deshabilitado");
    $(".slcTipoPregunta").change(function() {
        $(".filaPreguntaTipo").hide();
        $(".botonAceptarPregunta").removeClass("deshabilitado");
        switch (parseInt($(this).val())) {
            case(0):
                $(".botonAceptarPregunta").addClass("deshabilitado");
                break;
            case(1):
                $(this).parent().parent().siblings(".filaPreguntaTipoTexto").show();
                break;
            case(2):
                $(this).parent().parent().siblings(".filaPreguntaTipoComentario").show();
                break;
            case(3):
                $(this).parent().parent().siblings(".filaPreguntaTipoRadio").show();
                break;
            case(4):
                $(this).parent().parent().siblings(".filaPreguntaTipoCheck").show();
                break;
        }
    });
});
