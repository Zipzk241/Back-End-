<!DOCTYPE html>
<html lang="uk">
<head>
</head>

<body>
    <?php
    $uah = 1500; 
    $usdRate = 30; 
    $usd = floor($uah / $usdRate); 
    
    echo "$uah грн. можна обміняти на $usd долар";
    ?>
</body>

</html>