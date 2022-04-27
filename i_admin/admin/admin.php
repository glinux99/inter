<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>A propos de InterLab Inc.</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>


<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../bootstrap/dist/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/dropdown.js"></script>
	<script type="text/javascript" src="../bootstrap/js/popover.js"></script>
	<script type="text/javascript" src="../bootstrap/js/scrollspy.js"></script>
	<script type="text/javascript" src="../bootstrap/js/collapse.js"></script>
	<script type="text/javascript" src="../bootstrap/js/transition.js"></script>
	<script type="text/javascript" src="../nicEdit.js"></script>
	<script type="text/javascript" src="scripts/wysiwyg.js"></script>
	<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
	<script type="text/javascript">
			WYSIWYG.attach('interlab', full);
	</script>
	<script type="text/javascript">
     bkLib.onDomLoaded(function() {
          var interlab = new nicEditor();
           interlab.setPanel('TitreEdit');
             interlab.addInstance('montitre');
             
     });
</script>
<link rel="stylesheet" type="text/css" href="../css/css.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script
src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script
src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<body>
<div id="bod">
<div >
<!--<?php include("menu/u_menup.html");?>-->
<?php include("menu/menup.php");?>
<div class="col-lg-12"></div>
<div class="col-lg-12" id="space"></div>
<div class="row">
<div class="col-lg-3">

<?php include("../menu/menug.php");?>
</div>
<div class="col-lg-9" id="cent">
	<br>
	<center><b>Bienvenu sur l'administrateur de votre site web:</b></center><hr style="height: 1px" color="green">
	<div class="row">
		<div class="col-lg-6">
		Pour modifier un article:<br>
		<form method="post" action="admin.php">
		<div class="row">
		<div class="col-lg-9">
            <input type="text" name="titre" class="form-control" placeholder="Recherche une page a modifier" required></div>
            <button type="submit" class="btn btn-success">Recherche</button>
            </div>
            </form>
        	<?php
include ("../config/conn.php"); 
	$vartitre="";
if(isset($_POST['titre'])){
	$vartitre=$_POST['titre'];
}else if(isset($_POST['titrepage'])){
	$vartitre=$_POST['titrepage'];
}

	if($vartitre==""){
		$val=" ";?>
 
			<?php
}else {
	#fonction de recherche des pages dans la database
	$val="hidden";
	?><div>Les pages trouves sont:<br></div>
	<?php
	$req=$data->prepare("SELECT * FROM pagepub WHERE MATCH(titre) AGAINST(?)");
	$req->execute(array($vartitre));
	while($reqq=$req->fetch()){
		echo "<b><a href="."../".$reqq['lien']."?id=admin".">".$reqq['titre']."</a></b><br>";
	}
}

?>    
<!-- Partie de publication des pages webs avec un style bien mise en forme-->
<div style="visibility: <?php echo $val;?>">
<br><br>	Pour publier un article, vous devez completer des informations suivantes:<br>
			<form method="post" action="../pages/pagehtml.php" enctype="multipart/form-data" >
				<label>Titre de la page:</label><br>
				<div id="TitreEdit" style="width: 100%"></div>
				<div style="display: block; background-color: white">
				<textarea type="text" name="titre" class="form-control" id="montitre" ></textarea></div><br>
				<label>Le corp de la page:</label>
			<br>

		<textarea id="interlab" style="min-width:80%;height:200px;" name="texte">
					<h3>Sous titre de la page: </h3>
			<tt>
				<blockquote>
						<p>Votre paragraphe ici</p>
				</blockquote>

				<h4>Interlab Inc. </h4>
			</tt>
		</textarea>
				<input type="radio" name="">
				<label>Ajouter une image:</label><br>
				<input type="file" name="image"><br>
				<input type="radio" name="" >
				<label>Ajouter une video:</label><br>	
				<input type="file" name="video"><br>
				<button type="submit" class="btn btn-success">Voir avant la publication</button> <button type="submit" class="btn btn-danger" style="width: 200px">Publier la page</button>
			</form></div><br>

		</div><center>
		<div class="col-lg-6" id="gosp">Ajouter une musique Chrestienne dans Gospel Song sur le serveur<br>
			<form method="post" action="../config/audio.php" enctype="multipart/form-data" >
			<label for="titregosp">Titre :</label><br>
			<input type="text" name="titre" class="form-control" style="width: 400px;" placeholder="titre de la musique">
			<label for="titregosp">Nom de l'auteur :</label><br>
			<input type="text" name="auteur" class="form-control" style="width: 400px;" value="">
			<input type="file" name="audio" class="form-control" style="width: 400px;">
			<!--champ pour les chansons numero 2-->
			<label for="titregosp">Titre2 :</label><br>
			<input type="text" name="titre2" class="form-control" style="width: 400px;" placeholder="titre de la musique">
			<label for="titregosp">Nom de l'auteur2 :</label><br>
			<input type="text" name="auteur2" class="form-control" style="width: 400px;" value="">
			<input type="file" name="audio2" class="form-control" style="width: 400px;">
					<br>
			<center><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-music">Publier vos musiques</span></button>		</form></center><br><hr><center>
		Ajouter des tutoriels et cours:<br>
		<form action="../config/pdf.php" method="post" enctype="multipart/form-data">
		<label>Titre: </label>
		<input type="text" name="titre" class="form-control" style="width: 400px" placeholder="Titre du fichier">
		<label>Nom de l'auteur: </label>
		<input type="text" name="auteur" style="width: 400px" placeholder="Nom de l'auteur" class="form-control">
			<input type="file" name="pdf" style="width: 400px"  class="form-control">
		<br>
			<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-book">Publier des livres</span></button>
			</form></center>
		</div>
	</div>
</div>

</div>
</div>
</body>
<div class="col-lg-12" id="space"></div>
<footer>
	<?php include("../menu/footer.php"); ?>
</footer>
</html>
