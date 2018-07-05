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
echo '
<header>
<h1>Strona do zapisu pomiarów parametrów wody</h1>
<ul id="navBar">
    <li><a '. $listart .' href="index.php">Start</a></li>
    <li><a '. $lidodaj .' href="?p=dodaj">Dodaj pomiar</a></li>
    <li><a '. $likalkulator .' href="?p=kalkulator">Kalkulator</a></li>
    <li id="right"><a href="#">Witaj, User! Wyloguj</a></li>
</ul>
</header>
';
?>