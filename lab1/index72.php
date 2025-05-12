<?php
function draw($n)
{
    echo "<div style='background-color: black; position: relative; width: 100vw; height: 100vh; overflow: hidden;'>";

    for ($i = 0; $i < $n; $i++) {
        $size = mt_rand(10, 200); 
        $top = mt_rand(0, 90); 
        $left = mt_rand(0, 90); 
        echo "<div style='
            width: {$size}px;
            height: {$size}px;
            background-color: red;
            position: absolute;
            top: {$top}%;
            left: {$left}%;
        '></div>";
    }

    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body style="margin: 0;">
    <?php draw(10); ?>
</body>

</html>