<h1>Exercice 2</h1>
<a href="?message=Rouge&size=12&couleur=red">Rouge en 12</a><br>
<a href="?message=Vert&size=14&couleur=green">Vert en 14</a><br>
<a href="?message=Bleu&size=16&couleur=blue">Bleu en 16</a><br>

<?php
$size=$_GET["size"]??"10";
$color=$_GET["color"]??"black";
$message=$_GET["message"]??"Bonsoir";
echo "<div style='font-size: {$size}px; color: {$color};'> Message de taille {$size}px en {$message}</div>";
?>

<form method="GET">
    <label for="message">Modifier le message : </label>
    <input type="text" value="" name="message" id="message">
    <label for="size">Modifier la taille du texte : </label>
    <input type="number" value="" name="size" id="size">
    <label for="color">Modifier la couleur du texte : </label>
    <input type="color" value="" name="color" id="color">
    <input type="submit" value="Valider">
</form>
