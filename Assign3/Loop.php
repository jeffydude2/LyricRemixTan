<?php
declare(strict_types=1); 

$products = [
    "geiko" => ["price" => 10.99, "stock" => 8],
    "Cesca" => ["price" => 15.50, "stock" => 25],
    "Crying City" => ["price" => 8.75, "stock" => 5]
];

$taxRate = 12;

function get_reorder_message(int $stockLevel): string {
    return ($stockLevel < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $rate = 0): float {
    return ($price * $quantity) * ($rate / 100);
}

$counter = 1;
$album = 5;
$price = 10.99;
$username = "Jade Abuda";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<p>Welcome to the music store, <?= $username?>!</p>
<p>
<?php
$week = "Weekday";

$message = match ($week) {
    "Weekday" => "We are open on Weekdays!",
    "Weekend" => "We are closed sorry!",
    default => "Come visit us!"
};

echo $message;
?>
</p>
<h1>Music Store</h1>


<h2>Items Available</h2>

<table>
    <tr>
        <th>Albums</th>
        <th>Price</th>
        <th>Stock Available</th>
        <th>Reorder</th>
        <th>Total Stock Value </th>
        <th>Tax Due</th>
    </tr>

    <?php
    foreach ($products as $albums => $data): 
    ?>

    <tr>
        <td><?= $albums?></td>

        <td><?= $data["price"] ?></td>

        <td><?= $data["stock"] ?></td>

        <td><?= get_reorder_message($data["stock"]) ?></td>

        <td><?= get_total_value($data["price"], $data["stock"]) ?></td>

        <td><?= get_tax_due($data["price"], $data["stock"], $taxRate) ?></td>
    </tr>

    <?php endforeach; ?>
</table>
    <h2>Today's Trivia!</h2>
    <p>
    <?php
    $favsinger = "cryingcity";

    switch ($favsinger) {
    case "cryingcity":
        echo "Your favorite singer is cryingcity!";
        break;
    case "cesca":
        echo "Your favorite singer is cesca!";
        break;
    case "geiko":
        echo "Your favorite singer is geiko!";
        break;
    default:
        echo "Your favorite singer is neither cryingcity, cesca, or geiko!";
    }
    ?>
    </p>
    <p>
    <?php $t = 14; if ($t < 20) { 
        echo "Have a nice Afternoon Jamming session!"; 
    } 
    elseif($t > 10){ 
        echo "Have a nice Mortning Jamming session!"; 
    } 
    else{ 
        echo "Have a nice Jamming session!"; 
        } 
    ?>
    </p>
<?php include('footer.php'); ?>
</html>
