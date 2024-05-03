<?php
    $ad="Barış";
    $soyad="Arduç";
    $yas="37";

    $mesaj="My name is {$ad} {$soyad} I am {$yas} years old.";

    echo $mesaj."<br>";
    echo strlen($mesaj)."<br>";
    echo str_word_count($mesaj)."<br>";
    echo strtoupper($mesaj)."<br>";
    echo strtolower($mesaj)."<br>";
    echo ucfirst($mesaj)."<br>";
    echo str_replace("Barış", "Muhammed",$mesaj);
?>