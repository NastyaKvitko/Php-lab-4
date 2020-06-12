<?php
session_start();
$conn = mysqli_connect('localhost', 'root' , '','labs');
$login = $_POST["login"];
$password = $_POST["password"];


$lookforuser = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
$_SESSION['lookforuser'] = $lookforuser;
$user = mysqli_fetch_assoc($lookforuser);


$_SESSION['user'] = ["id" => $user['id'], "name" => $user['name'], "surname" => $user['surname'], "login" => $user['login'], "password" => $user['password'], "role" => $user['role'], "lang" => $user['lang']];


if (mysqli_num_rows($lookforuser) > 0){
    $_SESSION['login'] = $login; $_SESSION['password'] = $password;
    if ($user['role'] == 'admin'){ $_SESSION['role'] = $user['role']; header('Location: users\admin.php');
    }else if($user['role'] == 'manager'){ $_SESSION['role'] = $user['role']; header('Location: users\manager.php');
    }else if($user['role'] == 'client'){ $_SESSION['role'] = $user['role']; header('Location: users\client.php');
    }
}else {
    echo 'Неверный логин или пароль';
    header('location: index.php');
}