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
        $('#musique').hide();
        $('#livres').hide();
        $('#humours').hide();
        $('#tutoriels').hide();
    }
    function humour(){
        $('#humours').toggle();
        $('#musique').hide();
        $('#livres').hide();
        $('#tutoriels').hide();
        $('#articles').hide();
    }
    function livre(){
        $('#livres').toggle();
        $('#musique').hide();
        $('#tutoriels').hide();
        $('#humours').hide();
        $('#articles').hide();
    }
    function tutoriel(){
        $('#tutoriels').toggle();
        $('#musique').hide();
        $('#livres').hide();
        $('#humours').hide();
        $('#articles').hide();

    }
    function musique(){
        $('#musiques').toggle();
        $('#tutoriels').hide();
        $('#livres').hide();
        $('#humours').hide();
        $('#articles').hide();
    }
    $(document).load(function(){
        $('#articles').hide();
        $('#humours').hide();
        $('#tutoriels').hide();
        $('#livres').hide();
        $('#musiques').hide();
    });
    function fermer(elmnt){
       $(elmnt).closest('div').remove();
  }
    var name =1;
    function ajouter(parent){
        var select="";
        switch(parent){
            case 'livres_other':
                select ='<option selected>Selectionner</option>\
                        <option value="1">Roman</option>\
                        <option value="2">Bande dessine</option>\
                        <option value="3">Suspences</option>\
                        <option value="2">Sience Fiction</option>\
                        <option value="2">Autobiographie</option>\
                        <option value="2">Essaie</option>\
                        <option value="2">Temoignage</option>\
                        <option value="2">Autres</option>';
                break;
            case 'tutos_other':
                select = '<option value="">Selectionner</option>\
                                                    <option value="">Programmations</option>\
                                                    <option value="">Mathematiques</option>\
                                                    <option value="">Statistiques</option>\
                                                    <option value="">Systeme</option>\
                                                    <option value="">Logiciels</option>\
                                                    <option value="">Jeux Videos</option>\
                                                    <option value="">Intelligence Artificielle</option>\
                                                    <option value="">Electronique</option>\
                                                    <option value="">Adobe PhotoShop</option>\
                                                    <option value="">Arduino</option>\
                                                    <option value="">Reseau Informatique</option>\
                                                    <option value="">Autres</option>';
                break;
            case 'musiques_other':
                select = '<option value="">Danse</option>\
                                                    <option value="">Gospel</option>\
                                                    <option value="">Jazz</option>\
                                                    <option value="">Metal</option>\
                                                    <option value="">R&B</option>\
                                                    <option value="">Reggae</option>\
                                                    <option value="">Rock</option>\
                                                    <option value="">Soul</option>\
                                                    <option value="">Musique Folklorique</option>\
                                                    <option value="">Musique electronique</option>\
                                                    <option value="">Folk</option>\
                                                    <option value="">Funk</option>\
                                                    <option value="">Musique contemporaine</option>\
                                                    <option value="">Country</option>\
                                                    <option value="">Musique baroque</option>\
                                                    <option value="">Blues</option>\
                                                    <option value="Musique classique">Musique Classique</option>\
                                                    <option value="">Comedie Musicale</option>';
                break;
        }
        var className= "element"+name;
        $('#'+parent).append('<div class="'+className+'">\
            <button type="button" class="btn-close text-reset position-absolute my-2 me-3" onclick="fermer(this)"  style="left:0px;"></button>\
        <div class="row border-top border-2 pt-3">\
                                        <div class="col-4">\
                                            <div class="label mt-2">\
                                                <label for="">Categorie</label>\
                                            </div>\
                                            <div class="label mt-2">\
                                                <label for="">Titre/chanson</label>\
                                            </div>\
                                            <div class="label mt-3">\
                                                <label for="">Auteur</label>\
                                            </div>\
                                            <div class="mt-4">\
                                                <label for="">\
                                                    Fichier\
                                                </label>\
                                            </div>\
                                        </div>\
                                        <div class="col-8">\
                                            <div class="my-1">\
                                                <select class="form-select" aria-label="Selectionner une categorie" name="categorie'+name+'">\
                                                    '+select+'\
                                                </select>\
                                            </div>\
                                            <div class="my-1">\
                                                <input type="text" class="form-control" placeholder="Titre de la chanson" required name="titre'+name+'">\
                                            </div>\
                                            <div class="my-1">\
                                                <input type="text" class="form-control" placeholder="Auteur de la chanson" name="auteur'+name+'">\
                                            </div>\
                                            <div class="my-1">\
                                                <input type="file" class="form-control" name="file'+name+'">\
                                            </div>\
                                        </div>\
                                    </div>\
                </div>');
                                    name++;
    }
</script>
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
                            <button class="btn btn-success">Ajouter <span class="bi-plus-circle"></span></button>
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
    <div class="footer">
        <?php include($dir.'i_menu/footer.php');?>
    </div>
</body>
</html>

