<html>
    <head>
        <title>Data Entry</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header><br>Mahindra Logistics</header>
        <links><br>
        Quick Links:<br><br>
        <a href=index.php>Home</a><br>
        <a href=access.php>Data Access Page</a><br>
        </links>
        <br><h3>&emsp;Enter the details of inventory</h3>
        <form method="post">
            <label for="sno">Serial No. :</label>
            <input type="text" name="sno" required> <br><br>
            <label for="pid">Product ID :</label>
            <input type="text" name="pid" required> <br><br>
            <label for="pname">Product name :</label>
            <input type="text" name="pname" required> <br><br>
            <label for="pcount">Count :</label>
            <input type="text" name="pcount" required> <br><br>
            <label for="doa">Date of Arrival :</label>
            <input type="datetime-local" name="doa" required> <br><br>
            <label for="dod">Date of Departure :</label>
            <input type="datetime-local" name="dod" required> <br><br>
            <label for="place">Place of Delivery :</label>
            <input type="text" name="place" required> <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br><br>
        <?php
        include "config.php";
        if(isset($_POST['submit']))
        {
            $sno=$_POST['sno'];
            $pid=($_POST['pid']);
            $pname = $_POST['pname'];
            $pcount = $_POST['pcount'];
            $doa = $_POST['doa'];
            $dod = $_POST['dod'];
            $place = $_POST['place'];
            $sql="INSERT into entries values('$sno','$pid','$pname','$pcount','$doa','$dod','$place')";
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
    </body>
</html>
