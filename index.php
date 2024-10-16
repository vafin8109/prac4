<?php
require_once 'php/cookie.php'; 

$cookie = new Cookie();

if (isset($_POST['type'])) {
    $cookie->setType($_POST['type']);
}

$type = $cookie->getType();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика 4</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <div class="container">
        <h1>Печенья</h1>

        <div class="cookie-card">
            <h2>Тип печенья: <br> <span id="cookie-type"><?= htmlspecialchars($type) ?></span></h2>

            <form method="POST" action="index.php">
                <input type="text" name="type" placeholder="Введите тип печенья" required>
                <button type="submit">Проверить</button>
            </form>
        </div>
    </div>
</body>
</html>
