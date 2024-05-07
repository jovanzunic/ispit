<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerija igraca</title>
    
</head>
<body>
    <h1>DVORANA SLAVNIH</h1>
    <ul>
        <li><a href="projekat.php" >POCETNA STRANICA</a> </li>
        <li><a href="galerija.php" >GALERIJA IGRACA</a> </li>
        <li><a href="kontakt.php" >KONTAKT STRANICA</a> </li>
    </ul>
    <div class="marquee-container">
        <div class="marquee">
            <h3> Dobrodošli na našu stranicu! Ovde možete pronaći najnovije vesti iz sveta košarke.
            Pogledajte naše galerije sa slikama najboljih igrača i klubova, kao i video snimke
            najuzbudljivijih trenutaka iz prošlih sezona. Ostanite sa nama za sve što se dešava
            u Evroligi.Takodje ne zaboravite da popunite formular na kontaknt stranicai radi poboljsanja stranice!.</h3>
        </div>
    </div>

<p>Evropska košarka je poznata po svom prepoznatljivom stilu igre koji se razlikuje od američke košarke, kako u profesionalnoj ligi tako i na međunarodnoj sceni. Evo nekoliko karakteristika evropskog stila košarke:

Taktički pristup: Evropska košarka često naglašava taktiku, timsku igru i strategiju. Umjesto naglaska na individualnim sposobnostima, evropski treneri često grade timsku igru koja uključuje pasove, pokrete bez lopte i timsku odbranu.
<br><br>Univerzalnost igrača: Evropski igrači često imaju širi set vještina i sposobnosti. Mnogi igrači mogu igrati na više pozicija, što omogućava veću fleksibilnost u formiranju tima i taktikama.
<br><br>Igra u polu-kontrafazi: Evropska košarka često koristi koncept polu-kontrafaze, gdje se tim brzo prebacuje iz odbrane u napad ili obratno, što zahtijeva brze odluke i preciznost u izvođenju.
<br><br>Šutiranje izvana: Evropski timovi često se oslanjaju na šutiranje izvana i preciznost u šutu. Ovo se često vidi u timovima koji koriste tzv. "tranzicijsku igru" kako bi brzo postigli poene, a takođe se koristi i kao sredstvo za razbijanje zonske odbrane.
<br>Fizička igra pod obručem: Iako evropska košarka naglašava taktiku i tehnike, fizička igra pod obručem i dalje igra važnu ulogu. Borba za poziciju, skakanje u napadu i odbrani, kao i zadržavanje protivnika pod kontrolom, sastavni su dijelovi evropskog stila igre.
<br><br><br>U sklopu ovog evropskog stila košarke, galerija najboljih igrača ove sezone predstavlja vrhunsku izložbu talenata koji su uspjeli da se istaknu svojim vještinama i doprinesu svojim timovima. Ova galerija pruža uvid u raznovrsnost i kvalitet igrača koji su obilježili sezonu, od mladih talenata do iskusnih lidera, predstavljajući najbolje od evropske košarke.

</p>
<video width="640" height="300" controls>
    <source src="montage.mp4" type="video/mp4">
    </video>
<div>
<table border="3"class="table1">
            <tr>
                <td rowspan="6"  >REKORDI IGRACA  </style> </td>
            </tr>
            <tr>
                <td>Nigel Hayes-Davis</td>
          
                <td>50 poena u 1 utakmici</td>
            </tr>
            <tr>
                <td >Mike James</td>
            
                <td>najvise poena u evro ligi (4.444) </td>
            </tr>

                <td>Tanoka Bird</td>
             
                <td>indeks korisnosti do cak (63%)</td>
            <tr>
                <td>Nikola Milutinov</td>
             
                <td> Najvise skokova u napdau (16)</td>
            </tr>
            <tr>
                <td>Codi Miller Mcintyre</td>
              
                <td>Najvise asistencija na utamici(20) </td>
            </tr>
        </table>
        <table class="table2" border="3">
            <tr>
                <td rowspan="6"  >KLUBSKI REKORDI  </style> </td>
            </tr>
            <tr>
                <td>Real Madrid</td>
          
                <td> najveci buzet 40.000.000 evra</td>
            </tr>
            <tr>
                <td >Real Madrid</td>
            
                <td>najtrofejniji klub (10 titula) </td>
            </tr>

                <td>Partizan-Phanatanikos</td>
             
                <td> njaveci broj gledalaca(22.567)</td>
            <tr>
                <td>Fenerbahce</td>
             
                <td> Najvise trojki (28)</td>
            </tr>
            <tr>
                <td>Efes-Real Madrid</td>
              
                <td>Najduza utakmica(4 produzetka) </td>
            </tr>
        </table>
        </div>
    <div id="slike">
        <img src="campazzo.jpg" alt="Campazzo">
    </div>
    <div id="dugmad">
        <button onclick="prethodnaSlika()"><===</button>
        <button onclick="sledecaSlika()">===></button>
    </div>
    <style>

table{
    
    background-color:black;
     text-align: center;
    font-size: 20px;
    border:  20px solid red;
    color:white;
    padding: 3%;
    margin: 3%;
   

}



body{
    background-image: url('stark.jpg'); 
    background-size: cover; 
    background-repeat: no-repeat;
}
h1{   background-color:crimson;
     text-align: center;
     text-decoration: underline;
    font-size: 100px;
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
    margin-left:6%; }
img {
    display: block;
    margin: 0 auto;
    max-width: 100%;
    height: auto;
}
button {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}
p {  overflow: hidden; background-color:pink;
    font-size: 20px;
    border:  30px solid;
    color:black;
    padding: 3%;
     margin: 10%;}
     
.container {
white-space: nowrap; /}


.table1, .table2 {
display: inline-block; 
vertical-align: top; 
margin-right: 20px; 
}


.marquee-container {
width: 100%;
overflow: hidden;}

.marquee-container {
overflow: hidden;
white-space: nowrap;
}

.marquee {
display: inline-block;
animation: marquee-animation 30s linear infinite; 
}

.text {
display: inline-block;

}

@keyframes marquee-animation {
0% { transform: translateX(100%); } 
100% { transform: translateX(-100%); } 

}
h3{font-size: 20px;
    border:  10px solid white;
    color:white;
    padding: 1%;
    font-size: 20px;
}

</style>
    <script>
    
        var slike = ["campazzo.jpg", "mike.jpg", "miler.jpg", "chima.jpg", "tornike.jpg", "larkin.jpg"];
        var trenutnaSlika = 0;
        var imgElement = document.querySelector("#slike img");


        function prethodnaSlika() {
            trenutnaSlika--;
            if (trenutnaSlika < 0) {
                trenutnaSlika = slike.length - 1;
            }
            promeniSliku();
        }

       
        function sledecaSlika() {
            trenutnaSlika++;
            if (trenutnaSlika >= slike.length) {
                trenutnaSlika = 0;
            }
            promeniSliku();
        }

        function promeniSliku() {
            imgElement.src = slike[trenutnaSlika];
        }
    </script>
</body>
</html>