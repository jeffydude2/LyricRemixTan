<?php
$username = "Jade Abuda";
$greeting = "Welcome to our store!";
$offer =[
    "Lippy", 2, 1000, 700
];
$usual_price = $offer[2];
$offer_price = $offer[3];
$saving= $usual_price - $offer_price;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <title>Document</title>  
</head>
<body>
    <?php include('header.php')?>

    <p><?= $greeting . " " . $username?></p>
    <p class = saving><?= $saving?></p>
    <p>Today we have a Promo buy <?= $offer[1]?> of our <?= $offer[0]?> product and get 30% off your purchase!</p>
    <p>Before: <?= $offer[2]?> After: <?=$offer[3]?></p>


</body>
</html>
