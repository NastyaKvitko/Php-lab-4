<html lang="ru">
<head>
    <title>Список</title>
</head>
<body>
<?php
$conn = mysqli_connect('localhost', 'root' , '','labs');

?>

<table border = '1' >
    <tr >
        <td > id</td ><td > Name</td ><td > Surname</td ><td > Login</td ><td > Password</td ><td > Language</td ><td > Role</td >
    </tr >

    <?php
    $sql = mysqli_query($conn, 'SELECT `id`, `name`, `surname`,`login`,`password`,`lang`,`role` FROM `users`');
    while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' . "<td>{$result['id']}</td>" . "<td>{$result['name']}</td>" . "<td>{$result['surname']}</td>" . "<td>{$result['login']}</td>" . "<td>{$result['password']}</td>" .
            "<td>{$result['lang']}</td>" . "<td>{$result['role']}</td>" .
            '</tr>';
    }
    ?>
</table>
</body>
</html>