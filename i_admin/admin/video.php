<?php
include ("conn.php");
if(isset($_FILES['video']['name']) and $_FILES['video']['error']==0){
	if($_FILES['video']['size']<=500000000){
		$infofich=panthinfo($_FILES['video']['name']);
		$exten=$infofich['extension'];
		$extenfc=array('mp4', 'avi', 'wmv', 'AVI', 'MP4', 'mpg', 'MPG', 'VOB', 'FLV', 'WMV', 'SWF', 'vob');
		if(in_array($exten, $extenfc)){
			move_uploaded_file($_FILES['video']['tmp_name'], '../video/'.basename($_FILES['video']['name']));
			$video=$_FILES['video']['name'];
			echo "OKOKOKOKOKOK";
		}
	}
}
if(empty($video)){
	$video="pasimage.[/contents/1210-compression-jpeg jpeg]";
}
$req=$bdd->prepare('INSERT INTO videos VALUES(:video)');
$req->execute(array( 'video'=>$_POST['video'])) or die (print_r($req->errorInfo()));
if($req){
	echo "Enregistre;ent termine";
}
esle echo "Rien vraiment";
?>