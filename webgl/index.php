<!doctype html>
<?php function println($str){

    echo $str . "\n";

}?>

<html>
    <head>
        <title>WebGL Crash Test Platform - Paragoumba.fr</title>
        <link rel="icon" href="../icon.gif">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../theme.css">
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container<?php if (isset($_POST["dir"])) echo "-fluid"?>">
            <div class="row">
<?php

                if (!isset($_POST["dir"])) {

                    $files = scandir(getcwd());

                    println("                <h4 class='card card-body card-text my-3 text-center bg-dark col-lg-6 offset-lg-3'>Projects</h4>");
                    println("                <ul class='md-3'>");

                    foreach ($files as $row) {

                        if (is_dir($row)) {

                            $dirContent = scandir($row);

                            $desc = array_search("desc.txt", $dirContent);
                            $image = array_search("image.jpeg", $dirContent);
                            $js = array_search("webgl.js", $dirContent);

                            if ($desc && $image && $js) {

                                println("                    <li class='card bg-dark mb-3' onclick='this.lastElementChild.submit(); return false'>");
                                println("                        <img class='card-img-top' src='" . $row . "/" . $dirContent[$image] . "'>");
                                println("                        <div class='card-body'>");
                                println("                            <h5 class='card-title'>$row</h5>");
                                println("                            <p class='card-text'>" . file_get_contents($row . "/" . $dirContent[$desc]) . "</p>");
                                println("                        </div>");
                                println("                        <form method='post'>");
                                println("                            <input type='hidden' name='dir' value='$row'>");
                                println("                        </form>");
                                println("                    </li>");

                            }
                        }
                    }

                    println("                </ul>");

                } else {

                    println("              <h4 class='fixed-top ml-2 mt-1' onclick='toggleTitle(event, this)'>" . $_POST["dir"] . "</h4>");
                    println("              <canvas id='glcanvas'></canvas>");

                }?>
            </div>
        </div>
        <?php
        if (isset($_POST["dir"])) {

            println("<script src='gl-matrix-min.js'></script>");
            println("<script src='title.js'></script>");
            println("<script src='" . $_POST["dir"] . "/webgl.js'></script>");

        }?>
    </body>
</html>