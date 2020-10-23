<?php
   
    $connect = mysqli_connect("127.0.0.1","root","","twitter");
    $text_zaprosa_vstavit = "INSERT INTO users (name, login, img)
                          VALUES ('{$_GET["name"]}', '{$_GET["login"]}', '{$_GET["img"]}')";
    $zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);

?>
<?php
/* Этот пример приведет к ошибке. Обратите внимание
 * на тег вверху, который будет выведен до вызова header() */
header('Location: index.php');

?>