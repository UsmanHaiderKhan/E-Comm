<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
</head>

<body>
    <form method="post" action="action.php">
        <input name="username" type="text">
        <input name="password" type="password">
        <button type="submit" name="submitButton">Submit</button>
    </form>

    <?php

    include "conn.php";
    $query = "select * from demo";
    $statement = $conn->prepare($query);
    $result = $statement->execute();
    ?>
    <table style="border:1px solid black">
        <thead>
            <tr>
                <th>UserName</th>
                <th>passowrd</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($statement->rowCount() > 0) {
                foreach ($statement as $value) {
                    ?>

                    <tr>
                        <td><?php echo $value["username"] ?></td>
                        <td><?php echo $value["password"] ?></td>
                        <td><a href="action.php?id=<?php echo $value["id"] ?>&action=delete">Delete</a></td>
                    </tr>
                <?php

            }
        }
        ?>
        </tbody>
    </table>

</body>

</html>