<?php
$naam = $_POST["naam"];
$fouten = $_POST["fouten"];
$norm = 3;
$norm = $_POST["norm"];



if($naam == ""){
    echo "<li>Je hebt je naam niet ingevuld</li>";
 } else {
    $naam = strtolower($naam);
    echo "Je naam is: ", ucfirst($naam);
    echo "<br>";
}



if (strlen($fouten) > 2){
    echo "Niet meer dan 2 cijfers invullen. ";
} else if($fouten == ""){
    echo "<li>Je hebt je aantal fouten niet ingevuld</li>";
 } else {
    echo "Je fouten zijn: ", $fouten;
    echo "<br>";
    $cijfer = 10-($fouten/$norm);
    
    $afronden = round($cijfer, 1);
    echo "De norm is " . $norm . "<br>";
    echo "Het cijfer is: " . $afronden;
}
?>

<br>
<a href="1a.php">Terug naar formulier.</a>