<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header><br>Mahindra Logistics</header>
        <home><br><br>Inventory Management System<br><br><br>
            <a href=entry.php><button>Data Entry Page</button></a>
            <a href=access.php><button>Data Access Page</button></a>
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