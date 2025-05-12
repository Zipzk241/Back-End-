<?php
    require_once 'Student.php';
    require_once 'Programmer.php';

    echo "<h3>Прибирання студентом:</h3>";
    $student = new Student(160, 55, 21, "КПІ", 2);
    $student->cleanRoom();
    $student->cleanKitchen();

    echo "<h3>Прибирання програмістом:</h3>";
    $programmer = new Programmer(170, 60, 22, ['PHP', 'JavaScript'], 2);
    $programmer->cleanRoom();
    $programmer->cleanKitchen();
?>