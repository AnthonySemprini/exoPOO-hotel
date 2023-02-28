<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo Hotel POO</title>
</head>
<body>
<?php

spl_autoload_register(function($class_name){    
    require $class_name . ".php";
});

$Hotel1 = new Hotel("Le bouclier d'or","Strasbourg","7 rue du bouclier 67000 Strasbourg",80);
$Hotel2 = new Hotel("Villa d'est","Strasbourg","2 rue Jaques Kable 67000 Strasbourg",55);
$Hotel3 = new Hotel("Hannong","Strasbourg","8 rue du 22 novembre 67000 Strasbourg",95);
$Hotel4 = new Hotel("Cathedrle","Strasbourg","12 place de la cathedral 67000 Strasbourg",40);

echo $Hotel1->getInfos();
echo $Hotel2->getInfos();
echo $Hotel3->getInfos();
echo $Hotel4->getInfos();



?>

</body>
</html>