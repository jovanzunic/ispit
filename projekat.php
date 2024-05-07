<?php
$konekcija = mysqli_connect('localhost', 'root', '');
mysqli_select_db($konekcija,'evroliga');

if($konekcija){
    echo"uspesna konekcija";
}
else{
    echo "neuspesna konekcija";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> EVRO LIGA</h1>
    <ul>
        <li><a href="projekat.php" >POCETNA STRANICA</a> </li>
        <li><a href="galerija.php" >GALERIJA IGRACA</a> </li>
        <li><a href="kontakt.php" >KONTAKT STRANICA</a> </li>
    </ul>
    <P>   Dobrodošli na stranicu posvećenu Evroligi - jednom od najprestižnijih takmičenja u evropskoj košarci! Evroliga okuplja najbolje košarkaške timove iz različitih zemalja širom Evrope, pružajući uzbudljive utakmice i spektakularne sportske trenutke.

Evroliga je ne samo arena za košarku visokog nivoa, već i mesto gde se rađaju sportske legende. Ova stranica je posvećena upravo tim legendama - igračima čiji su podvizi ostavili dubok trag u istoriji ovog takmičenja. Kroz galeriju igrača, imate priliku da istražite njihove karijere, statistike, i da se divite njihovim najboljim trenucima na terenu.

Galerija igrača nije samo šetnja kroz istoriju Evrolige, već i prilika da se inspirišete njihovim veštinama, posvetom i strašću koju su uložili u svoj sport. Bez obzira da li su bili majstori driblinga, sjajni šuteri ili nezamenjivi lideri na terenu, ovi igrači su ostavili neizbrisiv pečat na košarkaškom terenu.

Pored galerije igrača, ova stranica će vam pružiti i sveobuhvatan pregled o Evroligi - od istorije i formata takmičenja do aktuelnih timova i rezultata. Saznajte više o najnovijim dešavanjima, ključnim utakmicama i najzanimljivijim pričama iz sveta evropske košarke.

Uživajte u istraživanju sveta Evrolige kroz ove stranice i budite deo velikog košarkaškog nasleđa koje nas inspiriše i oduševljava generacijama!</P>

<h2> TROFEJ EVRO LIGE </h2>
<img src="trofej.jpg">

<p>
Trofej Evrolige, najprestižnija nagrada u evropskoj košarci, predstavlja simbol izuzetnosti i sportskog dostignuća u elitnom evropskom takmičenju. Počeci trofeja datiraju još iz 1958. godine kada je osnovano Evropsko klupsko prvenstvo, preteča današnje Evrolige. Od tada, trofej je postao simbol vrhunskog takmičenja, inspirišući igrače i navijače širom kontinenta.
Kroz godine, mnogi legendarni igrači i timovi su podigli ovaj trofej, stvarajući nezaboravne trenutke i inspirišući nove generacije košarkaša širom sveta. Trofej Evrolige ostaje simbol snage, izdržljivosti i izuzetnosti u košarci, te se nastavlja njegova važnost u definisanju najboljih trenutaka u istoriji evropskog sporta.

</p>

<div class="faq">
        <h2>Često postavljana pitanja</h2>
        <div class="question">
            <p>Šta je evropski stil košarke?
            <br>
            Evropski stil košarke naglašava taktiku, timsku igru i strategiju, za razliku od individualnih sposobnosti u američkom stilu. Više o tome možete pročitati u našem tekstu.</p>
        </div>
        <div class="question">
            <p>Kako mogu pristupiti galeriji igrača?
            <br>Galeriju igrača možete pronaći klikom na link "GALERIJA IGRAČA" u navigaciji.</p>
        </div>
        <div class="question">
            <p>Kada krece playoff evro lige ?
            <br>Datumi početka playoff-a Evrolige obično variraju svake sezone. Uobičajeno je da se playoff faza odvija u aprilu i maju, nakon završetka regularnog dela sezone. Međutim, tačni datumi mogu se razlikovati u zavisnosti od rasporeda takmičenja i drugih faktora.</p>

            <div class="question">
            <p>Koliko novca dobija osvajac evrolige?
            <br>
Nagrade za osvajača Evrolige se mogu razlikovati iz godine u godinu, ali obično su značajne. Osvajač Evrolige, pored prestiža i časti, obično dobija i finansijsku nagradu. Tačan iznos nagrade može varirati u zavisnosti od sponzorstava, televizijskih prava i drugih faktora.</p>
        </div>
        </div>
       
   
</body>
</html>


<style>
   



.faq .question p {
    border:solid black 
    font-size: 30px; 
   
}


     img { 
         float: left;
            width: 900px; 
            height: 622px;; 
            margin-left: 100px; 
            margin-right: auto;

            border: 30px solid gold;
        }

    <style>
    body {
        background-image: url('stark.jpg'); /* Postavljanje pozadinske slike */
            background-size: cover; /* Postavljanje veličine slike tako da pokrije cijelu površinu tijela */
            background-repeat: no-repeat;
        }
          
        

        h1 {   background-color:crimson;
             text-align: center;
             text-decoration: underline;
            font-size: 100px;
            border:  30px solid;
            color:black;
            padding: 3%;
            margin: 3%;}

            h2 {   background-color:crimson;
             text-align: center;
             text-decoration: underline;
            font-size: 50px;
            border:  20px solid;
            color:black;
            padding: 3%;
            margin: 3%;}
                    
        p {  overflow: hidden; background-color:crimson;
            font-size: 30px;
            border:  30px solid;
            color:black;
            padding: 3%;
            margin: 3%;}
                  
        ul{ text-align: center;:center;
            background-color:crimson;
            text-decoration: underline;
            font-size:30px;
            border:  30px solid;
            color:black;
            padding: 3%;
            margin-right:60%;
            margin-left:6%;
        }
</style>