<?php
session_start();
$conn = mysqli_connect('localhost', 'root' , '','labs');

$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$lang = $_POST['lang'];
$role = $_POST['role'];


if ($login === $_POST['login']) {
    mysqli_query($conn, "INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `lang`, `role`) VALUES (NULL, '$login', '$password', '$name', '$surname', '$lang', '$role')");
    header('location: ..\index.php');
}
?>