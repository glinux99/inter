                            <div class="card col-md-7 mx-auto">
                                <div class="title">Bonne nouvelle</div>
                                <div class="card-body p-2 text-justify">
                                    <p class="card-text">
                                    Vous etes amoureux de la poesie, des poemes d'amour? Sachez-bien qu'il est possible de partager
                                  votre savoir et votre passion ensemble aux autres. Toute fois, vos textes doivent être rédigés dans un francais correct et respectueux
                                    </p>
                                </div>
                            </div>
                            <div class="mx-1">
                                <div class="col-md-10 border-start border-2 border-success ps-2 mx-auto">
                                    <h4><?php echo _("Quelques de nos ribriques");?></h4>
                                </div> 
                                <?php $ribriques =[
                                    [
                                        'titre'=>"Sms d'amour",
                                        'body'=>"Si vous voulez satisfaire l'amour de votre vie, n'hesitez pas a parcourir notre ribrique 
                                        consacre aux sms, poemes d'amour faites par des hauteurs connus ou par les internautes. Chassez que vous 
                                        pouvez aussi nous faire par de votre contenu a ajouter",
                                        'image'=>"i_pdf/img1.jpg",
                                        'lien'=>'#'
                                    ],
                                    [
                                        'titre'=>"Sms d'amour",
                                        'body'=>"Si vous voulez satisfaire l'amour de votre vie, n'hesitez pas a parcourir notre ribrique 
                                        consacre aux sms, poemes d'amour faites par des hauteurs connus ou par les internautes. Chassez que vous 
                                        pouvez aussi nous faire par de votre contenu a ajouter",
                                        'image'=>"i_img/inter2.jpg",
                                        'lien'=>'#'
                                    ],
                                    [
                                        'titre'=>"Sms d'amour",
                                        'body'=>"Si vous voulez satisfaire l'amour de votre vie, n'hesitez pas a parcourir notre ribrique 
                                        consacre aux sms, poemes d'amour faites par des hauteurs connus ou par les internautes. Chassez que vous 
                                        pouvez aussi nous faire par de votre contenu a ajouter",
                                        'image'=>"i_pdf/img1.jpg",
                                        'lien'=>'#'
                                    ],
                                    [
                                        'titre'=>"Sms d'amour",
                                        'body'=>"Si vous voulez satisfaire l'amour de votre vie, n'hesitez pas a parcourir notre ribrique 
                                        consacre aux sms, poemes d'amour faites par des hauteurs connus ou par les internautes. Chassez que vous 
                                        pouvez aussi nous faire par de votre contenu a ajouter",
                                        'image'=>"i_pdf/img1.jpg",
                                        'lien'=>'#'
                                    ],
                                ] ;?>
                                <div class="row p-0 m-0 mx-auto d-flex justify-content-center">
                                    <?php foreach($ribriques as $ribrique){
                                        echo '<div class="card mb-3  col-md-5 mx-1 p-0">
                                        <div class="row g-0 p-0 m-0">
                                            <div class="col-4 d-flex">
                                                <img src="'.$dir.$ribrique['image'].'" class="img-fluid rounded-start imge d-none d-md-block d-lg-block" alt="amour" style="height: 40vh!important;width:100%">
                                                <img src="'.$dir.$ribrique['image'].'" class="img-fluid rounded-start imge d-md-none d-lg-none" alt="amour" style="height: 20ex!important;width:100%">
                                            </div>
                                            <div class="col-8 overflow-hidden d-none d-md-block d-lg-block " style="height: 40vh!important;">
                                                <div class="card-body  p-0 overflow-hidden ">
                                                    <h5 class="card-title text-center mt-1 mb-0">'.$ribrique["titre"].'</h5>
                                                    <p class="card-text text-justify px-1 overflow-hidden m-0 " style="max-height: 27.6vh!important;">'.$ribrique["body"].'</p>
                                                    <p class="d-flex justify-content-center "><button type="button" class="btn btn-success py-1 px-3 m-0">Lire plus </button></p>
                                                </div>
                                            </div>
                                            <div class="col-8 overflow-hidden d-md-none d-lg-none " style="height: 25ex!important;">
                                                <div class="card-body  p-0 overflow-hidden ">
                                                    <h5 class="card-title text-center mt-1 mb-0">'.$ribrique["titre"].'</h5>
                                                    <p class="card-text text-justify px-1 overflow-hidden m-0 " style="max-height: 16.3ex!important;">'.$ribrique["body"].'</p>
                                                    <p class="d-flex justify-content-center "><button type="button" class="btn btn-success py-1 px-3 m-0 mt-2">Lire plus </button></p>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>';
                                    }?>
                                </div>
                                <div class="d-flex justify-content-center my-2">
                                    <button class="btn btn-dark px-3 me-1">Back</button>
                                    <button class="btn btn-success px-3">Next</button>
                                </div>
                            </div>