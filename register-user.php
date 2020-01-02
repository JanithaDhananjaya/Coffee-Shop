<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_Password"];

$connection = mysqli_connect("localhost", "root", "mysql", "coffee_shop", "3306");
if (!$connection) {
    $message = mysqli_connect_error();
    mysqli_close($connection);
}else{
    $sql = "INSERT INTO user(USERNAME,EMAIL) VALUES('{$username}','{$email}')";
    $result = mysqli_query($connection, $sql);
    if ($result && mysqli_affected_rows($connection)>0){
        mysqli_commit($connection);

        $message = "Your details Successfully added to the System";
        echo "<script>window.location.replace('index.php')</script>";

    }else{
        mysqli_rollback($connection);
        $message = "Something Went wrong!Try again in few minutes later";
        echo "<script>window.location.replace('message.php?title=Message&subtitle=Error&message={$message}')</script>";
    }
}