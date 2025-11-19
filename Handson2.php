<?php 
$title  = "Lucky";
$artist = "Crying City";
$mood   = "Yearning";

//NUMERCAL VALUES
$preChorusRepeats = 2;  
$chorusRepeats    = 3;  
$verseCount       = 1;  


$nouns = [
    "days", "thoughts", "guy", "man", "person", "life",
    "friend", "tickets", "artists", "home", "trend"
]; // nouns of the song

$verbs = [
    "counting", "feel", "sleeping", "found", "falling",
    "started", "live", "lose", "know", "see", "get"
];// Verbs of the song

$adjectives = [
    "quiet", "favorite", "loud", "lucky", "overthinking", "surprised"
]; // Adjectives of the song

$preChorus = [
    "Oh, oh, my",
    "Why am I" . " ". $adjectives[5],
    "I’ve been" . " ".$verbs[0] . " ".$nouns[0] . " ". "go by", 
    $nouns[1] . " ".$verbs[1] . " ".$adjectives[2] . " "."without you", 
    "I" . " ".$verbs[8] . " "."I should be" . " ".$verbs[2] . " "."soon", 
    "Oh, oh, my",
    "What a" . " ".$nouns[2] ." ". "I like", 
    "The " . " ".$nouns[3] . " "." I found was just my type", 
    "Hope that I’m not" ." ". $verbs[4],
    "Think I’ve" ." ". $verbs[5] ." ". $adjectives[4] . " "."things", 
]; // Prechorus with replaced nouns, verbs, adjectives
$chorus = [
    "I’m so " . $adjectives[3] . " someone like me",
    "Couldn’t ever ask for more",
    "Showed I’m enough cause",
    "I " . $verbs[8] . " that I’m loved",          
    "Sometimes I wanna " . $verbs[6] . " a",
    $adjectives[0] . " " . $nouns[5] . " with you", 
    "'Cause you’re my " . $adjectives[1],          
    "That I could never " . $verbs[7]             
]; // chorus with replaced nouns, verbs, adjectives
$verse = [
    "You’re more than a " . $nouns[6],              
    "I can tell you whatever",
    "Change myself around you",
    "'Cause I " . $verbs[8] . " that I’m " . $nouns[9], 
    "You’re more than a " . $nouns[10],           
    "Feels like I’ve known you forever",
    "Never feel alone cause you " . $verbs[8] . " me the most",
]; // verse with replaced nouns, verbs, adjectives

$bridge = [
    "Never imagined me this way",
    "Never imagined me this way"
]; //normal bridge
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lyric Remix</title>
    <style>
        body {
            font-family: 'Georgia', serif; 
            background: linear-gradient(to bottom,rgb(159, 161, 116), rgb(77, 65, 25));  /* Gradient matching the vibe of the song */
            color:rgb(255, 255, 255); 
            margin: 0;
            padding: 20px;
            text-align: center; 
            line-height: 1.6;
        }
        p {
            margin: 10px 0;

            opacity: 0.9;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); 
        }


    </style>
</head>
<body>
    <img src = "cryingcity.jpg">
    <h1><?=$title?></h1>
    <h3>by: <?=$artist?></h3>
    <p>Mood: <?=$mood?></p>
    <h4>[Pre Chorus]</h4>
    <p><?= $preChorus[0]?></p>
    <p><?= $preChorus[1]?></p>
    <p><?= $preChorus[2]?></p>
    <p><?= $preChorus[3]?></p>
    <p><?= $preChorus[4]?></p>
    <p><?= $preChorus[5]?></p>
    <p><?= $preChorus[6]?></p>
    <p><?= $preChorus[7]?></p>
    <p><?= $preChorus[8]?></p>
    <p><?= $preChorus[9]?></p> 
    <h4>[Chorus]</h4>
    <p><?= $chorus[0]?></p>
    <p><?= $chorus[1]?></p>
    <p><?= $chorus[2]?></p>
    <p><?= $chorus[3]?></p>
    <p><?= $chorus[4]?></p>
    <p><?= $chorus[5]?></p>
    <p><?= $chorus[6]?></p>
    <p><?= $chorus[7]?></p>
    <h4>[Verse]</h4>
    <p><?= $verse[0]?></p>
    <p><?= $verse[1]?></p>
    <p><?= $verse[2]?></p>
    <p><?= $verse[3]?></p>
    <p><?= $verse[4]?></p>
    <p><?= $verse[5]?></p>
    <p><?= $verse[6]?></p>
    <h4>[Chorus]</h4>
    <p><?= $chorus[0]?></p>
    <p><?= $chorus[1]?></p>
    <p><?= $chorus[2]?></p>
    <p><?= $chorus[3]?></p>
    <p><?= $chorus[4]?></p>
    <p><?= $chorus[5]?></p>
    <p><?= $chorus[6]?></p>
    <p><?= $chorus[7]?></p>
    <h4>[Bridge]</h4>
    <p><?= $bridge[0]?></p> 
    <p><?= $bridge[1]?></p> 
    <h4>[Pre Chorus]</h4>
    <p><?= $preChorus[0]?></p>
    <p><?= $preChorus[1]?></p>
    <p><?= $preChorus[2]?></p>
    <p><?= $preChorus[3]?></p>
    <p><?= $preChorus[4]?></p>
    <p><?= $preChorus[5]?></p>
    <p><?= $preChorus[6]?></p>
    <p><?= $preChorus[7]?></p>
    <p><?= $preChorus[8]?></p>
    <p><?= $preChorus[9]?></p>
    <h4>[Chorus]</h4>
    <p><?= $chorus[0]?></p>
    <p><?= $chorus[1]?></p>
    <p><?= $chorus[2]?></p>
    <p><?= $chorus[3]?></p>
    <p><?= $chorus[4]?></p>
    <p><?= $chorus[5]?></p>
    <p><?= $chorus[6]?></p>
    <p><?= $chorus[7]?></p>
</body>
</html>
