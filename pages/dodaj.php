<?php

if($_SESSION['zalogowany'] == 1) {
    if(isset($_POST['kh'])) {
        //Utworzenie połączenia
        $conn = mysqli_connect("localhost", "root", "gruszka", "aquaparams_users");
        
        //Sprawdzenie czy połączono
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $data = $_POST['data'];
        $zasolenie = $_POST['zasolenie'];

        //Sprawdzenie czy pola, które mogą być puste są puste
        if($_POST['ph']!=""){
            $ph = $_POST['ph'];
        } else {
            $ph = "NULL";
        }

        if($_POST['mg']!=""){
            $mg = $_POST['mg'];
        } else {
            $mg = "NULL";
        }

        if($_POST['no3']!=""){
            $no3 = $_POST['no3'];
        } else {
            $no3 = "NULL";
        }

        if($_POST['po4']!=""){
            $po4 = $_POST['po4'];
        } else {
            $po4 = "NULL";
        }


        $sqlQuery = "INSERT INTO params (data, zasolenie, ph, kh, ca, mg, no3, po4)
                VALUES ('". $data ."', ". $zasolenie .", ". $ph .", ". $_POST['kh'] .", ". $_POST['ca'] .", ". $mg .", ". $no3 .", ". $po4 .")";

        if (mysqli_query($conn, $sqlQuery)) {
            echo "Dodano nowy pomiar z datą: ".$data.", i zasoleniem: ".$zasolenie;
        } else {
            echo "Błąd: " . $sqlQuery . "<br>" . mysqli_error($conn);
        }
        //Rozłączenie z bazą
        mysqli_close($conn);
    }


    echo '
    <script type="text/javascript" src="pages/walidacjaDodaj.js"></script>
    <fieldset id="dodaj">
        <legend>Dodaj pomiar:</legend>
        <form name="dodajForm" action="index.php?p=dodaj" onsubmit="return walidacjaDodaj()" method="post">
            <label for="data">Data: </label><input type="date" name="data" />
            <label for="zasolenie">Zasolenie: </label><input type="number" name="zasolenie" min="1.000" max="1.040" step="0.001" /><br />
            <label for="ph">PH: </label><input type="number" name="ph" min="0.0" max="14.0" step="0.5" />
            <label for="kh">KH: </label><input type="number" name="kh" min="4.0" max="16.0" step="0.1" /><br />
            <label for="ca">Ca: </label><input type="number" name="ca" min="0" max="700" step="10" />
            <label for="mg">Mg: </label><input type="number" name="mg" min="800" max="1900" step="10" /><br />
            <label for="no3">NO3: </label><input type="number" name="no3" min="0.0" max="50.0" step="0.1" />
            <label for="po4">PO4: </label><input type="number" name="po4" min="0.0" max="3.0" step="0.01" /><br />
            <input type="submit" value="Dodaj" />
        </form>
    </fieldset>
    ';
} else {
    echo '
    <script>confirm("Zaloguj się, aby dodać pomiar.");
    window.location.assign("index.php?p=zaloguj");</script>
    ';
}

?>