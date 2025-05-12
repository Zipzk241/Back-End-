<?php
    $fullPath = 'D:\Programs\wampserver\www\lab2\myfile.txt';
    $name = pathinfo($fullPath, PATHINFO_FILENAME);
    echo "<p>Ім'я файлу без розширення: <strong>$name</strong></p>";
?>
