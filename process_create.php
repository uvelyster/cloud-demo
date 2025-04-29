<?php

$conn = mysqli_connect("DB IP","testuser","testpass","webtest",3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into items (title, description, created) value ('{$_POST['title']}','{$_POST['description']}', now())";

$result = mysqli_query($conn,$sql);
if ($result=== false){
    echo 'error occured.';
    error_log(mysqli_error($conn));
}
echo 'Succeed. <a href="index.php"> back</a>';

?>
