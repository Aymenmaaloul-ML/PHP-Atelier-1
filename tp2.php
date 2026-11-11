<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <?php include "navbar.php" ; ?>
<?php 
$var="L2DSI2";
$etat=true;
$an=2026;
$an2=2027;
$res= ($an==$an2) ? "echo l'annee 1 est egal a l'annee 2" : "echo l'annee 1 n'est pas egal a l'annee 2";
print_r($res);
?>
</body>
</html>