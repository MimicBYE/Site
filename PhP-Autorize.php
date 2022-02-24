<?php
    session_start();
    if (isset($POST['login'])) {$login = $_POST['login']; if ($login == '') {unset($login);}}
    if (isset($_POST['password'])) {$password = $_POST['password']; if ($password == '') {unset($password)}}
    if (empty($login) or empty($password))
    {
        exit ("Заполните все поля верно");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ("bd.php");
    $result = mysql_query("SELECT * FROM users WHERE login = '$login'", $db)
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
        exit ("Логин или пароль не верны");
    }
    else
    {
        if ($myrow['password'] == $password)
        {
            $_SESSION['login'] = $myrow['login'];
            $_SESSION['id'] = $myrow['id'];
            echo "Вы успешно вошли";
        }
        else
        {
            exit ("Логин или пароль не верный");
        }
    }
?>
