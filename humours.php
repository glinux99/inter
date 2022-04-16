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
            <div class="carousel in w-100" data-bs-ride="carousel">
            <?php $rires =[
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
                        <div class="col-md-5 mx-auto py-2">
                            <div class="mx-1 border-start-0 border border-3  bg-white rounded-end   ">
                                <div class="px-2 border-start border-success border-5">
                                    <h4 class="text-center">Rire est bon</h4>
                                    <p class="m-0 text-muted">Rire diminue la sensation de douleur et booste le système immunitaire</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach($rires as $rire){
                        echo '<div class="carousel-item">
                        <div class="col-md-5 mx-auto py-2">
                            <div class="mx-1 border-start-0 border border-3  bg-white rounded-end   ">
                                <div class=" border-start border-success border-5">
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
                    
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include('i_menu/footer.php');?>
    </div>
</body>
</html>

