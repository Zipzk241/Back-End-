<?php
function generatePetName($syllables, $count = 3)
{
    $name = '';
    for ($i = 0; $i < $count; $i++) {
        $name .= $syllables[array_rand($syllables)];
    }
    return ucfirst($name);
}

    $syllables = ['ка', 'му', 'ша', 'лу', 'ні', 'ті'];
    echo "Ім’я питомця: " . generatePetName($syllables) . "<br>";
?>