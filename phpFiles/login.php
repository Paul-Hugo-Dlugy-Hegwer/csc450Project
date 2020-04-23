<!DOCTYPE html>
<html>
<head>
        <title>VolunteerOps</title>
</head>
<body>
        <div>
                <h1> VoluneerOps Login </h1>
        </div>
        <form method="get" action="login.php">
                <h2>username: </h2>
                <input name = "un"/>
                <h3>password: </h3>
                <input name = "pw"/>
                <input type="submit" name="submit" value="Submit"/>
        </form>
<p>
<?php
        if(isset($_GET["submit"])){
        header('Location: hub.php');
        }
        ?>
</p>
</body>
</html>
