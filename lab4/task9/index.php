<?php
    require_once 'Student.php';
    require_once 'Programmer.php';

    echo "<h3>Студент народжує дитину:</h3>";
    $student = new Student(160, 55, 21, "КПІ", 2);
    $student->giveBirth();

    echo "<h3>Програміст народжує дитину:</h3>";
    $programmer = new Programmer(170, 60,  22, ['PHP', 'JavaScript'],2);
    $dev->giveBirth();
?>