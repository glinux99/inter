<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <?php include($dir.'i_menu/menu_p.php');?>
    <div class="d-md-flex d-lg-flex">
        <div class="menu-g col-1">
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
        <div class="w-100 h-100">
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
                            <button class="btn btn-success ess" type="button" data-bs-toggle="modal" data-bs-target="#editorArticle">Ajouter <span class="bi-plus-circle"></span></button>
                            <button class="btn btn-success">Modifier <span class="bi-pencil-square"></span></button>
                            <button class="btn btn-danger">Supprimer <span class="bi-trash"></span></button>
                            <div class="article text-start">
                                <h4 class="text-start border-start border-success border-3 ps-3">Liste des articles rescents</h4>
                                <ul class="article-body mx-4 list-unstyled">
                                    <?php while($x<5){
                                        echo '<li class="list-unstyled-item">
                                            <a href="" class="nav-link p-0 m-0 d-inline">Bombardement en Ukraine</a></li>';
                                        $x++;
                                    }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="humours" style="display: none;" class="card shadow ">
                        <div class="card-header">
                            Faites sourire quelqu'un
                        </div>
                        <div class="card-body row w-100">
                            <div class="row col-md-6 mx-auto">
                                <div class="col-6">
                                    <label for="">Selection Ribrique</label>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 ">
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
                                <textarea name="" id="" cols="40" rows="3"></textarea>
                                <div class="input-group mb-3 px-0 pt-1">
                                  <span class="input-group-text" id="input1">Auteur</span>
                                  <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nom de l'auteur"
                                    aria-label="Username"
                                    aria-describedby="input1"
                                  />
                                </div>
                                <div class="col-6 mx-auto pb-2 mb-2 border-3 border-bottom ">
                                    <button class="btn btn-success">Publier <span class="bi-plus-circle"></span></button>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <!-- <button class="btn btn-success">Ajouter <span class="bi-plus-circle"></span></button> -->
                                <button class="btn btn-success">Modifier <span class="bi-pencil-square"></span></button>
                                <button class="btn btn-danger">Supprimer <span class="bi-trash"></span></button>
                                <div class="text-start">
                                    Mes publications les plus recents
                                    <ul class="article-body mx-4 list-unstyled">
                                        <?php while($y<5){
                                            echo '<li class="list-unstyled-item">
                                                <a href="" class="nav-link p-0 m-0">Bombardement en Ukraine</a></li>';
                                            $y++;
                                        }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-1 ">
                    <div class="card shadow col-6" style="height: 23ex;" onclick="livre();">
                        <a href="#livres">
                            <div class="card-header">
                                Livres
                            </div>
                            <div class="card-body text-center">
                                <span class="bi-file-pdf-fill bi--8xl"></span>
                            </div>
                        </a>
                    </div>
                    <div class="card shadow col-6" style="height: 23ex;" onclick="tutoriel();">
                        <a href="#tutoriels">
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
                <div id="livres" style="display: none;" class="card shadow ">
                    <div class="card-header">
                        Publier vos livres en version pdf
                    </div>
                    <div class="card-body card-group p-1">
                        <div class="card col-md-6 shadow py-3 px-1 m-0">
                           <form action="" method="post">
                            <div class="main">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="label mt-2">
                                            <label for="">Categorie</label>
                                        </div>
                                        <div class="label mt-2">
                                            <label for="">Titre/chanson</label>
                                        </div>
                                        <div class="label mt-3">
                                            <label for="">Auteur</label>
                                        </div>
                                        <div class="mt-4">
                                            <label for="">
                                                Fichier
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="my-1">
                                            <select class="form-select" aria-label="Selectionner une categorie">
                                                <option selected>Selectionner</option>
                                                <option value="1">Roman</option>
                                                <option value="2">Bande dessine</option>
                                                <option value="3">Suspences</option>
                                                <option value="2">Sience Fiction</option>
                                                <option value="2">Autobiographie</option>
                                                <option value="2">Essaie</option>
                                                <option value="2">Temoignage</option>
                                                <option value="2">Autres</option>
                                            </select>
                                        </div>
                                        <div class="my-1">
                                            <input type="text" class="form-control" placeholder="Titre de la chanson" required>
                                        </div>
                                        <div class="my-1">
                                            <input type="text" class="form-control" placeholder="Auteur de la chanson" required>
                                        </div>
                                        <div class="my-1">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div id="livres_other" class="position-relative">

                           </div>
                           <div class=" mx-auto pb-2 mb-2 border-3 border-bottom pt-2">
                                <button class="btn btn-success">Publier <span class="bi-plus-circle"></span></button>
                                <button class="btn btn-success" onclick="ajouter('livres_other');">Ajouter plus<span class="bi-plus-circle"></span></button>
                            </div>
                           </form>
                        </div>
                        <div class="card shadow">
                            <!-- <button class="btn btn-success">Ajouter <span class="bi-plus-circle"></span></button> -->
                            <div class="d-inline my-2">
                                <button class="btn btn-success">Modifier <span class="bi-pencil-square"></span></button>
                                <button class="btn btn-danger">Supprimer <span class="bi-trash"></span></button>
                            </div>
                            <div class="text-start px-1">
                                Mes publications les plus recents
                                <ul class="article-body mx-4 list-unstyled">
                                    <?php while($y<5){
                                        echo '<li class="list-unstyled-item">
                                            <a href="" class="nav-link p-0 m-0">Bombardement en Ukraine</a></li>';
                                        $y++;
                                    }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tutoriels" style="display: none;" class="card shadow ">
                    <div class="card-header">
                        Publier vos tutoriels
                    </div>
                    <div class="card-body card-group p-1">
                        <div class="card col-md-6 shadow py-3 px-1 m-0">
                           <form action="" method="post">
                                <div class="main">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="label mt-2">
                                                <label for="">Categorie</label>
                                            </div>
                                            <div class="label mt-2">
                                                <label for="">Titre/chanson</label>
                                            </div>
                                            <div class="label mt-3">
                                                <label for="">Auteur</label>
                                            </div>
                                            <div class="mt-4">
                                                <label for="">
                                                    Fichier
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="my-1">
                                                <select class="form-select" aria-label="Selectionner une categorie">
                                                    <option value="">Selectionner</option>
                                                    <option value="">Programmations</option>
                                                    <option value="">Mathematiques</option>
                                                    <option value="">Statistiques</option>
                                                    <option value="">Systeme</option>
                                                    <option value="">Logiciels</option>
                                                    <option value="">Jeux Videos</option>
                                                    <option value="">Intelligence Artificielle</option>
                                                    <option value="">Electronique</option>
                                                    <option value="">Adobe PhotoShop</option>
                                                    <option value="">Arduino</option>
                                                    <option value="">Reseau Informatique</option>
                                                    <option value="">Autres</option>
                                                </select>
                                            </div>
                                            <div class="my-1">
                                                <input type="text" class="form-control" placeholder="Titre de la chanson" required>
                                            </div>
                                            <div class="my-1">
                                                <input type="text" class="form-control" placeholder="Auteur de la chanson" required>
                                            </div>
                                            <div class="my-1">
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tutos_other" class="position-relative">

                                </div>
                                <div class=" mx-auto pb-2 mb-2 border-3 border-bottom pt-2">
                                        <button class="btn btn-success">Publier <span class="bi-plus-circle"></span></button>
                                        <button class="btn btn-success" onclick="ajouter('tutos_other');">Ajouter plus<span class="bi-plus-circle"></span></button>
                                    </div>
                           </form>
                        </div>
                        <div class="card shadow">
                            <!-- <button class="btn btn-success">Ajouter <span class="bi-plus-circle"></span></button> -->
                            <div class="d-inline my-2">
                                <button class="btn btn-success">Modifier <span class="bi-pencil-square"></span></button>
                                <button class="btn btn-danger">Supprimer <span class="bi-trash"></span></button>
                            </div>
                            <div class="text-start px-1">
                                Mes publications les plus recents
                                <ul class="article-body mx-4 list-unstyled">
                                    <?php while($y<5){
                                        echo '<li class="list-unstyled-item">
                                            <a href="" class="nav-link p-0 m-0">Bombardement en Ukraine</a></li>';
                                        $y++;
                                    }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mx-1 shadow m-1" onclick="musique();">
                    <a href="#musiques">
                        <div class="card-header">
                            Musiques
                        </div>
                        <div class="card-body text-center">
                            <span class="bi-music-note-list bi--8xl"></span>
                        </div>
                    </a>
                </div>
                <div id="musiques" style="display: none;" class="card shadow ">
                    <div class="card-header">
                        Musiques en lives
                    </div>
                    <div class="card-body card-group p-1">
                        <div class="card col-md-6 shadow py-3 px-1 m-0">
                           <form action="" method="post">
                               <div class="main">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="label mt-2">
                                                <label for="">Categorie</label>
                                            </div>
                                            <div class="label mt-2">
                                                <label for="">Titre/chanson</label>
                                            </div>
                                            <div class="label mt-3">
                                                <label for="">Auteur</label>
                                            </div>
                                            <div class="mt-4">
                                                <label for="">
                                                    Fichier
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="my-1">
                                                <select class="form-select" aria-label="Selectionner une categorie">
                                                    <option value="">Danse</option>
                                                    <option value="">Gospel</option>
                                                    <option value="">Jazz</option>
                                                    <option value="">Metal</option>
                                                    <option value="">R&B</option>
                                                    <option value="">Reggae</option>
                                                    <option value="">Rock</option>
                                                    <option value="">Soul</option>
                                                    <option value="">Musique Folklorique</option>
                                                    <option value="">Musique electronique</option>
                                                    <option value="">Folk</option>
                                                    <option value="">Funk</option>
                                                    <option value="">Musique contemporaine</option>
                                                    <option value="">Country</option>
                                                    <option value="">Musique baroque</option>
                                                    <option value="">Blues</option>
                                                    <option value="Musique classique">Musique Classique</option>
                                                    <option value="">Comedie Musicale</option> 
                                                </select>
                                            </div>
                                            <div class="my-1">
                                                <input type="text" class="form-control" placeholder="Titre de la chanson" required>
                                            </div>
                                            <div class="my-1">
                                                <input type="text" class="form-control" placeholder="Auteur de la chanson" required>
                                            </div>
                                            <div class="my-1">
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div id="musiques_other" class="position-relative">

                               </div>
                               <div class=" mx-auto pb-2 mb-2 border-3 border-bottom pt-2">
                                    <button class="btn btn-success">Publier <span class="bi-plus-circle"></span></button>
                                    <button class="btn btn-success" onclick="ajouter('musiques_other');">Ajouter plus<span class="bi-plus-circle"></span></button>
                                </div>
                           </form>
                        </div>
                        <div class="card shadow">
                            <!-- <button class="btn btn-success">Ajouter <span class="bi-plus-circle"></span></button> -->
                            <div class="d-inline my-2">
                                <button class="btn btn-success">Modifier <span class="bi-pencil-square"></span></button>
                                <button class="btn btn-danger">Supprimer <span class="bi-trash"></span></button>
                            </div>
                            <div class="text-start px-1">
                                Mes publications les plus recents
                                <ul class="article-body mx-4 list-unstyled">
                                    <?php while($y<5){
                                        echo '<li class="list-unstyled-item">
                                            <a href="" class="nav-link p-0 m-0">Bombardement en Ukraine</a></li>';
                                        $y++;
                                    }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dialog">
        <div class="modal fade" id="editorArticle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editorArticle" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header ">
                <h5 class="modal-title 
                " id="editorArticleBackdropLabel">Ajouter un Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form action="" method="post">
                     <div class="container">
                         <div class="p-2">
                            <label for="">Titre</label>
                            <input type="text" class="form-control" placeholder="Titre de l'article que vous voulez publier">
                         </div>
                         <div class="p-2">
                            <textarea name="description" id="summernote" ></textarea>
                         </div>
                     </div>
                     <div class="d-flex">
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-success">Visionner avant</button>
                            <button type="submit" class="btn btn-danger">Publier</button>
                            <button type="submit" class="btn btn-dark text-muted" class="close" data-dismiss="modal">Annuler</button>
                        </div>
                     </div>
                 </form>
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

