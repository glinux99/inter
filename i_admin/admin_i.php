<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>Document</title>
</head>
<script>
    function article(){
        $('#articles').toggle();
        $('#humours').hide();
    }
    function humour(){
        $('#humours').toggle();
        $('#articles').hide();
    }
    $(document).load(function(){
        $('#articles').hide();
        $('#humours').hide();
    });
</script>
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
        <div class="w-100">
            <!-- Code ici -->
            <div class="entete">
                <h4 class="text-center text-uppercase">Administrateur de site</h4>
            </div>
            <div class="col-md-9 mx-auto my-2 text-center"> 
                <div class="row mx-1 " id="article_humour">
                    <div class="card shadow col-6" style="height: 23ex;" onclick="article();">
                        <a href="#articles">
                            <div class="card-header">
                                Articles
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-chat-square-text bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                    <div class="card shadow col-6" style="height: 23ex;" onclick="humour();">
                        <a href="#humours">
                            <div class="card-header">
                                Humours
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-emoji-heart-eyes-fill bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="" data-bs-spy="scroll" data-bs-target="#article_humour" data-bs-offset="0" tabindex="0">
                    <div id="articles" style="display: none;" class="card shadow">
                        <div class="card-header">
                            Editer/Publier un article
                        </div>
                        <div class="card-body px-1">
                            <button class="btn btn-success">Ajouter <span class="bi-plus-circle"></span></button>
                            <button class="btn btn-success">Modifier <span class="bi-pencil-square"></span></button>
                            <button class="btn btn-danger">Supprimer <span class="bi-trash"></span></button>
                            <div class="article text-start">
                                <h4 class="text-start border-start border-success border-3 ps-3">Liste des articles rescents</h4>
                                <ul class="article-body mx-4 list-unstyled">
                                    <?php while($x<5){
                                        echo '<li class="list-unstyled-item">
                                            <a href="" class="nav-link p-0 m-0">Bombardement en Ukraine</a></li>';
                                        $x++;
                                    }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="humours" style="display: none;" class="card shadow">
                        <div class="card-header">
                            Faites sourire quelqu'un
                        </div>
                        <div class="card-body">
                            <div class="card shadow m-2 p-2">
                                <div class="input-group">
                                    <label for="">Selection Ribrique</label>
                                    <div class="mb-3 ms-2">
                                      <select class="form-select" aria-label="Default select example">
                                        <option value="" disabled>Messages</option>
                                        <option value="1" selected>Sms amour</option>
                                        <option value="2">Sms blague</option>
                                        <option value="3">Proverbes</option>
                                        <option value="">Citations</option>
                                        <option value="">Autres</option>
                                        <option value="" disabled>Video/Photo</option>
                                        <option value="">Photo</option>
                                        <option value="">Video</option>
                                        <option value="">Gift</option>
                                        <option value="">Autres</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-1 ">
                    <div class="card shadow col-6" style="height: 23ex;">
                        <a href="">
                            <div class="card-header">
                                Livres
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-file-pdf-fill bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                    <div class="card shadow col-6" style="height: 23ex;">
                        <a href="">
                            <div class="card-header">
                                Tutoriels
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-file-pdf bi--8xl"></span>
                                <span class="bi-camera-video bi--8xl"></span>
                                <span class="bi-chat-square-text bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card mx-1 shadow m-1">
                    <a href="">
                        <div class="card-header">
                            Musiques
                        </div>
                        <div class="card-body text-center">
                            <span class="bi-music-note-list bi--8xl"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include($dir.'i_menu/footer.php');?>
    </div>
</body>
</html>

