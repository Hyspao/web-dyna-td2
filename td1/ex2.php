<h1>PHP dans HTML</h1>
<?php
$size=$_GET["size"]??"10";
$color=$_GET["color"]??"black";
$message=$_GET["message"]??"Bonsoir";
?>
<div style="font-size: <?=$size?>px;color:<?=$color?>"><?=$message?></div>
<form method="GET">
    <label for="message">Modifier le message : </label>
    <input type="message" value="" name="message" id="message">
    <input type="submit" value="Valider">
</form>
<form method="GET">
    <label for="size">Modifier la taille du texte : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>
<form method="GET">
    <label for="color">Modifier la couleur du texte : </label>
    <input type="color" value="" name="color" id="color">
    <input type="submit" value="Valider">
</form>
