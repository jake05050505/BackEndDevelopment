<html>
    <head>
        <title>read</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include('nav.php');
            include('db.php');
            if (!isset($_GET["first_name"])) {
                $_GET["first_name"] = "";
            }
            if (!isset($_GET["last_name"])) {
                $_GET["last_name"] = "";
            }
            if (!isset($_GET["email"])) {
                $_GET["email"] = "";
            }
        ?>
        <form action="" method="GET">
            <input type="text" name="first_name" value="<?php echo($_GET['first_name']); ?>">
            <input type="text" name="first_name" value="<?php echo($_GET['last_name']); ?>">
            <input type="text" name="first_name" value="<?php echo($_GET['email']); ?>">
            <input type="submit" value="">
        </form>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = 'SELECT * FROM `employees` WHERE `first_name` LIKE "%' . $_GET["first_name"] . '%" OR `last_name` LIKE "%' . $_GET["last_name"] . '%" OR `email` LIKE "%' . $_GET["email"] . '%";';
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row){
                        echo('<tr>');
                        echo('  <td>' . $row['employee_id'] . '</td>');
                        echo('  <td>' . $row['first_name'] . '</td>');
                        echo('  <td>' . $row['last_name'] . '</td>');
                        echo('  <td>' . $row['email'] . '</td>');
                        echo('</tr>');
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>