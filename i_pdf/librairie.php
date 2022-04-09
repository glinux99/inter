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
        <div class="my-2 col-lg-11 col-md-11">
            <!-- Code ici -->
            <div class="border-start border-2 border-success ms-2 ps-2">
                <h4 ><?php echo _("Librairie en ligne");?></h4>
            </div>
            <div class="populaire m-2">
                <div class="ms-2 ps-2">
                    <h5><?php echo _("Les livres les plus lus");?></h5>
                </div>
                <div class="row w-100 mx-auto">
                    <?php $livres=[2,3,4,5,5,5];
                foreach($livres as $livre){
                    echo '<div class="card col-6 col-md-2">
                        <img src="../i_pdf/img1.jpg" alt="" class="card-img-top" height="200" width="400">
                        <div class="card-body p-0">
                            <span class="">
                                Titre:
                            </span>
                            <span class="">
                                Autheur:
                            </span>
                        </div>
                    </div>';
                }?>
                </div>
            </div>
            <div class="all-pdf">
                <h4 ><?php echo _("Tous les livres");?></h4>
                <div class="row w-100 mx-auto">
                    <?php $livres=[2,3,4,5,5,5,2,3,4,5,5,5];
                foreach($livres as $livre){
                    echo '<div class="card col-6 col-md-2">
                        <img src="../i_pdf/img1.jpg" alt="" class="card-img-top" height="200" width="400">
                        <div class="card-body p-0">
                            <span class="">
                                Titre:
                            </span>
                            <span class="">
                                Autheur:
                            </span>
                        </div>
                    </div>';
                }?>
                </div>
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
</body>
</html>

