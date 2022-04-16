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
        <div class="bg-white d-block w-100">
            <!-- Code ici -->
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner mt-3">
                    <div class="carousel-item active">
                        <div class="border-start-0 border border-3 col-md-5 bg-white rounded-end  mx-auto ">
                            <div class=" border-start border-success border-5">
                                <h4>Rire est bon</h4>
                                <p class="m-0">Rire diminue la sensation de douleur et booste le système immunitaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class=" border-start border-success border-5">
                            <h4>Rire est bon</h4>
                            <p class="m-0">Rire diminue la sensation de douleur et booste le système immunitaire</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include('i_menu/footer.php');?>
    </div>
</body>
</html>

