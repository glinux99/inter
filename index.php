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
                <i class="bi bi-list-columns bi--3xl arrounded text-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#menug" aria-controls="menug"></i>
            </button>
        </div>
        <!-- Fin du boutton menu gauche flottant et son button -->
    </div>
    <div class="card-group">
        <div class="card mx-2">
            <img src="i_img/inter6.jpg" alt="image" class="card-img-top" height="350">
        </div>
        <div class="card mx-2 position-relative text-white">
            <img src="i_img/inter7.jpg" alt="image" class="card-img-top" height="350">
            <div class="card-img-overlay m-0 p-0">
                <div class="card-title bg-dark p-2 h-25 overflow-hidden">
                    Attaques des ADF a masisi Attaques des ADF a masisi
                    Attaques des ADF a masisi Attaques des ADF a masisi Attaques des ADF a masisi Attaques des ADF a masisi
                    Attaques des ADF a masisi Attaques des ADF a masisi
                </div>
                <div class="card-body fixed-bottom position-absolute" style="max-height: 40%;overflow: hidden;">
                    Je suis un des survivants mais on a juste eu la chance
                    Je suis un des survivants mais on a juste eu la chance
                    Je suis un des survivants mais on a juste eu la chance
                    Je suis un des survivants mais on a juste eu la chance
                    Je suis un des survivants mais on a juste eu la chance
                    Je suis un des survivants mais on a juste eu la chancekkk
                </div>
            </div>
        </div>
        <div class="card mx-2">
            <img src="i_img/inter2.jpg" alt="image" class="card-img-top" height="350">
        </div>
        <div class="card mx-2">
            <img src="i_img/inter1.jpg" alt="image" class="card-img-top" height="350">
        </div>
    </div>
</body>
</html>

