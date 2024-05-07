<?php
// Povezivanje na bazu podataka
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evroliga";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $igrac_id = $_POST['igrac_id'];
    $ime = $_POST['ime'];
    $broj_dresa = $_POST['broj_dresa'];
    $datum_rodjenja = $_POST['datum_rodenja'];

    // SQL upit za unos podataka u tabelu igraci
    $sql = "INSERT INTO igrac (ime, broj_dresa, datum_rodenja) VALUES ('$ime', '$broj_dresa', '$datum_rodjenja')";

    if (mysqli_query($conn, $sql)) {
        echo "Podaci su uspešno dodati u bazu.";
    } else {
        echo "Greška: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Zatvaranje konekcije
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodavanje igrača</title>
</head>
<body>
    <h2>Dodavanje igrača</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label for="igrac_id">Igrac ID:</label><br>
        <input type="text" id="igrac_id" name="igrac_id" required><br>

        <label for="ime">Ime:</label><br>
        <input type="text" id="ime" name="ime" required><br>
        
        <label for="broj_dresa">Broj dresa:</label><br>
        <input type="text" id="broj_dresa" name="broj_dresa" required><br>
        
        <label for="datum_rodjenja">Datum rođenja:</label><br>
        <input type="date" id="datum_rodjenja" name="datum_rodjenja" required><br>
        
        <input type="submit" value="Dodaj igrača">
    </form>
</body>
</html>