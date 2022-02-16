<html>
    <head>
        <title>Time Table</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header><br>Time Table Management System</header>
        <home>
        <h4>Admin Login</h4>
        Please enter your credentials:<br><br>
        <form method="post">
            <label for="uname">Username:</label>
            <input type="text" name="uname" required> <br><br>
            <label for="pass">Password:</label>
            <input type="password" name="pass" required> <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br><br>
        <?php
        include "config.php";
        if(isset($_POST['submit']))
        {
            $uname=$_POST['uname'];
            $pass=($_POST['pass']);
            $sql="INSERT into entries values('$sno','$pid')";
            if($con->query($sql)==TRUE)
            {
                echo "<center>Entry Successful</center>";
            }
            else
            {
                echo "<center>Something went wrong, Please try again.</center>";
            }
        }
        ?>
        <a href=index.php>Home</a><br>
        </home>
    </body>
</html>