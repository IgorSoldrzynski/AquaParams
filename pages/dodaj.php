<?php
echo '
<fieldset>
    <legend>Dodaj pomiar:</legend>
    <form action="dodaj.php" method="post">
        <label for="data">Data: </label><input type="date" name="data" /><br />
        <label for="zasolenie">Zasolenie: </label><input type="number" name="zasolenie" min="1.000" max="1.030" step="0.001" /><br />
        <label for="ph">PH: </label><input type="text" name="ph" /><br />
        <label for="kh">KH: </label><input type="text" name="kh" /><br />
        <label for="ca">Ca: </label><input type="text" name="ca" /><br />
        <label for="mg">Mg: </label><input type="text" name="mg" /><br />
        <label for="no3">NO3: </label><input type="text" name="no3" /><br />
        <label for="po4">PO4: </label><input type="text" name="po4" /><br />
        <input type="submit" value="Dodaj" />
    </form>
</fieldset>
';
?>