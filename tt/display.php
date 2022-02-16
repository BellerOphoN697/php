<html>
  <head>
    <title>Display</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header><br>Time Table Display</header>
    <links><br>Quick Links:<br><br>
    <a href=index.php>Home</a><br>
    <a href=entry.php>Data Entry Page</a><br>
    </links>
    <?php
    include "config.php";
    $sql="SELECT * FROM s5";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
      echo "<table><tr><th>Day</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th></tr>";
      while($row=$result->fetch_assoc())
      {
        echo "<tr><td>".$row["day"]."</td><td>".$row["one"]."</td><td>".$row["two"]."</td><td>".$row["three"]."</td><td>".$row["four"]."</td><td>".$row["five"]."</td><td>".$row["six"]."</td></tr>";
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