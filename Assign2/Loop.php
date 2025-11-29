<?php
$counter = 1;
$album= 5;
$price = 10.99;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css" />

</head>


<body>
    <?php

    $week = "Weekday";

    $message = match ($week) {
    "Weekday" => "We are open on Weekdays!",
    "Weekend" => "We are closed sorry!",

    default => "Come visit us!"
};
?>
    <h1>Music Store</h1>
    <h2>Items Available</h2>
    <h2 class = "seller">Best Seller!</h2>
    <h2>Album: Crying City</h2>

    <img src="cryingcity.jpg" alt="Cryingcity" width="250" height="250">
    <h2>Album: Cesca</h2>
    <img src="cesca.jpg" alt="Cryingcity" width="250" height="250">
    <h2>Album: geiko</h2>
    <img src="geiko.jpg" alt="Cryingcity" width="250" height="250">
    <h3>Prices !</h3>
    <p>
        <?php
        while ($counter <= $album){
            echo $counter;
            echo ' Album cost $';
            echo $price * $counter;
            echo '<br>';
            $counter++;
        }
        ?>
    </p>
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
    <h2>Farewell!</h2>
    <p>
        <?php
            $t = 14;

        if ($t < 20) {
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
</body>
<?php include('footer.php'); ?>
</html>