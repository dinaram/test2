<?php
echo "1.  Убрать повторяющиеся пробелы и знаки табуляции,  оставить по одному пробелу между словами и по два между предложениями.  Форма, textarea, кнопка.";
echo '<form method = "post">';
echo '<input type = "text" name = "textarea"/>';
echo '<input type = "submit" name = "submit" value= "btn"/>';
echo '</form>';
if (!empty($_POST['textarea'])) {
    $text = $_POST['textarea'];
    $stringSymbol = '  ';
    $replaceSymbol = substr($stringSymbol, 0, 1);
    $text = str_replace($stringSymbol, $replaceSymbol, $text);
    $textarea = explode($replaceSymbol, $text);
    echo $text;
}
echo '<br/>';
?>

<?php
echo "2. Найти на заданной странице все изображения и вывести их на экран. Страница вводится через форму, текстовый инпут.";
echo '<form method = "post">';
echo '<input type = "text" name = "textarea"/>';
echo '<input type = "submit" name = "submit" value= "btn"/>';
echo '</form>';
if (isset($_POST['textarea']) && (!empty($_POST['textarea']))) {
    $image = file_get_contents($_POST['textarea']);
    preg_match_all('|.*\.(\S+)|', $image, $matches);

    $image = $matches[0];
    foreach ($image as $url) {
        array_push($image, $url);
    }
    print_r($image);
}
?>
