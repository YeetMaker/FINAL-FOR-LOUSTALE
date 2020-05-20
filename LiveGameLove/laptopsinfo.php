<head>
    <title>Laptops</title>
    <link rel="stylesheet" href="CSS/phpsite.css">
    <meta charset="utf-8">
</head>
<body>
<h1>LiveGameLove</h1>
<h3>Laptops</h3>
    <?php
    include 'db.php';
    $query = "SELECT * FROM LAPTOPS ORDER BY BRAND";
    if ($result = $mysqli->query($query)) {
        // Don't do anything if successful.
     }
     else
     {
         echo "Error getting cars from the database: " . mysql_error()."<br>";
     }
     echo "<table id='Grid' style='width: 50%'><tr>";
    echo "<th style='width: 10px'>Name</th>";
    echo "<th style='width: 10px'>Brand</th>";
    echo "<th style='width: 10px'>Price</th>";
    echo "<th style='width: 10px'>Touch Screen</th>";
    echo "<th style='width: 10px'>Storage</th>";
    echo "<th style='width: 10px'>Ram</th>";
    echo "<th style='width: 10px'>In Stock</th>";
    echo "</tr>\n";
    

    $class ="odd";  // Keep track of whether a row was even or odd, so we can style it later

    // Loop through all the rows returned by the query, creating a table row for each
    while ($result_ar = mysqli_fetch_assoc($result)) {
    
    echo "<tr class=\"$class\">";
    echo "<td>" . $result_ar['NAME'] . "</td>";
    echo "<td>" . $result_ar['BRAND'] . "</td>";
    echo "<td>";
    echo '$'.number_format($result_ar['PRICE'],2);
    echo "<td>" . $result_ar['TOUCH_SCREEN'] . "</td>";
    echo "<td>" . $result_ar['STORAGE_IN_GIGABYTES'] . " Gigabytes";
    echo "</td>";
    echo "<td>" . $result_ar['RAM'] . " Gigabytes";
    echo "</td>";
    echo "<td>" .$result_ar['IN_STOCK']. "</td>";
    echo "</td>";
   echo "</td></tr>\n";


   
 
   
   // If the last row was even, make the next one odd and vice-versa
    if ($class=="odd"){
        $class="even";
    }
    else
    {
        $class="odd";
    }
}
echo "</table>";
$mysqli->close();
    ?>
</body>
