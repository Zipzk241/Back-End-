<?php
$file1 = "file1.txt";
$file2 = "file2.txt";

$words1 = explode(" ", strtolower(file_get_contents($file1)));
$words2 = explode(" ", strtolower(file_get_contents($file2)));

$only1 = array_diff($words1, $words2);
$both = array_intersect($words1, $words2);

$merged = array_merge($words1, $words2);
$counts = array_count_values($merged);
$moreThan2 = array_keys(array_filter($counts, fn($v) => $v > 2));

file_put_contents("only.txt", implode("\n", $only1));
file_put_contents("both.txt", implode("\n", $both));
file_put_contents("more.txt", implode("\n", $moreThan2));

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $fileToDelete = $_POST['delete'];
    if (in_array($fileToDelete, ['only.txt', 'both.txt', 'more.txt']) && file_exists($fileToDelete)) {
        unlink($fileToDelete);
        echo "Файл '$fileToDelete' видалено.";
    }
}
?>

<form method="post">
    <label>Виберіть файл для видалення:
        <select name="delete">
            <option value="only.txt">only.txt</option>
            <option value="both.txt">both.txt</option>
            <option value="more.txt">more.txt</option>
        </select>
    </label>
    <input type="submit" value="Видалити">
</form>