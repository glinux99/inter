<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('i_menu/header.php');?>
    <link rel="stylesheet" href="css/css.css">
    <title>Document</title>
</head>
<body>
    <?php include('i_menu/menu_p.php');?>
    <div class="body">
        <div class="bg-success row mx-1">
            <div class="row col-3" >
                <div style="position: absolute; z-index: 1;" class="m-0 p-0">
                    <button class="btn float-start position-fixed" >
                        <i class="bi bi-list-columns bi--3xl arrounded text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#menug" aria-controls="menug"></i>
                    </button>
                </div>
            </div>
            <div class="message col-9">
                Une bombe a explose dans un quartier de la ville mais n'a pas fait beaucoup de degat
            </div>
        </div>
        <div id="body_div">
                <!-- Menu gauche flottant -->
                <div class="menug">
                    <?php include('i_menu/menug.php');?>
                </div>
                <!-- Fin du boutton menu gauche flottant et son button -->
        </div>
        <div class="group-3">   
            <?php while ($x<6){?> 
                <div class="card position-relative text-white">
                    <img src="i_img/inter7.jpg" alt="image" class="card-img-top" height="350">
                    <div class="card-img-overlay m-0 p-0">
                        <div class="card-title bg-dark p-2 h-25 overflow-hidden">
                            <div style="clip-path: polygon(0 0, 100% 0%, 70% 100%, 0% 100%);" class="bg-danger py-1 ps-2">Securite</div>
                            <div>
                            Attaques des ADF a masisi Attaques des ADF a masisi
                            Attaques des ADF a masisi Attaques des ADF a masisi Attaques des ADF a masisi Attaques des ADF a masisi
                            Attaques des ADF a masisi Attaques des ADF a masisi
                            </div>
                        </div>
                        <div class="card-body fixed-bottom position-absolute px-2" style="max-height: 40%;overflow: hidden;">
                            Je suis un des survivants mais on a juste eu la chance
                            Je suis un des survivants mais on a juste eu la chance
                            Je suis un des survivants mais on a juste eu la chance
                            Je suis un des survivants mais on a juste eu la chance
                            Je suis un des survivants mais on a juste eu la chance
                            Je suis un des survivants mais on a juste eu la chance
                        </div>
                    </div>
                </div>
            <?php $x++;}?>
        </div>
    </div>
    <div>
        <?php include('i_menu/footer.php');?>
    </div>
</body>
</html>

