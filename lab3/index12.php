<?php
$fontSize = $_COOKIE['font_size'] ?? '16px';
?>

<!DOCTYPE html>
<html lang="uk">

<body style="font-size: <?= htmlspecialchars($fontSize) ?>;">
    <p>Це приклад тексту, який змінює розмір залежно від встановленого cookie.</p>
    <p><a href="index.php">Повернутися</a></p>
</body>

</html>