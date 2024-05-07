<?php

$niz = array("Jovana", "Marko", "Petar", "Ivana", "Andrej");


echo "<table border='1'>";
echo "<tr><th>Br.</th><th>Ime</th></tr>";



$niz = array("jabuka", "banana", "kruška", "lubenica");

print_r($niz);
echo "<br>";




unset($niz[1]); 
 array_push($niz, "malina");
print_r($niz);
$niz = array("jabuka", "banana", "kruška", "lubenica");
foreach($niz as $key => $value){
    echo "Redni broj: " . $key . " => " . $value . "<br>";
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava za posao</title>
</head>
<body>

<h2>Prijava za posao</h2>

<form action="procesiranje.php" method="post">
    <label for="ime">Ime:</label><br>
    <input type="text" id="ime" name="ime" required><br><br>

    <label for="prezime">Prezime:</label><br>
    <input type="text" id="prezime" name="prezime" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <input type="checkbox" id="dodatni_posao" name="dodatni_posao">
    <label for="dodatni_posao">Prijavi se za dodatni posao</label><br><br>

    <input type="checkbox" id="radno_iskustvo" name="radno_iskustvo">
    <label for="radno_iskustvo">Radno iskustvo</label><br><br>

    <label for="grad">Grad:</label><br>
    <select id="grad" name="grad">
        <option value="Beograd">Beograd</option>
        <option value="Novi Sad">Novi Sad</option>
    </select><br><br>

    <label for="cv">CV:</label><br>
    <input type="file" id="cv" name="cv" accept=".pdf, .doc, .docx"><br><br>

    <input type="submit" value="Pošalji">
    <input type="reset" value="Resetuj">
</form>
<img id="slika" src="logo.jpg" alt="Logo">

<button onclick="promeniSliku('logo.jpg')">Prva slika</button>
<button onclick="promeniSliku('g.jpg')">Druga slika</button>

<script>
function promeniSliku(novaSlika) {
    document.getElementById("slika").src = novaSlika;
}
<div id="slika"  src="logo.jpg" alt="Logo">
    <button onclick= "promeniSliku('logo.jpg')">
    <button onclick="promenoSliku('g.jpg')">
    <script>
        function promeniSliku(novaSlika){
            document.getElementById("slika").src=novaslika;

        }

    </script>
</script>
</body>
</html>