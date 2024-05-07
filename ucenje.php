
<?php
$niz_imena = array("Jovana", "Marko", "Petar", "Ivana", "Andrej");

// Brojač koji će se koristiti za redne brojeve
$brojac = 1;

// Ispis tabele
echo "<table border='1'>";
echo "<tr><th>Redni broj</th><th>Ime</th></tr>"; // Header tabele

// Prolazak kroz niz imena i ispisivanje u tabeli
foreach ($niz_imena as $ime) {
    echo "<tr><td>$brojac</td><td>$ime</td></tr>";
    $brojac++; // Povećanje brojača za redni broj
}
echo "</table>"; // Zatvaranje tabele




$niz=array("jabuka","banana","kruska","lubenica");
print_r ($niz);

$niz = array("jabuka", "banana", "kruska", "lubenica");

$index=array_search("kruska",$niz);
if($index  !== false){
    array_splice($niz,$index,1,"malina");
}
print_r($niz);

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="GET">
            <h3>Unesi ime</h3>
            <input type="text" name="ime" required="required" placeholder="Unesi ime">
            <input type="text" name="prezime" required="required" placeholder="Unesi prezime">
            <input type="submit" value="Submit">
        </form>
    </div>

    <div>
        <form method="GET">
            <h3>DOKAZI DA SI COEK </h3>
            <label> ime: </label>
            <input type="ime" name="ime" required="required" placeholder="jebem ti dete">
            <label> prezime: </label>
            <input type="prezime" name="prezime" required="required" placeholder="jebem ti decu">

            <br><br><br> 

            <label> muski </label>
            <input type="radio" name="zenski" value="muski">
            <label> zenski </label>
            <input type="radio" name="muski" value="zenski">
            <br><br><br> 
            <label>aj reci nes ako smes siso</label>
            <br><br><br> 
            <input type="textarea" name="komentar" rows="5" columns="10">
            <input type="submit" value="si siguran">
            <br><br><br> 
            <label>radno iskustvo</label>
            <br><br><br> 
            <label>da</label>
            <input type="radio" name="radno_iskustvo" value="da">
            <label>ne</label>
            <input type="radio" name="radno_iskustvo" value="da">
            <br><br><br> 

            <label for="grad">Grad:</label><br>
    <select id="grad" name="grad">
        <option value="Beograd">Beograd</option>
        <option value="Novi Sad">Novi Sad</option>
        <option value="krnjaca">krnjaca</option>
   </select>
   <br><br><br>
    <label for="cv">CV:</label><br>
    <input type="file" id="cv" name="cv" accept=".pdf, .doc, .docx"><br><br>

    <input type="submit" value="Pošalji">
    <input type="reset" value="Resetuj">
</form>
  <div id="slika"  src="logo.jpg" alt="Logo">
    <button onclick= "promeniSliku('logo.jpg')">
    <button onclick="promenoSliku('g.jpg')">
    <script>
        function promeniSliku(novaSlika){
            document.getElementById("slika").src=novaslika;

        }

    </script>


  
</form>
</body>
</html>

