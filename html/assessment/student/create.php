<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Add Staff Entry</title>
        <?php
            include("db.php");
        ?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <h1>Add Data to Database</h1>
        <?php
            if (isset($_GET["result"])){
                if ($_GET["result"] == "success"){
                    echo("<p>Your record was added successfully.</p>");
                } elseif ($_GET["result"] == "invalid"){
                    echo("<p>You must complete all input fields.</p>");
                } else{
                    die();
                }
            }
        ?>
        <form action="create2.php" method="GET">
            <input type="text" name="FirstName" maxlength="32" placeholder="First Name:">
            <br>
            <input type="text" name="LastName" maxlength="32" placeholder="Last Name:">
            <br>
            <input type="text" name="classID" maxlength="64" placeholder="classID:">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>