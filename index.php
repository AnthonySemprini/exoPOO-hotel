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

$Hotel1 = new Hotel("Le bouclier d'or ****","Strasbourg","7 rue du bouclier 67000 Strasbourg");
$Hotel2 = new Hotel("Villa d'est ****","Strasbourg","2 rue Jaques Kable 67000 Strasbourg");
$Hotel3 = new Hotel("Hannong ****","Strasbourg","8 rue du 22 novembre 67000 Strasbourg");
$Hotel4 = new Hotel("Cathedrale ***","Strasbourg","12 place de la cathedral 67000 Strasbourg");
$Hotel5 = new Hotel("Chateau de l'Ill *****","Ostawald","12 quai Heidth 67200 Ostwald");
$Hotel6 = new Hotel("Sofitel *****","Strasbourg","2 place saint pierre le jeune 67000 Strasbourg");

echo $Hotel1->getInfos();
echo $Hotel2->getInfos();
echo $Hotel3->getInfos();
echo $Hotel4->getInfos();
echo $Hotel5->getInfos();
echo $Hotel6->getInfos();



?>

</body>
</html>