<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <link rel="stylesheet" href="player/css/main.css">
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
        <div class="vw-100 ">
            <!-- Code ici -->
            <div class="row p-0 m-0 px-1 py-2">
                <div class="col-md-6 border-start border-2 border-success ps-2">
                    <h4>Toutes vos chansons</h4>
                </div>
                <div class="col-md-6 justify-content-end d-md-flex d-lg-flex d-none">
                        <input type="search" name="" id="" class="form-control me-1" style="width: 32vh;">
                        <button class="btn btn-success">Rechercher</button>
                </div>
                <div class="col-md-6 d-flex justify-content-center d-md-none d-lg-none">
                        <input type="search" name="" id="" class="form-control me-1" style="width: 32vh;">
                        <button class="btn btn-success">Rechercher</button>
                </div>
            </div>
            <div class="row w-100 mx-auto d-md-flex d-lg-flex justify-content-center">
                <?php $x=0;
                for($x=0; $x<6; $x++){
                  echo '<div class="col-md-4 play'.$x.'" style="max-width: 25rem"></div>';
                }?>
            </div>
            <div class="d-flex justify-content-center my-2">
                <button class="btn btn-dark px-3 me-1">Back</button>
                <button class="btn btn-success px-3">Next</button>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include($dir.'i_menu/footer.php');?>
    </div>
    <script src="player/js/main.js"></script>
</body>
</html>

