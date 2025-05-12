<?php
    function find($array)
    {
        $counts = array_count_values($array);
        $duplicates = [];

        foreach ($counts as $value => $count) {
            if ($count > 1) {
                $duplicates[] = $value;
            }
        }

        return $duplicates;
    }

    $arr = [9, 9, 1, 4, 9, 2, 8, 2];
    echo "Повторювані: " . implode(", ", find($arr)) . "<br>";
?>