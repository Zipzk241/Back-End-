<?php
if (isset($_GET['size'])) {
    setcookie('font_size', $_GET['size'], time() + (60 * 24 * 60 * 60)); 
    $_COOKIE['font_size'] = $_GET['size']; 
}

$fontSize = $_COOKIE['font_size'] ?? '16px';
?>

<!DOCTYPE html>
<html lang="uk">

<body style="font-size: <?= htmlspecialchars($fontSize) ?>;">
    <p>
        <a href="?size=32px">Великий шрифт</a> 
        <a href="?size=14px">Середній шрифт</a> 
        <a href="?size=8px">Маленький шрифт</a>
    </p>

    <p>
        Це приклад тексту, який змінює розмір залежно від встановленого cookie.
    </p>

    <p><a href="index12.php">Перейти на сторінку</a></p>
</body>

</html>