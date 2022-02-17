<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<header>
<p> Web
<nav>
<ol>
<li> <a hreg = reg.php> Регистрация </a></li>
<li> <a hreg = reg.php> Авторизация </a></li>
<li> <a hreg = reg.php> Главная </a></li>
</ol>
</nav>
</header>
<main>
<form action = "reg.php" method = "get">
<label for = "Login"> Логин </label>
<input type = "text" name = "Login" id = "Login">
<br>
<label for = "Password"> Пароль </label>
<input type = "password" name = "Password" id = "Password">
<br>
<input type = "submit">
</form>
</main>
<footer>
</footer>
</body>
</html>