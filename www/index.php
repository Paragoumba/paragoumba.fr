<!DOCTYPE html>
<?php $lang = isset($_GET['lang']) ? $_GET['lang'] === "fr" ? "fr" : "en" : "en";

$translations = array(
        "en" => array("lang" => "Language", "networks" => "Networks", "twitter-account" => "My Twitter account", "github-account" => "My Github account", "mail-address" => "My email address", "projects" => "Projects", "desc-paragoumba.fr" => "The site where ... you are ... right now -_-<br>This repo contains the WebGL Crash Test Platform too", "desc-projecttest" => "A game created to test LWJGL.<br>it might be playable one day, who knows ?  ¯\_(ツ)_/¯", "desc-devsite" => "The DevSite website (dev.paragoumba.fr) provides you with a more complete list of my projects", "desc-other-projects" => "My other projects", "made-by" => "Made by", "shitty-joke" => "You're on the site PARAGOUMBA.fr so &quot;myself&quot;, it's me, Paragoumba, asshole. (But I love you anyway <3 and good visit)", "me" => "myself", "thanks-to" => "thanks to"),
        "fr" => array("lang" => "Langage", "networks" => "Réseaux", "twitter-account" => "Mon compte Twitter", "github-account" => "Mon compte Github", "mail-address" => "Mon address mail", "projects" => "Projets", "desc-paragoumba.fr" => "Le site sur lequel ... vous êtes ... en ce moment -_-<br>Le repo contient aussi le site WebGL Crash Test Platform", "desc-projecttest" => "Un jeu créé pour tester LWJGL.<br>Il sera peut-être jouable un jour, qui sait ? ¯\_(ツ)_/¯", "desc-devsite" => "Le site DevSite (dev.paragoumba.fr) fournit une liste plus complète de mes projets", "desc-other-projects" => "Mes autres projets", "made-by" => "Fait par", "shitty-joke" => "T'es sur le site PARAGOUMBA.fr donc &quot;oim&quot;, c'est moi, Paragoumba, gros con. (Mais je t'aime quand même <3 et bonne visite)", "me" => "oim", "thanks-to" => "grâce à")
)?>

<html lang="<?php echo $lang?>">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../icon.gif">
        <title>paragoumba.fr</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../theme.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <header class="col-lg-12 py-5">
                    <div class="col-lg-1 dropdown d-inline-block align-text-bottom">
                        <button class="btn bg-transparent dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $translations[$lang]['lang']?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="./?lang=fr">Français</a>
                            <a class="dropdown-item" href="./">English</a>
                        </div>
                    </div>
                    <h1 class="col-lg-10 d-inline-block text-center">Paragoumba.fr</h1>
                </header>
                <div class="offset-lg-2 col-lg-8 text-center">
                    <h2 class="my-5"><?php echo $translations[$lang]['networks']?></h2>
                    <div class="col-lg-3 mb-xs-1 d-inline-block">
                        <a href="https://twitter.com/Paragoumba" target="_blank">
                            <div class="card bg-dark">
                                <div class="card-header">
                                    <i class="fab fa-twitter fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $translations[$lang]['twitter-account']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 d-inline-block">
                        <a href="https://github.com/Paragoumba" target="_blank">
                            <div class="card bg-dark">
                                <div class="card-header">
                                    <i class="fab fa-github fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $translations[$lang]['github-account']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 d-inline-block">
                        <a href="mailto:paragoumba@gmail.com" target="_blank">
                            <div class="card bg-dark">
                                <div class="card-header">
                                    <i class="fas fa-envelope fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $translations[$lang]['mail-address']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <hr class="my-5">
                    <h2 class="my-5"><?php echo $translations[$lang]['lang'] . "s"?></h2>
                    <div>
                        <div class="col-lg-3 d-inline-block">
                            <div class="card bg-dark">
                                <div class="card-header">
                                    <i class="fab fa-java fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Java</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-inline-block">
                            <div class="card bg-dark">
                                <div class="card-header">
                                    <i class="fas fa-code fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">C / C++</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-inline-block">
                            <div class="card bg-dark">
                                <div class="card-header">
                                    <i class="fab fa-php fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">PHP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 ">
                        <div class="col-lg-3 d-inline-block">
                            <div class="card bg-dark">
                                <div class="card-header">
                                    <i class="fab fa-js-square fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">JavaScript</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-inline-block">
                            <div class="card bg-dark">
                                <div class="card-header">
                                    <i class="fas fa-database fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">SQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h2 class="my-5"><?php echo $translations[$lang]['projects']?></h2>
                    <div class="col-lg-5 mb-4 d-inline-block">
                        <a href="https://github.com/Paragoumba/paragoumba.fr" target="_blank">
                            <div class="card bg-dark">
                                <div class="card-header">Paragoumba.fr</div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $translations[$lang]['desc-paragoumba.fr']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5 mb-4 d-inline-block">
                        <a href="https://github.com/Paragoumba/ProjectTest" target="_blank">
                            <div class="card bg-dark">
                                <div class="card-header"><span class="badge badge-danger mr-lg-1">HOT</span>Project : Test</div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $translations[$lang]['desc-projecttest']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5 d-inline-block">
                        <a href="https://dev.paragoumba.fr" target="_blank">
                            <div class="card bg-dark">
                                <div class="card-header"><?php echo $translations[$lang]['desc-other-projects']?></div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $translations[$lang]['desc-devsite']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <hr class="my-5">
                </div>
                <footer class="col-lg-12 pb-4 text-center">
                    <h5><?php echo $translations[$lang]['made-by']?> <span title="<?php echo $translations[$lang]['shitty-joke']?>"><?php echo $translations[$lang]['me']?></span> <?php echo $translations[$lang]['thanks-to']?> <a class="under" href="https://getbootstrap.com" target="_blank">Bootstrap</a></h5>
                </footer>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
