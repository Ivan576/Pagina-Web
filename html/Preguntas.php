<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            El Zen y el Arte de Programar
        </title>
        <meta name="description" content="Blog introductorio al mundo de la programación">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Style/estiloPreguntas.css">
        <script type="text/javascript" src="../JS/actions.js"></script>
    </head>
    <body>
        <header id="encabezadoBlog">
            <h1 id="tituloBlog">
                El Zen y el Arte de Programar.
            </h1>
            <p id="subtituloBlog">
                Domina el camino de este arte.
            </p>
        </header>
        <nav id="menuBlog">
            <a href="../index.html">Inicio</a>
            <a href="Tutoriales.html">Tutoriales</a>
            <a href="Noticias.html">Noticias</a>
            <a href="Recursos.html">Recursos</a>
            <a href="Preguntas.php">Preguntas</a>
        </nav>

        <main id="principalBlog">
            <section id="contenidoBlog">
                <section>
                    <header id="tituloSeccionBlog">
                        <h1 style="margin-bottom: 0%;">Preguntas</h1>
                    </header>
                    <article id="articuloBlog">
                    <?php
                        require_once '../Php/services/seleccionar.php';
                        $seleccionar = new Seleccionar();
                        $preguntas = $seleccionar->Selec();
                        if($preguntas != null) :
                            foreach ($preguntas as $pregunta): ?>
                                <h3><?php echo $pregunta['id'] ?>- <?php echo $pregunta['usuario'] ?> preguntó:</h3>
                                <p><?php echo $pregunta['pregunta'] ?></p>
                                <?php
                                    require_once '../Php/services/seleccionar_respuestas.php';
                                    $seleccionarrespuestas = new SeleccionarRespuestas();
                                    $respuestas = $seleccionarrespuestas->Selec();
                                    if($respuestas != null):
                                        foreach($respuestas as $respuesta):
                                            if($respuesta['id_pregunta'] === $pregunta['id']):?>
                                                <h4><?php echo $respuesta['usuario'] ?> respondió:</h3>
                                                <p><?php echo $respuesta['respuesta'] ?></p>
                                <?php
                                            endIf;
                                        endForeach;
                                    endif;
                                ?>
                                <form action="../Php/services/guardar_respuestas.php" method="POST">
                                    <input type="text" name="correorespuesta" id="correorespuesta" placeholder="Ingrese un correo o su pregunta será anónima"><br>
                                    <input type="hidden" name="idpregunta" id="idpregunta" value="<?php echo $pregunta['id'] ?>">
                                    <textarea name="respuesta" id="respuesta" rows = "7" cols = "61" name = "description" placeholder="Ingresa tu pregunta..." ></textarea><br>
                                    <div id="enviar"><button type="submit" onclick="return addAnswer();">Enviar</button></div>
                                </form>
                                <br></br>
                    <?php
                            endForeach;
                        endif;
                    ?>
                    </article>
                </section>
            </section>
            <section id="atajosBlog">
                <section id = "realizarPregunta">
                    <header id="tituloSeccionBlog">
                        <h1 style="margin-bottom: 0%;">¿Tienes una duda?</h1>
                        <h4 style="margin-top: 0%;">¡Nosotros podemos ayudarte a resolverla!</h4>
                    </header>
                    <article id="articuloBlog">
                        <form action="../Php/services/guardar.php" method="POST">
                            <input type="text" name="correo" id="correo" placeholder="Ingrese un correo o su pregunta será anónima"><br>
                            <textarea name="pregunta" id="pregunta" rows = "7" cols = "61" name = "description" placeholder="Ingresa tu pregunta..." ></textarea><br>
                            <div id="enviar"><button type="submit" onclick="return addElement();">Enviar</button></div>
                        </form>
                    </article>
                </section>
            </section>
        </main>

        <footer id="pieBlog">

            <header id="tituloPieBlog">
                <h1>Contactanos</h1>
            </header>

            <section id="parrafoPieBlog">
                
                <article>
                    <header onclick="clickImageVyl()">
                        <h1>Vyl</h1>
                    </header>
                    <section onclick="clickImageVyl()">
                        <img src="../Images/vyl.jpg" alt="" id="img" />
                    </section>
                    <footer>
                        <p id="links">Twitter: <a href="https://twitter.com/CcRVyl">CcRVyl</a></p>
                        <p id="links">Instagram: <a href="https://www.instagram.com/ccr_vyl/">ccr_vyl</a></p>
                    </footer>
                </article>
                
                <article>
                    <header onclick="clickImageAthzi()">
                        <h1>Athzi</h1>
                    </header>
                    <section onclick="clickImageAthzi()">
                        <img src="../Images/Athzi.jpg" alt="" id="img" />
                    </section>
                    <footer>
                        <p id="links">Twitter: <a href="https://twitter.com/Athziri80732043">Athziri80732043</a></p>
                        <p id="links">Instagram: <a href="https://www.instagram.com/d_athziri/">d_athziri</a></p>
                    </footer>
                </article>
                
                <article>
                    <header onclick="clickImageJoaquinz()">
                        <h1>Juaquinz</h1>
                    </header>
                    <section onclick="clickImageJoaquinz()">
                        <img src="../Images/Juaquinz.jpg" alt="" id="img" />
                    </section>
                    <footer>
                        <p id="links">Twitter: <a href="https://twitter.com/JuaquinzOficial">JuaquinzOficial</a></p>
                        <p id="links">Instagram: <a href="https://www.instagram.com/eljuaquinz/">eljuaquinz</a></p>
                    </footer>
                </article>

            </section>
        </footer>
    </body>
</html>