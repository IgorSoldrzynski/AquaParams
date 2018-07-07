<?php

//Utworzenie połączenia
$conn = mysqli_connect("localhost", "root", "gruszka", "aquaparams_users");

//Sprawdzenie czy połączono
if (!$conn) {
	die("Błąd połączenia: " . mysqli_connect_error());
}

//Sprawdzenie libczy rekorów w tabeli params
$selectCountRows = mysqli_query($conn, "SELECT count(*) FROM `params`");
$wiersze = mysqli_fetch_row($selectCountRows);
$liczbaRekordow = $wiersze[0];


//w tym slekcie niżej można sortować//////////////////////////////////////////
for($id=1; $id<=$liczbaRekordow; $id++){
	$selectPomiar = mysqli_query($conn, "SELECT * from `params` where `id` = '$id'");
	$pomiar = mysqli_fetch_array($selectPomiar);
	
	echo'
	<article>
	<h2>Pomiar parametrów</h2>
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