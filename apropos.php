<?php $index=1;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('i_menu/header.php');?>
    <title>Document</title>
</head>
<body>
    <?php include('i_menu/menu_p.php');?>
    <div class="d-md-flex d-lg-flex body">
        <div class="menu-g">
            <div class="d-md-block  d-lg-block d-none">
                <?php include('i_menu/menug-md.php');?>
            </div>
            <div id="body_div" class="d-md-none  d-lg-none d-block">
                <!-- Menu gauche flottant -->
                <div class="menug">
                    <?php include('i_menu/menug.php');?>
                </div>
                <!-- Fin du boutton menu gauche flottant et son button -->
            </div>
        </div>
        <div class="vrai-body parallax-window w-100" data-parallax="scroll" data-image-src="i_img/inter7.jpg">
            <!-- Code ici -->
            <div class="card-title text-center text-center h1 text-white">
                <span class="soulign">A PROPOS</span>
            </div>
            <div class="text-black mx-1">
                Pour ce qui concernent Interlab, Interlab est une societe mis au point par des informaticiens 
                pour aider d'aitres utilisateurs sur des problemes a caractere informatique. ce site web a ete mis au
                point par la premiere graduat des Ingenieurs en Informatique de l'ISTA/GOMA de l'annee 2018-2019:
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include('i_menu/footer.php');?>
    </div>
</body>
</html>

