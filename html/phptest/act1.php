<html>
    <head>
        <title>PHP Activity 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
        ?>
        <h1>PHP Activity 1</h1>
        <form name="form" action="" method="get">
            <input type="text" name="score" placeholder="Score:">
        </form>
        <?php
            $pc=$_GET['score'];
            echo($pc. "% puts you in class:<br />");
            if($pc>=70){
                echo("First");
            }
            elseif($pc>=60){
                echo("Upper Second");
            }
            elseif($pc>=50){
                echo("Lower Second");
            }
            elseif($pc>=40){
                echo("Third");
            }
            else{
                echo("Fail");
            }
        ?>
    </body>
</html>