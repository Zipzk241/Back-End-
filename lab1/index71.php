<?php
function draw($rows, $cols)
{
    echo "<table>";

    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo "<td style='width: 100px; height: 100px; background-color: $color; '></td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body>
    <?php draw(6, 6); ?>
</body>

</html>