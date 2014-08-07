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
        <div id="cabecera" class="azul">
            <h1 id="tituloSitio" class="fontFormal">
                Generador de Encuestas - UTN
            </h1>
        </div>
        <div id="contenido">
            <div class="cabeceraEncuesta">
                <h2  class="tituloEncuesta azul">
                    Título de la Encuesta
                </h2>
                <div class="descripcionEncuesta">
                    <p>Descripción de la encuesta</p>
                    <p>Quisque vestibulum sed mauris vel aliquet. Etiam in purus a massa mattis bibendum. Donec dolor odio, porttitor molestie euismod dictum, ultrices vel ipsum. Phasellus id sollicitudin erat. Nullam imperdiet sed metus iaculis dapibus. Duis pharetra feugiat metus in sollicitudin.</p>
                    <p>Proin cursus dapibus ipsum, vel congue tellus malesuada aliquam. Nullam id arcu urna. Donec at velit vel velit ultricies accumsan. Integer commodo dui libero, vitae rhoncus ante porttitor ac. Pellentesque sit amet lectus eros. Aliquam placerat varius quam sed aliquam. Curabitur turpis diam, iaculis sit amet auctor ut, cursus quis velit. Mauris non risus vitae purus sodales rhoncus.</p>
                    <p>Sed feugiat a turpis vitae porttitor. Proin placerat vitae enim ac scelerisque. Cras ac lectus hendrerit, pellentesque metus ut, molestie diam. Nam vitae bibendum velit, eu fermentum dui. In sodales dolor interdum egestas consequat. Integer id dolor nulla. Donec nec ante mauris.</p>
                </div>
            </div>
            <div class="pregunta">
                <div class="seccionPregunta">
                    <h3 class="tituloPregunta">
                        ¿Qué tipo de preguntas puedo hacer?
                    </h3>
                </div>
                <div class="seccionRespuesta">
                    <input type="text" value="Respuesta" class="general"/>
                </div>
            </div>
            <div class="pregunta">
                <div class="seccionPregunta">
                    <h3 class="tituloPregunta">
                        ¿Qué tipo de preguntas puedo hacer?
                    </h3>
                </div>
                <div class="seccionRespuesta">
                    <textarea class="general"></textarea>
                </div>
            </div>
            <div class="pregunta">
                <div class="seccionPregunta">
                    <h3 class="tituloPregunta">
                        ¿Qué tipo de preguntas puedo hacer?
                    </h3>
                </div>
                <div class="seccionRespuesta">
                    <input type="radio" name="radio" value="" class="general"/>
                    <label>Respuesta A</label>
                    <br/>
                    <input type="radio" value="" name="radio" class="general"/>
                    <label>Respuesta B</label>
                    <br/>
                    <input type="radio" value="" name="radio" class="general"/>
                    <label>Respuesta C</label>
                    <br/>
                </div>
            </div>
            <div class="pregunta">
                <div class="seccionPregunta">
                    <h3 class="tituloPregunta">
                        ¿Qué tipo de preguntas puedo hacer?
                    </h3>
                </div>
                <div class="seccionRespuesta">
                    <select class="general">
                        <option>Seleccione una opción</option>
                        <option>Respuesta A</option>
                        <option>Respuesta B</option>
                        <option>Respuesta C</option>
                    </select>
                </div>
            </div>
            <div class="pregunta">
                <div class="seccionPregunta">
                    <h3 class="tituloPregunta">
                        ¿Qué tipo de preguntas puedo hacer?
                    </h3>
                </div>
                <div class="seccionRespuesta">
                    <input type="checkbox" value="" class="general"/>
                    <label>Respuesta A</label>
                    <br/>
                    <input type="checkbox" value="" class="general"/>
                    <label>Respuesta B</label>
                    <br/>
                    <input type="checkbox" value="" class="general"/>
                    <label>Respuesta C</label>
                    <br/>
                </div>
            </div>
            <div class="piePregunta">
                <form action="#" method="post">
                    <input type="submit" value="Enviar" class="boton botonWindows azul" id="btnEnviar"/>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </body>
</html>