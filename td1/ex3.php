<h1>Exercice 3</h1>
<?php
$size=$_POST["size"]??"10";
$color=$_POST["color"]??"black";
$message=$_POST["message"]??"Bonsoir";
$update=$_POST['update']??null;

if ($update=="+") {
    $size=$size+1;
} elseif ($update=="-"){
    $size=$size-1;
}

echo "<div style='font-size: {$size}px; color: {$color};'> Message de taille {$size}px en {$message}</div>";

?>

<form method="POST">
    <label for="message">Modifier le message : </label>
    <textarea name="message" id="message"><?=$message?></textarea>
    <label for="size">Modifier la taille du texte : </label>
    <input type="number" value="" name="size" id="size">
    <label for="color">Modifier la couleur du texte : </label>
    <input type="color" value="" name="color" id="color">
    <input type="submit" value="Valider">
    <input type="submit" name="update" value="+">
    <input type="submit" name="update" value="-">
</form>