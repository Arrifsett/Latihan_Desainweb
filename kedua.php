<form action="proses.php" method="post">
    <table>
        <tr>
            <td>angka 1</td>
            <td>: <input type="text" name="angka1"></td>
</tr>
<tr>
    <td>Operator</td>
    <td><input type="radio" name="operator"
        value="tambah"> +
        <input type="radio" name="operator"
        value="kurang"> -
        <input type="radio" name="operator"
        value="kali"> *
        <input type="radio" name="operator"
        value="bagi"> :
        <input type="radio" name="operator"
        value="modulo"> %
</td>
</tr>
        <td>angka 2</td>
        <td>: <input type="text" name="angka2"></td>
</tr>
<tr>
        <td></td>
        <td><input name="submit" type="submit" value="HITUNG">
            <input name="reset" type="reset" value="CLEAR">
            </td>
</tr>
</table>
</form>