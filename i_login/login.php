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
        <div class="menu-g">
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
        <div class="vrai-body">
            <!-- Code ici -->
            <div class="card-body col-lg-10">
                <div class="card">
                    <div class="card-title">
                        <ul class="nav nav-tabs mx-auto" id="" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="card-log" data-bs-toggle="tab" href="#card-login" role="tab" aria-controls="card-login" aria-selected="true"><?php echo _("Creation compte");?></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="username-log" data-bs-toggle="tab" href="#username" role="tab" aria-controls="username" aria-selected="false"><?php echo _("Username login");?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <!-- About banque -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include($dir.'i_menu/footer.php');?>
    </div>
</body>
</html>

