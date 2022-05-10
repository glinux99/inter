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
<script src="<?php echo $dir;?>editor/dist/summernote-lite.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<link rel="stylesheet" href="<?php echo $dir;?>editor/dist/summernote-lite.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" integrity="sha512-ZbehZMIlGA8CTIOtdE+M81uj3mrcgyrh6ZFeG33A4FHECakGrOsTPlPQ8ijjLkxgImrdmSVUHn1j+ApjodYZow==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->