<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>administrateur de sites</title>
</head>
<!-- A enlever -->
<style>
    .idbody{
    min-height: 402px!important;
}
</style>
<body>
<?php include($menup);?>
    <div class="container-fluid idbody mb-4">
        <div class="row col-lg-10 mx-auto m-5">
            <div class="card col-lg-6 shadow-lg">
                <div class="card-title">
                    <ul class="nav nav-tabs mx-auto" id="" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="card-log" data-bs-toggle="tab" href="#card-login" role="tab" aria-controls="card-login" aria-selected="true"><?php echo _("Creation compte");?></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="username-log" data-bs-toggle="tab" href="#username" role="tab" aria-controls="username" aria-selected="false"><?php echo _("Username login");?></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content m-auto" id="">
                        <div class="tab-pane fade show active" id="card-login" role="tabpanel" aria-labelledby="card-log">
                            <p class="text-center"><span class="bi-person h1"></span></p>
                            <p class="text-center"><?php echo _("Creer un compte");?></p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="nom" id="" class="form-control mb-2" placeholder="<?php echo _("Votre nom ");?>" required>
                                    <input type="text" name="prenom" id="" class="form-control mb-2" placeholder="<?php echo _("Votre prenom");?>" required>
                                    <input type="email" name="email" id="" class="form-control mb-2" placeholder="<?php echo _("Votre adresse email");?>" required>
                                    <input type="password" name="psswd" id="" class="form-control mb-2" placeholder="***********************" required>
                                </div>
                                <div class="d-flex flex-columns">
                                    <div class="">
                                        <input class="form-check-input text-white mr-2" type="checkbox" id="check">
                                    </div>
                                    <div>
                                        <?php echo _("Acceptez nos politiques d'utilisations de vos donnees");?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success"><?php echo _("Envoyer");?></button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="username" role="tabpanel" aria-labelledby="username-log">
                            <p class="text-center"><span class="bi-person h1"></span></p>
                            <p class="text-center"><?php echo _("Connectez-vous a votre compte");?></p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" id="" class="form-control mb-2" placeholder="<?php echo _("Votre nom d'utilisateur");?>" required>
                                    <input type="password" name="psswd" id="" class="form-control mb-2" placeholder="***********************" required>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success"><?php echo _("Connection");?></button>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <div class="text-start">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <input class="form-check-input text-white" type="checkbox" id="check">
                                                </li>
                                                <li class="list-inline-item">
                                                    Se souvenir de moi
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <p class="text-end">
                                            <a href="">Mot de passe oublie?</a>
                                        </p>
                                    </div>
                                </div>
                                <p class="text-center">
                                    <i>Terms of Privacy</i>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-lg-6 d-none d-lg-block">
                ddd
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
