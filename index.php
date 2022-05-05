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
    <div class="d-md-flex d-lg-flex">
        <div class="menu-g">
            <div class="d-md-block  d-lg-block d-none position-sticky top-0" >
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
        <div class="vrai-body h-100">
            <div class=" row mx-0 position-relative">
                <div class="col-3 p-0">
                    <div class="title bg-danger px-2 d-flex align-items-center " style="clip-path: polygon(0 0, 100% 0%, 70% 100%, 0% 100%); border: 1px solid green; height: 7vh;">
                        Urgence
                    </div>
                    <div style="position: absolute; z-index: 1;" class="d-md-none d-lg-none d-block">
                        <button class="btn float-start position-fixed m-0 p-0">
                            <i class="bi-list-columns bi--3xl text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#menug" aria-controls="menug"></i>
                        </button>
                    </div>
                </div>           
                <div class="message col-9">
                    Une bombe a explose dans un quartier de la ville mais n'a pas fait beaucoup de degat
                </div>
            </div>
            <div class="group-3">
                <?php while($x<6){?>
                    <div class="card mx-1 text-white arrounded mb-1">
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
            <div class="d-flex justify-content-center my-2">
                <button class="btn btn-dark px-3 me-1">Back</button>
                <button class="btn btn-success px-3">Next</button>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include('i_menu/footer.php');?>
    </div>
</body>
</html>

