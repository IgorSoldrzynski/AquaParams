<?php
function formLogowania() {
    echo '
    <fieldset>
        <legend>Zaloguj:</legend>
        <form action="index.php?p=zaloguj" method="post">
            <label for="login">Login: </label><input type="text" name="login" /><br />
            <label for="haslo">Hasło: </label><input type="password" name="haslo" /><br />
            <input type="submit" value="Zaloguj" />
        </form>
    </fieldset>
    ';
}
if (isset($_POST['login']) && isset($_POST['haslo'])){
    $login = $_POST['login'];
    $haslo = md5($_POST['haslo']);



    //Utworzenie połączenia
    $conn = mysqli_connect($serwer, $serwerUser, $serwerPswd, $bazaDanych);
    
    //Sprawdzenie czy połączono
    if (!$conn) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }

    $selectLogin = mysqli_query($conn, "SELECT * from `users` where `login` = '$login'");
    $uzytkownik = mysqli_fetch_array($selectLogin);
    
    if ($login == $uzytkownik['login'] && $haslo == $uzytkownik['haslo']){
        $_SESSION['zalogowany'] = 1;
        $_SESSION['login'] = $login;
        header("Location: index.php");
        exit;
    }
    else {
        echo 'Błędny login lub hasło!';
        formLogowania();
    }

}
else {
    formLogowania();
}

    

?>