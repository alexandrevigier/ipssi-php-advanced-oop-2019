<html lang="fr">

    <table>
        <tr>
            <th>Band</th>
        </tr>
        <?php foreach ($tabFinale as $value) {
            echo '<tr>'.$value["Band"].'<td>'.$value["Member"].'</td><td>'.$value["Instrument"].'</td></tr>';
        }?>
    </table>
</html>