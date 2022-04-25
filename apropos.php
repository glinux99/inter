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
            <div class="d-md-block  d-lg-block d-none position-sticky top-0">
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
        <div class="vrai-body parallax-window w-100 pt-4" data-parallax="scroll" data-image-src="i_img/inter7.jpg">
            <!-- Code ici -->
            <div class="card-title text-center h1 text-white title-pic">
                <span class="soulign">A PROPOS</span>
            </div>
            <div class="my-2 position-relative">
                <!-- <div class="position-absolute bg-white" style="-webkit-clip-path: polygon(72% 74%, 100% 27%, 100% 100%, 5% 100%);
                clip-path: polygon(72% 74%, 100% 27%, 100% 100%, 5% 100%);
                  z-index: 2;
                  background-color: #226dbc; height: 100%;">
                </div> -->
                <div >
                    <div class="card px-3 my-2" style="text-align: justify;">
                        <p class="m-0">
                            Pour ce qui concernent Interlab, Interlab est une societe mis au point par des informaticiens 
                            pour aider d'autres utilisateurs sur des problemes qui sont informatiques. ce site web a ete mis au
                            point par la premiere graduat des Ingenieurs en Informatique de l'ISTA/GOMA de l'annee 2018-2019. Donc ce site est caractere academique (Nous recrutons, nous formons, nous ameliorons a partir d'une base qui est <span class="interlab">interlab Inc.</span> ):
                        </p>
                        <p class="m-0">Nous sommes une entreprise de services informatiques dedies aux entreprises et aux particuliers.
                            Nous agissons dans les domaines de la fourniture, l'installation, de la maintenance, de la securisation et de la conception de votre systeme informatique. Nous pouvons vous offrir ainsi un suivi de votre parc reseaux afin d'optimiser votre strategie d'entreprise ou vous aider a avancer en etant un particulier.
                            Notre equipe commerciale pourra aussi vous conseiller dans l'achat des equipement adequats avec votre domaine de travail ou de recherche qui sont fiables et performants.
                        </p>
                        <p class="m-0" >
                            Nos experts techniques prendront egalement en charge tous les depannages informatiques ainsi que les installations de logiciles, vous assurant ainsi service apres vente efficace et reactif.
                        Ils pourront egalement vous accompagner dans votre developpement informatique et des contrats de maintenance.
                        </p>    
                        <div class="col-lg-6 mx-auto shadow-lg px-2 my-4">
                            <h4 class="text-center">NOS ATOUTS:</h4>
                            <ul>
                                <li>Une equipe pluridisciplinaire, dynamique et plurielle</li>
                                <li>Une societe independante vis-a-vis des marques pour un conseil reelement objectif</li>
                                <li>Des prestations multi-marques</li>
                                <li>Le respect des engagements contractuels</li>
                                <li>Un conseil a tous les niveaux des interventions</li>
                                <li>un service reactif et de proximite</li>
                            </ul>
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

