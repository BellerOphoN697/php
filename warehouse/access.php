<html>
    <head>
        <title>Data Access</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php
        include "config.php";
        ?>
        <header><br>Mahindra Logistics</header>
        <links><br>
        Quick Links:<br><br>
        <a href=index.php>Home</a><br>
        <a href=entry.php>Data Entry Page</a><br>
        </links>
        <form action="display.php"><br><br><br>
        <label for="keyword">Enter the Product ID:</label>
        <input type="text" name="keyword" required><br><br>
        <input type="submit" value="Submit">
        </form>
        <?php
        $con->close();
        ?>
    </body>
</html>
