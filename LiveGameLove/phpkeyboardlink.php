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
                <a href="#">
                    <li>Business</li>
                </a>
                <a href="dealspage.php">
                    <li>Deals</li>
                </a>
                <a href="#bottom">
                    <li>Contact and Info</li>
                </a>
            </ul>

        </div>

    </div>


<div class="phpstuff">
<?php
include 'db.php';
$query = "SELECT * FROM keyboards ORDER BY ID";
if ($result = $mysqli->query($query)) {
    // Don't do anything if successful.
 }
 else
 {
     echo "Error getting data from the database: " . mysql_error()."<br>";
 }                   
 $ID = filter_input(INPUT_POST, 'ID');
 $NAME = filter_input(INPUT_POST, 'NAME');
 $BRAND = filter_input(INPUT_POST, 'BRAND');
 $PRICE = filter_input(INPUT_POST, 'PRICE');
 $WIRELESS = filter_input(INPUT_POST, 'WIRELESS');
 $PURPOSE = filter_input(INPUT_POST, 'PURPOSE');
 $LED = filter_input(INPUT_POST, 'LED');
 $COLOR = filter_input(INPUT_POST, 'COLOR');
 $PIC_FILE_NAME = filter_input(INPUT_POST, 'PIC_FILE_NAME');
 $IN_STOCK = filter_input(INPUT_POST, 'IN_STOCK');
 $DAY_DEAL = filter_input(INPUT_POST, 'DAY_DEAL');
 //this will create a connection
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
$sql = "INSERT INTO gamingmouse (ID, NAME, BRAND, PRICE, WIRELESS, PURPOSE, LED, COLOR, PIC_FILE_NAME, IN_STOCK)
VALUES ('$ID', '$NAME', '$BRAND', '$PRICE', '$WIRELESS', '$PURPOSE', '$LED', '$COLOR', '$PIC_FILE_NAME', '$IN_STOCK', '$DAY_DEAL')";
if($conn->query($sql)){
    echo"Inserted correctly";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
 
?>
</div>




<div class="footer"id= 'bottom'>

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