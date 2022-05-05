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
            <div class="d-md-block  d-lg-block d-none position-sticky top-0">
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
        <div class="my-3 h-100 vrai-body w-100">
            <!-- Code ici -->
            <div class="row p-0 m-0 px-1 py-2">
                <div class="col-md-6 border-start border-2 border-success ps-2">
                    <h4>Tous les tutoriels en videos et pdf</h4>
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
            <div class="row w-100 mx-auto">
                <?php $livres=[2,3,4,5,5,5,5,4];
            foreach($livres as $livre){
                $play ="bi-play-btn-fill";
                $play ="bi-file-earmark-pdf-fill";
                echo '<div class="card col-6 col-md-3">
                        <div class="card-img-overlay d-flex align-items-center mb-5" id="vid1">
                            <button class="btn mx-auto" >
                                <span class="'.$play.' bi--4xl text-danger"></span>
                            </button>
                        </div>
                    <img src="../i_pdf/img1.jpg" alt="" class="card-img-top" height="200" width="400">
                    <div class="card-body p-0">
                        <h4 class="text-center">MySql livre tuto </h4>
                        <div class="d-md-block d-lg-block d-none">lorem loremlorem loremlorem loremlorem loremlorem lorem</div>
                    </div>
                </div>';
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
</body>
</html>

