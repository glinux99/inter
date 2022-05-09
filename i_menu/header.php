<?php session_start();
echo $_SESSION['menu'];
 $dir ='../';
if(isset($index))
    $dir = ''; 
?>
<link rel="stylesheet" href="<?php echo $dir;?>vendor/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $dir;?>vendor/dist/css/w3.css">
<script src="<?php echo $dir;?>vendor/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $dir;?>vendor/dist/js/jquery.min.js"></script>
<script src="<?php echo $dir;?>vendor/dist/js/parallax.js"></script>
<link rel="stylesheet" href="<?php echo $dir;?>vendor/icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="<?php echo $dir;?>css/css.css">
<link rel="stylesheet" href="<?php echo $dir;?>css/css.js">