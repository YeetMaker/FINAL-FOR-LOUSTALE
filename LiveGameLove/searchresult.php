<html>

<head>
    <title>LiveGameLove</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="CSS/headerandfooter.css">
    <link rel="stylesheet" href="CSS/stylesheet.css">
<style>
.phpstuff{
    font-size: 50px;
    color: white;
}
</style>

</head>

<div class="header">
        <div class="inner-header">
            <div class="logo-container">
                <h1>Live<span>Game</span>Love</h1>

            </div>
            <ul class="nav">
                <a href="home.php">
                    <li>Home</li>
                </a>
                <a href="inputpage.php">
                    <li>Input Page</li>
                </a>
                <a href="#">
                    <li>Stonks</li>
                </a>
                <a href="#">
                    <li>Contact</li>
                </a>
            </ul>

        </div>

    </div>


<div class="phpstuff">
<?php
include 'db.php';
$query = "SELECT * FROM laptops ORDER BY ID";
$sql = "SELECT 'ID', 'NAME', 'BRAND', 'PRICE, 'TOUCHSCREEN', 'STORAGE_IN_GIGABYTES', 'RAM', 'PIC_FILE_NAME', 'IN_STOCK' FROM 'laptops' WHERE NAME='$ITEM'";
if($conn->query($sql)){
    echo"Inserted correctly";
}
else{
    echo"Error";

}
if ($result = $mysqli->query($query)) {
    // Don't do anything if successful.
 }
 else
 {
     echo "Error getting data from the database: " . mysql_error()."<br>";
 }            


 //this will create a connection
 $ITEM = filter_input(INPUT_POST, 'ITEM');
 $host = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "livegamelove";
 $conn= new mysqli ($host, $dbusername, $dbpassword, $dbname);
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
      echo"cool beans <br>";
  }

echo    "<div class='component'>";
echo        "<img src='css/pictures/". $result_ar['PIC_FILE_NAME'] . "' alt='laptop" .$result_ar['ID'] . "' width='500' height='350'>";  //This will pull a picture with the corresponding image file name for the 
echo    "<div class='info'>";
echo        "<a href='#'>Add To Cart</a>";
echo  "<h1>".$result_ar['NAME']."</h1><br>";
echo "<h2>Specifications: </h2><br>";
echo "<div class='.specs'>";
echo "<b>Brand: </b>" . $result_ar['BRAND']."<br>";
echo "<b>Touch Screen: </b>" . $result_ar['TOUCH_SCREEN']."<br>";
echo "<b>Storage: </b>" . $result_ar['STORAGE_IN_GIGABYTES']." Gigabytes<br>";
echo "<b>Ram:</b> " . $result_ar['RAM'] . " Gigabytes<br>";
echo "<b>Price:</b> $" . number_format($result_ar['PRICE'],2)."<br>"; 
echo "<b>In Stock:</b> ". $result_ar['IN_STOCK']."<br>";
echo"</div>";

echo    "</div>";
echo    "</div>";
$conn->close();
 
?>
</div>




<div class="footer">

<div class="footer-content">


    <div class="footer-section about">
        <h2>Live<span>Game</span>Love</h2>
        <p class="good"> This is a business where you can purchase or sell computer parts. We have all the latest stuff from the Minecraft 
            raytracing RTX's all the way to the GTX 001. Our stock is incredible and your computer will be too. Don't worry all our parts a
            re made in America, so you dont have to risk getting the Corona Virus.</p>
        <div class="contact">
            <span><i class="fas fa-phone" style="font-size:20px;color:white;"></i> &nbsp; (530)680-8781</span>
            <span><i class="fas fa-envelope" style="font-size:20px;color:white;"></i> &nbsp;
                zmanplants@gmail.com</span>
        </div>
        <div class="social">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/zackugh/"><i class="fab fa-instagram"
                    style="font-size:30px;color:pink;"></i></a>
            <a href="https://accounts.snapchat.com/accounts/snapcodes"><i class="fab fa-snapchat"
                    style="font-size:30px;color:yellow;"></i></a>

        </div>
    </div>
    <div class="footer-section link">
        
    </div>
    <div class="footer-section social">

    </div>
    <div class="footer-bottom">
        &copy; LiveGameLove.gov | Designed by Zachary Plants
    </div>
</div>
</div>

</body>

</html>