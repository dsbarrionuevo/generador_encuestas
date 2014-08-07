<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es-AR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto|Nunito:700' rel='stylesheet' type='text/css' />
        <!-- CSS Index -->
        <link href="<?php echo $global_ruta_web; ?>/css/general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $global_ruta_web; ?>/css/botones.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $global_ruta_web; ?>/css/formulario.css" rel="stylesheet" type="text/css" />
        <!-- JavaScript Index -->
        <script src="<?php echo $global_ruta_web; ?>/js/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    </head>
    <body class="fontInformal">
        <div id="cabecera" class="azul">
            <h1 id="tituloSitio" class="fontFormal">
                Generador de Encuestas - UTN
            </h1>
        </div>
        <div id="contenido">
            <div class="seccion">
                <div class="tituloSeccion">
                    <h2>
                        Crear nueva encuesta
                    </h2>
                </div>
                <div class="cuerpoSeccion">
                    <form action="#" method="post">
                        <table id="datosEncuesta" class="formulario centrado">
                            <caption>
                                Datos generales
                            </caption>
                            <tr class="filaDoble4060">
                                <td class="nombreCampo">
                                    Título encuesta
                                </td>
                                <td class="valorCampo ">
                                    <input type="text" class="general fillParent"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Descripción encuesta
                                </td>
                                <td>
                                    <textarea class="general"></textarea>
                                </td>
                            </tr>
                        </table>
                        <table class="datosPregunta formulario centrado">
                            <caption>
                                Pregunta
                            </caption>
                            <tr class="filaDoble4060">
                                <td>
                                    Pregunta
                                </td>
                                <td>
                                    <input type="text" class="general fillParent"/>
                                </td>
                            </tr>
                            <tr >
                                <td>
                                    Texto de ayuda
                                </td>
                                <td>
                                    <input type="text" class="general fillParent"/>
                                </td>
                            </tr>
                            <tr >
                                <td>
                                    Tipo de pregunta
                                </td>
                                <td>
                                    <select class="general">
                                        <option>Seleccione un tipo de pregunta</option>
                                        <option>Texto</option>
                                        <option>Comentario</option>
                                        <option>Radio</option>
                                        <option>Check</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td >
                                    <input type="button" value="Agregar pregunta" class="boton botonWindows azul"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>