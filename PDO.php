<?php

try {

    $connnection = new PDO("mysql:host=localhost;dbname=basic database", 'root', '');
    // $connnection->setAttribute(PDO:ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
    // $sth = $connnection->query("select * from users");
    $sth = $connnection->prepare("select * from Users");
    // $sth->setFetchMode(PDO::FETCH_ASSOC);
    // while ($row = $sth->fetch()) {
    //     echo $row['name'] . "<br/>";
    //     echo $row['email'];
    // }
    //Now we Done the Object Oriented Way

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();
    while ($row = $sth->fetch()) {
        echo $row->name . "<br>";
        echo $row->email . "<br/>";
    }


    echo "Connection Created SuccessFully";
} catch (PDOException $e) {
    echo "Some Thing Went Going Wrong: " . $e->getMessage();
}
