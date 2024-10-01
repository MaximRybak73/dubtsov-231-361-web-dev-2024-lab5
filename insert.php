<?php
include("db.php");
include("header.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $definition = $_POST['definition'];
    $image = $_FILES['image']['name'];

    // Загрузка изображения в папку
    move_uploaded_file($_FILES['image']['tmp_name'], 'Data/img/' . $image);

    // SQL-запрос для вставки термина, определения и изображения
    $query = "INSERT INTO `terms` (name, definition, img) VALUES ('$name', '$definition', '$image')";

    if (mysqli_query($mysql, $query)) {
        echo "Новый термин успешно добавлен!";

    } else {
        echo "Ошибка при добавлении термина: " . mysqli_error($mysql);
    }
}

include("footer.php");
?>
