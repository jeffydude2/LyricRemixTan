<?php
$name = "Jade";
$greeting = "Welcome back!";
$product = "Lippy";
$cost = 1000;
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

    <?php
    if ($name == TRUE){
        echo $greeting. " " . $name;
    }

    for ($counter=1; $counter <= 10; $counter++) {
        $subtotal= ($cost * $counter);
        $discount = ($cost/100) * ($counter *4); 
        $totals = [$counter => ($subtotal - $discount)];
    }
    
    ?>
    
    <table>
        <tr>
            <th>Packs</th>
            <th>Price</th>
        </tr>
    </table>
    <?php include('footer.php')?>    
</body>
</html>