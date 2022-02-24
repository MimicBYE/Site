<?php
    if (isset($_POST['login'])) {$login = $_POST['login']; if ($login == '') {unset($login);}}
    if (isset($_POST['password'])) {$password = $_POST['password']; if ($password == '') {unset($password);}}
    if (empty($login) or empty($password))
    {
        exit
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ("bd.php");
    $result = my_sql_query("SELECT id FROM users WHERE login = '$login'", $bd);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id']))
    {
        exit;
    }
    $result2 = mysql_query ("INSERT INTO users (login, password) VALUES('$login','$password')");
    if ($result2 == 'TRUE')
    {
        echo "Регистрация прошла успешно";
    }
    else
    {
        echo "Ошибка регистрации"
    }
    ?>