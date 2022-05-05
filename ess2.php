
<?php
    $pub ='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'.$_POST["titre"].'</title>
    </head>
    <body>
        '. $_POST['titre'].'
        <div class="container">
            '. $_POST['description'].'
        </div>
    </body>
    </html>';
    $file ="ess3.php";
    $fopen =(fopen($file,'w'));
    fwrite($fopen, $pub);
    fclose($fopen);