<?php
$listart = "";
$lidodaj = "";
$likalkulator = "";
$lizalogujActive = "";
$active = 'class="active"';
switch($page) {
    case "kalkulator":
        $likalkulator = $active;
        $listart = "";
        $lidodaj = "";
        $lizalogujActive = "";
        break;
    case "dodaj":
        $lidodaj = $active;
        $listart = "";
        $likalkulator = "";
        $lizalogujActive = "";
        break;
    case "zaloguj":
        $lizalogujActive = $active;
        $lidodaj = "";
        $listart = "";
        $likalkulator = "";
        break;
    default:
        $listart = $active;
        $lidodaj = "";
        $likalkulator = "";
        $lizalogujActive = "";
        break;
}
if($_SESSION['zalogowany']){
    $lizaloguj = '<li id="right"><a href="?p=wyloguj">Witaj, '. $_SESSION['login'] .'! Wyloguj</a></li>';
}
else {
    $lizaloguj = '<li id="right"><a '.$lizalogujActive.' href="?p=zaloguj">Zaloguj</a></li>';
}
echo '
<header>
<h1>AquaParams<br />Strona do zapisu pomiarów parametrów wody</h1>
<ul id="navBar">
    <li><a '. $listart .' href="index.php">Start</a></li>
    <li><a '. $lidodaj .' href="?p=dodaj">Dodaj pomiar</a></li>
    <li><a '. $likalkulator .' href="?p=kalkulator">Kalkulator</a></li>
    '. $lizaloguj .'
</ul>
</header>
';
?>