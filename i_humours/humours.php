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
    <div class="d-md-flex d-lg-flex body">
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
        <div class="bg-white d-block w-100">
            <!-- Code ici -->
            <div class="carousel in w-100" data-bs-ride="carousel">
            <?php $rire =[
                [
                    'titre'=>'Rire soigne',
                    'body'=>"Grâce au rire, vous oxygénez votre organisme, réduisez vos tensions
                     musculaires,massez vos côtes,éliminez les résidus se trouvant dans vos poumons et vous augmentez votre 
                     capacité respiratoire"
                ],
                [
                    'titre'=>"Rire est bon",
                    'body'=>"Le rire favorise une bonne circulation sanguine et améliore l'oxygénation du cœur. Par le biais 
                    de différentes études, il a été constaté que le rire diminuait la tension 
                    artérielle au bout de quelques minutes"
                ],
                [
                    'titre'=>"Combat les émotions négatives ",
                    'body'=>"Le rire permet de tenir les émotions négatives à distance. 
                    Il dénoue les tensions, apaise la colère, amoindrit la tristesse. Rire permet en cela de lutter contre la dépression, l’anxiété."
                ],
                [
                    'titre'=>"Rire lutte contre les stress",
                    'body'=>"En riant, le corps sécrète des endorphines qui sont des hormones réduisant le stress
                    et détend nos muscles et d’oxygéner notre cerveau"
                ],
                [
                    'titre'=>"Le rire lutte contre la peur",
                    'body'=>"Le rire permet de garder la peur à distance et de dédramatiser. Impossible de rire et 
                    d’avoir peur en même temps. Pensez-y avant un rendez-vous ou une réunion importante."
                ],
                [
                    'titre'=>"Le rire reduit les douleurs",
                    'body'=>"Le rire produit des endorphines, des hormones associées au plaisir. 
                    En cela, le rire apaise le ressenti de la douleur car les circuits neuronaux de
                     la douleur sont en quelque sorte anesthésiés."
                ],
                [
                    'titre'=>"Le rire renforce les liens",
                    'body'=>"Rire ensemble est un partage d’expériences et de ressenti : 
                    il crée ou renforce les liens. Il permet d’améliorer ou d’entretenir les relations
                     amicales et/ou amoureuses."
                ],
                [
                    'titre'=>"booste les performances sexuelles",
                    'body'=>"Le rire rend séduisant dans un premier temps, conformément à l’adage 
                    “Femme /homme qui rit, à moitié dans son lit”. En outre, il permet le relâchement 
                    musculaire et la détente 
                    mentale favorisant ainsi la jouissance sexuelle."
                ]
                ];?>
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <div class="col-md-5 mx-auto">
                            <div class="mx-1 border-start-0 border border-3  bg-white rounded-end   ">
                                <div class="px-2 border-start border-success border-5 py-2">
                                    <h4 class="text-center">Rire est bon</h4>
                                    <p class="m-0 text-muted">Rire diminue la sensation de douleur et booste le système immunitaire</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach($rires as $rire){
                        echo '<div class="carousel-item">
                        <div class="col-md-5 mx-auto">
                            <div class="mx-1 border-start-0 border border-3  bg-white rounded-end   ">
                                <div class=" border-start border-success border-5 py-2">
                                    <h4 class="text-center">'.$rire["titre"].'</h4>
                                    <p class="m-0 lh-1 small d-md-none d-lg-none px-1 text-muted" style="text-align: justify;">
                                        '.$rire["body"].'
                                    </p> 
                                    <p class="m-0 lh-1 d-none d-lg-block d-md-block px-2 text-muted" style="text-align: justify;">
                                        '.$rire["body"].'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }?>
                </div>
            </div>
            <div class="contenu">
                <ul class="nav nav-tabs col-md-5 mx-auto" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="active nav-link" type="button" id="acceuil-tab" data-bs-toggle="tab" data-bs-target="#acceuil" role="tab" aria-controls="acceuil" aria-selected="true">Messages/Prov</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" type="button" id="images-tab" data-bs-toggle="tab" data-bs-target="#images" role="tab" aria-controls="images" aria-selected="false">Videos/Photos amusantes </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="acceuil" role="tabpanel" aria-labelledby="acceuil-tab">
                        <div class="d-flex justify-content-center my-2 mb-4">
                            <nav class="nav nav-pills bg-dark rounded navbar-expand-lg">
                                <a class="nav-link active" aria-current="page" href="<?php echo $dir.'i_humours/humours';?>">Tous</a>
                                <a class="nav-link" href="<?php echo $dir.'i_humours/humours/amour';?>"><?php echo _("Sms amours");?></a>
                                <a class="nav-link" href="#"><?php echo _("Sms blagues");?></a>
                                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".livre">
                                    <span class="bi-plus text-danger "></span>
                                </button>
                                <div class="collapse livre navbar-collapse">
                                    <ul class="nav justify-content-center pb-2">
                                        <li class="nav-item">
                                            <a href="" class="nav-link"><?php echo _("Proverbes");?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link"><?php echo _("Citations");?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link"><?php echo _("Autres");?></a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="my-auto d-md-none mx-auto">
                                                <input type="search" name="" id="" style="width: 25vh;">
                                                <button class="btn btn-primary m-0"><?php echo _("Rechercher");?></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <i class="bi--2xl bi-search text-primary mx-4 px-4 d-none d-md-block"></i>
                                <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Erotique</a> -->
                            </nav>
                        </div>
                        <div class="mx-1">
                            <!-- Body -->
                            <?php if(isset($_GET['sms'])){
                                    $pages = 'sms_amour.php';
                                }else $pages = 'acceuil.php';
                                include($pages);?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                        <div class="col-md-5 mx-auto">
                            <div class=" my-2 mb-4 ">
                                <nav class="nav nav-pills bg-dark rounded navbar-expand-lg nav-justified">
                                    <a class="nav-link active" aria-current="page" href="#">Tous</a>
                                    <a class="nav-link" href="#"><?php echo _("Photo");?></a>
                                    <a class="nav-link" href="#"><?php echo _("Video");?></a>
                                    <a href="" class="nav-link"><?php echo _("Gift");?></a>
                                    <a href="" class="nav-link"><?php echo _("Autres");?></a>
                                    <i class="bi--xl bi-search text-primary mt-1"></i>
                                    <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Erotique</a> -->
                                </nav>
                            </div>
                        </div>    
                    Images amusantes
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include($dir.'i_menu/footer.php');?>
    </div>
</body>
</html>
