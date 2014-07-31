<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es-AR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto|Nunito:700' rel='stylesheet' type='text/css' />
        <!-- CSS Index -->
        <link href="<?php echo $global_ruta_web; ?>/css/general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $global_ruta_web; ?>/css/botones.css" rel="stylesheet" type="text/css" />
        <!-- JavaScript Index -->
        <script src="<?php echo $global_ruta_web; ?>/js/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    </head>
    <body class="fontInformal">
        <div id="cabecera">
            <h1 id="tituloSitio" class="fontFormal">
                Generador de Encuestas - UTN
            </h1>
        </div>
        <div id="contenido">
            <div class="pregunta">
                <div class="seccionPregunta">
                    <h3 class="tituloPregunta">
                        ¿Qué tipo de preguntas puedo hacer?
                    </h3>
                </div>
                <div class="seccionRespuesta">
                    <input type="text" value="Respuesta" class="inputTexto"/>
                </div>
            </div>
            <div class="piePregunta">
                <form action="#" method="post">
                    <input type="submit" value="Enviar" class="boton botonWindows azul"/>
                </form>
            </div>
        </div>
    </body>
</html>