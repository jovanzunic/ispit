<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evroliga";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['search'])){
  $search = $_POST['search'];
  $sql = "SELECT * FROM igrac WHERE broj_dresa LIKE '%$search%'";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    die("Query failed: " . mysqli_error($conn));
  }
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONTAKT STRANICA</title>
    <style>

form {
            margin: 0 auto;
            max-width: 600px; /* Postavljanje maksimalne širine forme */
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        button {
            padding: 10px; 
            font-size: 18px; 
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box; 
        }
 
        
        body {
            background-image: url('lopta.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat;
        }
          
        h1 {
            background-color: crimson;
            text-align: center;
            text-decoration: underline;
            font-size: 100px;
            border: 30px solid;
            color: black;
            padding: 3%;
            margin: 3%;
        }

        ul {
            text-align: center;
            background-color: crimson;
            text-decoration: underline;
            font-size: 30px;
            border: 30px solid;
            color: black;
            padding: 3%;
            margin-right: 60%;
            margin-left: 6%;
        }
    </style>
</head>
<body>
    <h1>KONTAKT STRANICA</h1>
    <ul>
        <li><a href="projekat.php">POČETNA STRANICA</a></li>
        <li><a href="galerija.php">GALERIJA IGRAČA</a></li>
        <li><a href="kontakt.php">KONTAKT STRANICA</a></li>
    </ul>



    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<label for="igrac_id"></label><br>
<input type="text" id="igrac_id" name="igrac_id" required placeholder="igrac id"><br>

<label for="ime"></label><br>
<input type="text" id="ime" name="ime" required placeholder="ime"><br>

<label for="broj_dresa" ></label><br>
<input type="text" id="broj_dresa" name="broj_dresa" required placeholder="broj dresa"><br>

<label for="datum_rodjenja" placeholder="datum rodjenja"></label><br>
<input type="date" id="datum_rodjenja" name="datum_rodjenja" required><br>

<input type="submit" value="Dodaj igrača">
</form>






<br><br><br>

    <form method="post">
    <input type="text" name="search" placeholder="Trazite igrače po broju dresa">
    <button type="submit">Pretraži</button>
  </form>

  <?php
if (isset($result)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<div style="text-align: center;">'; 
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div style="border: 2px solid black; background-color: white; padding: 10px; margin-left:300px;margin-right:300px;">'; 
            echo '<div style="font-size: 100px;">'; 
            echo "Ime: " . $row["ime"];
            if (isset($row["prezime"]) && $row["prezime"] != '') {
                echo " - Prezime: " . $row["prezime"];
            }
            echo "</div>";
            echo "</div>";
        }
        echo '</div>';
    } else {
        echo '<div style="font-size: 20px;">Nema rezultata.</div>'; 
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    unset($result); 
}


?>

