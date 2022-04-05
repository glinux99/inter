<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('i_menu/header.php');?>
    <title>Document</title>
</head>
<body>
    <div class="menug">
    <?php include('i_menu/menug.php');?>
    </div>
    <div id="body_div">
        <!-- Menu gauche flottant -->
        <?php include('i_menu/menu_p.php');?>
        <div style="position: absolute; z-index: 1">
            <button class="btn float-start position-fixed" >
                <i class="bi bi-list-columns bi--3xl arrounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#menug" aria-controls="menug"></i>
            </button>
        </div>
        <!-- Fin du boutton menu gauche flottant et son button -->
    </div>
    <div class="card-group">
        <div class="card">
            <img src="i_img/inter6.jpg" alt="">
        </div>
        <div class="card">
            1
        </div>
        <div class="card">
            1
        </div>
        <div class="card">
            1
        </div>
    </div>
</body>
</html>

