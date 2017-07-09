<html><body>
<?php

echo '<h1>'. 'Библиотека успешного человека' . '</h1>';

echo '<form action="action.php" method="post">' .
 '<p>'.'<input type="text" name="name" placeholder="ISBN" />' .
 ' '. '<input type="text" name="age" placeholder="Название книги"/>' .
    ' ' . '<input type="text" name="age" placeholder="Автор книги"/>' . ' ' .
  '<input type="submit" value="Поиск" />' . '</p>' .
'</form>';

$rows = 1; // количество строк, tr
$cols = 1; // количество столбцов, td

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ // в этом цикле счётчик $tr
    // следит за количеством строк и всегда равен текущему номеру строки.
    // То есть в начале $tr=1, так как в начале у нас 1 строка, затем
    // каждый раз прибавляем единицу, пока не дойдём до заданного количества
    // $rows.
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){ // в этом цикле счётчик $td аналогичен
        // счётчику $tr.
        echo '<th>'. Название .'</th>';
        echo '<th>'. Автор .'</th>';
        echo '<th>'. 'Год выпуска' .'</th>';
        echo '<th>'. Жанр .'</th>';
        echo '<th>'. ISBN .'</th>';
    }
    echo '</tr>';
}



$user = "root";
$pass = "123";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test;charset=utf8', $user, $pass);
    foreach($dbh->query('SELECT name, author, genre, year, isbn from books') as $row) {



        echo '<tr>';
echo '<td>'. $row['name'] . " " .'</td>';
echo '<td>'. $row['author'] . " ".'</td>';
echo '<td align="center">'. $row['year'] . " ". '</td>';
echo '<td>'. $row['genre'] . " ".'</td>';
echo '<td>'. $row['isbn'] . " ".'</td>' ;
        echo '</tr>';
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo '</table>';
?>
</body>
</html>

