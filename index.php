<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Strona do zapisu pomiarów parametrów wody</title>
	<meta name="author" content="Igor Sołdrzyński" >
	<meta name="keywords" content="parametry wody akwariowej, reef">
	<meta name="description" content="Strona do zapisu pomiarów parametrów wody.">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
	//dane do łączenia z bazą:
	$serwer = "sql2.freemysqlhosting.net";
	$serwerUser = "sql2246509";
	$serwerPswd = "***";
	$bazaDanych ="sql2246509";



	$page = $_GET['p'];
	include 'header.php'; 
?>
	<div id="center">
	<?php
		if ($page == "dodaj") {
			include 'pages/dodaj.php';
		}
		elseif ($page == "kalkulator") {
			include 'pages/kalkulator.php';
		}
		elseif ($page == "zaloguj") {
			include 'pages/zaloguj.php';
		}
		elseif ($page == "wyloguj") {
			include 'pages/wyloguj.php';
		}
		else {
			include 'pages/main.php';
		}
	?>
	
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>