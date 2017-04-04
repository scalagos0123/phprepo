<?php 

include "config/connect.php";
$result = $connection->query("select * from users") or die ($connection->error);

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
                <?php while ($users = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                <tr>
                    <td><?=$users["user_id"]?></td>
                    <td><?=$users["user_name"]?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>