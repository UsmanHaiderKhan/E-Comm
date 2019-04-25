<?php
include "conn.php";
if (isset($_POST['submitButton'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username . " " . $password;
    $query = "insert into demo (username,password) values('" . $username . "','" . $password . "')";
    $statement = $conn->prepare($query);
    $result = $statement->execute();
    if ($result) {
        echo "<h1>Inserted</h1>";
    } else {
        echo "<h1>Not Inserted</h1>";
    }
}
if (isset($_GET['action'])) {

    $id = $_GET['id'];
    //echo $id;
    $query = "delete from demo where id='" . $id . "'";
    $statement = $conn->prepare($query);
    $result = $statement->execute();
    if ($result) {
        echo "<h1>Deleted</h1>";
    } else {
        echo "<h1>Not Deleted</h1>";
    }
}
