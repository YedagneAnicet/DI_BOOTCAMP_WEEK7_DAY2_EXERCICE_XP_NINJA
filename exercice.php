<form action="exercice.php" method="post">
    <input type="number" name="rows" placeholder="nombre de ligne de l'echequier">
    <input type="number" name="cols" placeholder="nombre de colonne de l'echequier">
    <input type="submit" name="submit" value='Valider'>
</form>
<table cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    if (isset($_POST['submit'])) {
        if (($_POST['cols'] < 0) || ($_POST['rows'] < 0)) {
            echo 'Entrer des nombres positifs';
        } else {
            for ($row = 1; $row <= $_POST['rows']; $row++) {
                echo "<tr>";
                for ($column = 1; $column <= $_POST['cols']; $column++) {
                    $total = $row + $column;
                    if ($total % 2 == 0) {
                        echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
                    } else {
                        echo "<td height=35px width=30px bgcolor=#000000></td>";
                    }
                }
                echo "</tr>";
            }
        }
    }

    ?>
</table>