<?php include("header.php"); ?>

<div class="form">
    <h3>Добавить новый термин</h3>
    <form action="insert.php" method="POST" enctype="multipart/form-data">
        <label for="name">Термин:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="definition">Определение:</label>
        <textarea id="definition" name="definition"></textarea><br><br>

        <label for="image">Изображение:</label>
        <input type="file" id="image" name="image"><br><br>

        <input type="submit" value="Добавить термин" class="btn">
    </form>
</div>
</body>
</html>