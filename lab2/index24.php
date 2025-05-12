<?php
    function sortUsers(&$users, $by = 'age')
    {
        if ($by === 'age') {
            asort($users);
        } elseif ($by === 'name') {
            ksort($users); 
        }
    }

    $users = [
        "Анастасія" => 21,
        "Вікторія" => 20,
        "Вікторія 2" => 22,
        "Ірина" => 19
    ];

    sortUsers($users, 'age');

    echo "Відсортовані користувачі:<br>";
    foreach ($users as $name => $age) {
        echo "$name: $age<br>";
    }
?>