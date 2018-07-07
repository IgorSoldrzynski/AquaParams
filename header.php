<?php
$listart = "";
$lidodaj = "";
$likalkulator = "";
$active = 'class="active"';
switch($page) {
    case "kalkulator":
        $likalkulator = $active;
        $listart = "";
        $lidodaj = "";
        break;
    case "dodaj":
        $lidodaj = $active;
        $listart = "";
        $likalkulator = "";
        break;
    default:
        $listart = $active;
        $lidodaj = "";
        $likalkulator = "";
        break;
}
if($_SESSION['zalogowany']){
    $lizaloguj = '<li id="right"><a href="?p=wyloguj">Witaj, '. $_SESSION['login'] .'! Wyloguj</a></li>';
}
else {
    $lizaloguj = '<li id="right"><a href="?p=zaloguj">Zaloguj</a></li>';
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