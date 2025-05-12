<?php
    require_once 'FileManager.php';

    FileManager::write('file1.txt', 'Перший файл!');
    FileManager::write('file1.txt', 'Второй файл!');

    echo "<h3>Вміст file1.txt:</h3>";
    echo nl2br(FileManager::read('file1.txt'));

    FileManager::clear('file1.txt');

    echo "<h3>Після очищення:</h3>";
    echo nl2br(FileManager::read('file1.txt'));
?>