<?php 

include ("config/connect.php");

function getUsers() {
    $result = $connection->query("select * from users");
    return $result->fetch_row(MYSQLI_ASSOC);
}

?>

<!DOCTYPE HTML>
<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (getUsers() as $users) { ?>
                <tr>
                    <td><?=$users["user_id"]?></td>
                    <td><?=$users["user_name"]?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>