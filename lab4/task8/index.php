<?php
    require_once './Student.php';
    require_once './Programmer.php';

    $student = new Student(160, 55, 21, "КПІ", 2);
    echo "<h3>Студент:</h3>";
    echo $student . "<br>";

    $student->setHeight(162);
    $student->setWeight(52);

    $student->promote();
    echo "<strong>Після змін:</strong><br>";
    echo $student . "<br><br>";

    $programmer = new Programmer(170, 60,  22, ['PHP', 'JavaScript'],2);
    echo "<h3>Програміст:</h3>";
    echo $programmer . "<br>";

    $programmer->addLanguage('JAVA');

    $programmer->setWeight(78);
    echo "<strong>Після змін:</strong><br>";
    echo $programmer;
?>