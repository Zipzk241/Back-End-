<!DOCTYPE html>
<html lang="uk">
<head>
</head>

<body>
    <?php
    $month = 12; 
    $season = "";

    if ($month == 12 || $month == 1 || $month == 2) {
        $season = "Зима";
    } elseif ($month >= 3 && $month <= 5) {
        $season = "Весна";
    } elseif ($month >= 6 && $month <= 8) {
        $season = "Літо";
    } elseif ($month >= 9 && $month <= 11) {
        $season = "Осінь";
    } else {
        $season = "некоректний номер місяця";
    }

    echo "Місяць ".$month." відповідає порі: $season.";
    ?>
</body>

</html>