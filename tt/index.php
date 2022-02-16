<html>
    <head>
        <title>Time Table</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header><br>Time Table Management System</header>
        <home><br><br>Please make a selection:<br><br><br>
            <a href=staff.php><button>Staff Login</button></a>
            <a href=admin.php><button>Admin Login</button></a>
        </home>
        <footer>
            <?php
            include "config.php";
            if ($con->connect_errno)
            {
                echo "Failed to connect (".$con->connect_errno.")".$con->connect_error;
            }
            echo $con->host_info."\n";
            ?>
        </footer>
    </body>
</html>