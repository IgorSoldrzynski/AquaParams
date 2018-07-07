<?php
//wybór metody sortowania pomiarów
echo '
<form action="index.php" method="get">
<select name="sort">
	<option value="datedesc">Daty pomiaru malejąco</option>
	<option value="dateasc">Daty pomiaru rosnąco</option>
	<option value="iddesc">Kolejność wpisu malejąco</option>
	<option value="idasc">Kolejność wpisu rosnąco</option>
</select>
<input type="submit" value="Sortuj" />
</form>
';

//przygotowanie zmiennych do sql query
switch($_GET['sort']){
	case "dateasc":
		$order = "`data`";
		$seq = "asc";
		break;
	case "iddesc":
		$order = "`id`";
		$seq = "desc";
		break;
	case "idasc":
		$order = "`id`";
		$seq = "asc";
		break;
	default:
		$order = "`data`";
		$seq = "desc";
		break;
}

//Utworzenie połączenia
$conn = mysqli_connect($serwer, $serwerUser, $serwerPswd, $bazaDanych);

//Sprawdzenie czy połączono
if (!$conn) {
	die("Błąd połączenia: " . mysqli_connect_error());
}

//Sprawdzenie libczy rekorów w tabeli params
$selectCountRows = mysqli_query($conn, "SELECT count(*) FROM `params`");
$wiersze = mysqli_fetch_row($selectCountRows);
$liczbaRekordow = $wiersze[0];


for($i=0; $i<$liczbaRekordow; $i++){
	$selectPomiar = mysqli_query($conn, "SELECT * from `params` order by ".$order." ".$seq." limit ".$i.",1");
	$pomiar = mysqli_fetch_array($selectPomiar);
	//ustawienie lokalizacji, aby nazwy miesięcy były po polsku
	setlocale(LC_TIME, 'pl_PL', 'pl_PL.utf8', 'pl', 'Polish_Poland.28592');
	//wyświetlenie okienka pomiaru
	echo'
	<article>
	<h2>Pomiar parametrów <i>&nbsp;&nbsp;&nbsp;'.strftime('%B %y', strtotime($pomiar['data'])).'r.</i></h2>
	<table>
	<tr>
	<th>Data:</th><th>Zasolenie:</th><th>PH:</th><th>KH:</th><th>Ca:</th><th>Mg:</th><th>NO3:</th><th>PO4:</th>				
	</tr>
	<tr>
	<td>'. $pomiar['data'] .'</td><td>'. $pomiar['zasolenie'] .'</td><td>'. $pomiar['ph'] .'</td><td>'. $pomiar['kh'] .'</td><td>'. $pomiar['ca'] .'</td>
	<td>'. $pomiar['mg'] .'</td><td>'. $pomiar['no3'] .'</td><td>'. $pomiar['po4'] .'</td>
	</tr>
	</table>
	</article>';
}

//koniec połączenia z bazą
mysqli_close($conn);

echo '
<p>Parametry porządane przy zasoleniu 1.025:</p>
<ul>
<li><b>KH:</b> 7.8-8.2</li>
<li><b>Ca:</b> 420-440</li>
<li><b>Mg:</b> 1250-1310</li>
</ul>
';
?>