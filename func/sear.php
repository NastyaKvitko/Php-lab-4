<?php
session_start();
$conn = mysqli_connect('localhost', 'root' , '','labs');
$name = $_POST['name'];
$surname = $_POST['surname'];

$lookforuser = mysqli_query($conn, "SELECT * FROM `users` WHERE `name` = '$name' AND `surname` = '$surname' ");
$_SESSION['check_user'] = $lookforuser;
$user = mysqli_fetch_assoc($lookforuser);
?>
    <table border = '1' >
        <tr >
            <td > id</td ><td > Name</td ><td > Surname</td ><td > Login</td ><td > Password</td ><td > Language</td ><td > Role</td >
        </tr >
<?php
if (mysqli_num_rows($lookforuser) > 0) {
    if ($name == $user['name']) {
        $sql = mysqli_query($conn, "SELECT `id`, `name`, `surname`,`login`,`password`,`lang`,`role` FROM `users` WHERE `name` = '$name' AND `surname` = '$surname'");
        while ($result = mysqli_fetch_array($sql)) {
            echo '<tr>' . "<td>{$result['id']}</td>" . "<td>{$result['name']}</td>" . "<td>{$result['surname']}</td>" . "<td>{$result['login']}</td>" . "<td>{$result['password']}</td>" .
                "<td>{$result['lang']}</td>" . "<td>{$result['role']}</td>" . '</tr>';
        }
    } else {
        echo 'Неверный логин или пароль';
        header('location: login.php');
    }
}