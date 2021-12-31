<html>
  <head>
    <title>Data Display</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header><br>Mahindra Logistics</header>
    <links><br>Quick Links:<br><br>
    <a href=index.php>Home</a><br>
    <a href=entry.php>Data Entry Page</a><br>
    </links>
    <?php
    include "config.php";
    $key=$_GET["keyword"];
    $sql="SELECT * FROM entries WHERE pid =$key";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
      echo "<table><tr><th>Serial No.</th><th>Product ID</th><th>Name</th><th>Count</th><th>Date of Arrival</th><th>Date of Departure</th><th>Place of Delivery</th></tr>";
      while($row=$result->fetch_assoc())
      {
        echo "<tr><td>".$row["sno"]."</td><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["pcount"]."</td><td>".$row["doa"]."</td><td>".$row["dod"]."</td><td>".$row["place"]."</td></tr>";
      }
    }
    else
    {
      echo "<result><br><br>0 results</result>";
    }
    ?>
    <search><a href=access.php>Search for another item</a></search>
  </body>
</html>
