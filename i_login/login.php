<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>Document</title>
</head>
<body style="background-image: url('<?php echo $dir;?>i_img/inter8');">
    <?php include($dir.'i_menu/menu_p.php');?>
    <div class="vrai-body" >
            <!-- Code ici -->
        <div class="col-md-10 mx-auto my-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-title">
                        <ul class="nav nav-tabs mx-auto" id="" role="tablist">
                            <?php if(isset($_GET['inscription'])){
                                $inscr = 'active';
                                $login ='';
                                $inscrs ='';
                                $logins = 'show active';
                            }else{
                                $inscr = '';
                                $login ='active';
                                $inscrs ='show active';
                                $logins = '';
                            }?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php echo $login;?>" id="username-log" data-bs-toggle="tab" href="#username" role="tab" aria-controls="username" aria-selected="false"><?php echo _("Username login");?></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php echo $inscr;?>" id="card-log" data-bs-toggle="tab" href="#card-login" role="tab" aria-controls="card-login" aria-selected="true"><?php echo _("Creation compte");?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content m-auto" id="">
                            <div class="tab-pane fade <?php echo $logins;?>" id="card-login" role="tabpanel" aria-labelledby="card-log">
                                <p class="text-center"><span class="bi-person h1"></span></p>
                                <p class="text-center"><?php echo _("Creer un compte");?></p>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" name="nom" id="" class="form-control mb-2" placeholder="<?php echo _("Votre nom ");?>" required>
                                        <input type="text" name="prenom" id="" class="form-control mb-2" placeholder="<?php echo _("Votre prenom");?>" required>
                                        <input type="email" name="email" id="" class="form-control mb-2" placeholder="<?php echo _("Votre adresse email");?>" required>
                                        <input type="password" name="psswd" id="" class="form-control mb-2" placeholder="***********************" required>
                                    </div>
                                    <div class="d-flex flex-columns mt-3">
                                        <div class="">
                                            <input class="form-check-input text-white mr-2" type="checkbox" id="check">
                                        </div>
                                        <div cl>
                                            <?php echo _("Acceptez nos politiques d'utilisations de vos donnees");?>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success"><?php echo _("Envoyer");?></button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade <?php echo $inscrs;?>" id="username" role="tabpanel" aria-labelledby="username-log">
                                <p class="text-center"><span class="bi-person h1"></span></p>
                                <p class="text-center"><?php echo _("Connectez-vous a votre compte");?></p>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" name="username" id="" class="form-control mb-2" placeholder="<?php echo _("Votre nom d'utilisateur");?>" required>
                                        <input type="password" name="psswd" id="" class="form-control mb-2" placeholder="***********************" required>
                                    </div>
                                    <div class="d-flex justify-content-center mb-3">
                                        <button type="submit" class="btn btn-success"><?php echo _("Connection");?></button>
                                    </div>
                                    <div class="row p-0">
                                        <div class="col-6 d-flex">
                                            <input class="form-check-input text-white" type="checkbox" id="check">
                                            <span>Se souvenir de moi</span>
                                        </div>
                                        <div class="col-6 p-0">
                                            <a href="#" class="nav-link p-0 m-0 text-center"><?php echo _("Mot de passe oublie");?></a>
                                        </div>
                                    </div>
                                    <p class="text-center mt-3">
                                        <i>Terms of Privacy</i>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card d-md-block d-lg-block d-none">
                    <div class="card">
                        <img src="<?php echo $dir;?>i_img/logos/bg6.jpg" alt="" class="card-img ">
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

