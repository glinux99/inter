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
        <div class="vrai-body w-100 pt-4 h-100">
            <!-- Code ici -->
            <div class="card-title text-center h1 text-white title-pic">
                <span class="soulign fw-bold">NOS SERVICES</span>
            </div>
            <div class="my-2 position-relative mx-auto">
                <div class="row  d-md-flex d-lg-flex justify-content-center w-100 m-0">

                    <?php  
                    $x=array(array(
                        'titre'=>"Développement des logiciels informatique",
                        'body'=>"Nous savons que les logiciels disponibles sur le marché ne conviennent pas à tout le monde. 
                        Pour cela, nous offrons des solutions personnalisées. Nous construisons des logiciels qui 
                        répondent à vos besoins et reflètent votre idée professionnelle. Que ce soit pour un logiciel 
                        qui sera commercialisé ou un logiciel personnalisé pour votre business, nos experts vous 
                        aideront à atteindre vos buts. "
                    ),array(
                        'titre'=>"Développement Web",
                        'body'=>"Nous développons des sites web qui livrent un message puissant et 
                        établissent une présence professionnelle sur internet. Notre but est de 
                        créer des sites web attrayants qui attirent des visiteurs et engagent une 
                        navigation facile. Nous maitrisons les principales technologies du web
                        (Wordpress, Joomla, Magento...) qui répondent aux besoins de nos clients. 
                        Nous offrons aussi un service d'hébergement Web à des tarifs abordables. "
                    ), array(
                        'titre'=>"Marketing Électronique",
                        'body'=>"Nous pouvons faire doubler ou tripler vos ventes en étudiant les patterns de 
                        vos visiteurs. Nous utilisons les meilleurs techniques pour faire connaître votre site 
                        web et nous garantissons les résultats. Nous offrons aussi des plans pour vous aider à 
                        rentabiliser votre site web et augmenter vos revenues."
                    ), array(
                        'titre'=>"Développement Mobile",
                        'body'=>"Nous développons des applications mobiles pour les téléphones intelligents (Iphone,
                         Android,Windows phone) ainsi que les tablettes Ipad et Android. Commençant d'une simple 
                         idée jusqu'à son stage finale, notre équipe sera votre guide pour chaque étape du 
                         développement. Avez-vous une idée? Transformez-la en action! Contactez notre équipe 
                         dès maintenant."
                    ), array(
                        'titre'=>"Cours et formations en informatique",
                        'body'=>"Nous organisons des formations en informatique... Plusieurs modules sont concu pour aider nos apprenants a avoir un niveau d'expert requis et adapte aux besoins actuels.
                        Toute fois pour des cas precis, nous organisons des formations et cours pour des particuliers a domicile. Notre but est de vous rendre votre autonomie dans le developpement, la conception, l'analyse, et l'utilisation de 
                        l'outil informatique."
                    ), array(
                        'titre'=>"Sécurité informatique",
                        'body'=>"La sécurité informatique consiste à protéger un système informatique contre toute violation, intrusion, dégradation ou vol de données au sein du système d’information.
                        Avec l’essor d’internet, et l’utilisation par la majorité des entreprises et des organisation de processus informatisés, les menaces visant les systèmes d’informations n’ont cessés d’augmenter et de se sophistiquer, faisant aujourd’hui de la sécurité informatique une nécessité pour tous les types de structure"
                    ), array(
                        'titre'=>"Création des designs",
                        'body'=>"Voulez-vous un design performant pour vos photos, vos annonces, vos invitations? Nous vous
                        offrons une possibilité d'avoir acces aux meilleurs designers( design d'espace, design de produits, design graphique, etc) que vous
                        pouvez avoir... Faites-vous aider, nous sommes la."
                    ), array(
                        'titre'=>"Développement et Optimisation de base de données",
                        'body'=>"La base de donnee est une plateforme necessaire au bon fonctionnement de la plupart des applications digitales, des sites web, etc... 
                         Notre equipe ne pourra que se reposer que si il sait que vous avez ete satisfait et n'ont pas parce que le travail a ete fini. Pour nous ce qui est important est votre satisfaction en vous garentissant un meilleur service.
                        Ce que nous faisons pour que votre base de donnees soit impecables"
                    ), array(
                        'titre'=>"Conseils lors d'un achat d'un equipement",
                        'body'=>"Nous pourrions vous aider ou vous assister sur vos achats et vous proposes des equipement
                        adapte a votre budget. Un mauvais choix d'ordinateur ou de n'importe quel autre equipement ne peut
                         que vous faire perdre de l'argent soit parce que le materiel ne remplisse pas vos conditions, 
                         dans ce cas il peut avoir a chaque fois des pannes etc ou un autre il peut etre garde parce
                          qu'il n'est pas peut etre performant..."
                    ), array(
                        'titre'=>"Installations domestiques",
                        'body'=>"Nous faisons tout notre possible pour satisfaire vos besoins en 
                        faisant une instalation qui pourra durer. Il ne vous sera plus utile
                         d'appeler chaque jours votre maintenancier car nous serons toujours a votre 
                         ecoute... Nous choisir, c'est la rapidite et l'efficacite, et suivre les normes..."
                    ));
                    foreach($x as $items){
                        echo '<div class="card my-1 col-md-5  mx-1" style="text-align: justify;">';
                        echo '<div class="card-title h4 mt-3 text-center">'.$items['titre'].'</div>';
                        echo '<div class="card-body">'.$items['body'].'</div></div>';
                    }
                    $logos =['angular.png','apache.png','cybersecu.jpg','cyberstats.jpg','drupal.jpg',
                    'flutter.png','htm-css-js.webp','ia.webp','iosandroid.png','java.png','jmolaa.png',
                    'jquery.jpg','linuxattack.webp','magento.png','mysql.png','oracle.png',
                    'php.png','python.png','sociaux.jpg','wordpress.png','repar.jpg','vsoce.png','adobe.png','office.png'];
                    echo '<div class="bg-white col-md-10 py-3">';
                        foreach($logos as $logo){
                            echo '<img src="'.$dir.'i_img/logos/'.$logo.'" alt="" class="d-lg-none d-md-none mx-1" height="110" width="100"> ';
                            echo '<img src="../i_img/logos/'.$logo.'" alt="" class="d-lg-inline  d-md-inline d-none" height="100" width="120"> ';
                         }
                        ?>
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

