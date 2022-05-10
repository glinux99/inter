
    $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: "Description",
                height: 200,
                tabsize: 10,
                    });
            });
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