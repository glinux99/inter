<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>Document</title>
</head>
<body>
    <?php include($dir.'i_menu/menu_p.php');?>
    <div class="d-md-flex d-lg-flex">
        <div class="menu-g col-1">
            <div class="d-md-block  d-lg-block d-none">
                <?php include($dir.'i_menu/menug-md.php');?>
            </div>
            <div id="body_div" class="d-md-none  d-lg-none d-block">
                <!-- Menu gauche flottant -->
                <div class="menug">
                    <?php include($dir.'i_menu/menug.php');?>
                </div>
                <!-- Fin du boutton menu gauche flottant et son button -->
            </div>
        </div>
        <div class="w-100">
            <!-- Code ici -->
            <div class="entete">
                <h4 class="text-center text-uppercase">Administrateur de site</h4>
            </div>
            <div class="col-md-9 mx-auto my-2 text-center">
                <div class="card-group mx-1 ">
                    <div class="card shadow m-1" style="height: 23ex;">
                        <a href="">
                            <div class="card-header">
                                Articles
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-chat-square-text bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                    <div class="card shadow m-1" style="height: 23ex;">
                        <a href="">
                            <div class="card-header">
                                Humours
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-emoji-heart-eyes-fill bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-group mx-1 ">
                    <div class="card shadow m-1" style="height: 23ex;">
                        <a href="">
                            <div class="card-header">
                                Livres
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-file-pdf-fill bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                    <div class="card shadow m-1" style="height: 23ex;">
                        <a href="">
                            <div class="card-header">
                                Tutoriels
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-file-pdf bi--8xl"></span>
                                <span class="bi-camera-video bi--8xl"></span>
                                <span class="bi-chat-square-text bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card mx-1 shadow m-1">
                    <a href="">
                        <div class="card-header">
                            Musiques
                        </div>
                        <div class="card-body text-center">
                            <span class="bi-music-note-list bi--8xl"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include($dir.'i_menu/footer.php');?>
    </div>
</body>
</html>

