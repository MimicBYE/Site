
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Только CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
?>
    <header>
        <p> Web
        <nav>
            <ol>
                <li> <a hreg = PhP_Registration.php> Регистрация </a></li>
                <li> <a hreg = PhP_Registration.php> Авторизация </a></li>
                <li> <a hreg = PhP_Registration.php> Главная </a></li>
            </ol>
        </nav>
    </header>
    <main>
        <form action = "save_in_bd.php" method = "post">
        <label for = "login"> Логин </label>
        <input type = "text" name = "login" id = "Login">
        <br>
        <label for = "password"> Пароль </label>
        <input type = "password" name = "Password" id = "Password">
        <br>
        <input type = "submit" name = "submit" value = "Зарегистрироваться">
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>