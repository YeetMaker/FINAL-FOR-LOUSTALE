<html>

<head>
    <title>LiveGameLove</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script><!--font link-->

    <link rel="stylesheet" href="CSS/headerandfooter.css"><!--linking style sheet for header and footer-->
    <link rel="stylesheet" href="CSS/stylesheet.css"><!--linking style sheet-->


</head>

<body>
    <div class="header">
        <div class="inner-header">
            <div class="logo-container">
                <h1>Live<span>Game</span>Love</h1>

            </div>
            <ul class="nav">
                <a href="home.php"> <!--hyper linked to the home file(this one)-->
                    <li>Home</li>
                </a>
                <a href="inputpage.php"> <!--hyper linked to the input file(where you add and delete items)-->
                    <li>Input Page</li>
                </a>
                <a href="dealspage.php"><!--sends you to the deals page to view products currently on sale-->
                    <li>Deals</li> 
                </a>
                <a href="#bottom"><!--sends you to bottom to view contact info and the footer-->
                    <li>Contact and Info</li>
                </a>
            </ul>

        </div>

    </div>



<div class="php">
    <h1>Open Hours</h1>
        <?php
        date_default_timezone_set("EST"); //based off eastern standard time
        
        if( date("l")=='Monday' || date("l")=='Tuesday' || date("l")=='Wednesday' || date("l")=='Thursday' || date("l")=='Friday'){ //based off the day a different message will be displayed saying what time we're open
            if( date("l") =='Friday'){
                $open_time = "8:00";
                $closed_time = "6:00";
                echo"We are open from $open_time A.M. to $closed_time P.M.";
            }
            elseif(date(1) =='Monday'){
                $open_time = "10:00";
                $closed_time = "6:00";
                echo"We are open from $open_time A.M. to $closed_time P.M.<br> We don't believe in Mondays";
            }
            else{
            $open_time = "8:00";
            $closed_time = "10:00";
            echo"We are open from $open_time A.M. to $closed_time P.M."; //we're closed during the weekend
            }
        }else{
        echo "Sorry, we're gaming right now. Please come back during a week day.";
        }

        ?> 
<table>
    <tr>
    <th>
            <p>Monday</p>
        </th>
        <th>
            <p>Tuesday</p>
        </th>
        <th>
            <p>Wednesday</p>
        </th>
        <th>
            <p>Thursday</p>
        </th>
        <th>
            <p>Friday</p>
        </th>
    </tr>
    <tr>
        <td>
            <p>10:00 A.M. - 6:00 P.M.</p> <!--tables showing off the times we're opend depending on the day-->
        </td>
        <td>
            <p>8:00 A.M. - 10:00 P.M.</p>
        </td>
        <td>
            <p>8:00 A.M. - 10:00 P.M.</p>
        </td>
        <td>
            <p>8:00 A.M. - 10:00 P.M.</p>
        </td>
        <td>
            <p>8:00 A.M. - 6:00 P.M.</p>
        </td>
    </tr>
</table>
</div>
<div class="shop">
<div class="component">
    <img src="css/pictures/laptop.jpg" alt="laptop" width="500" height="350"><!--This controls what picture is displayed and the size of the picture-->
    <div class="info">
    <a href="laptops.php">Laptops</a>                      <!--This hyper links to the laptop page-->
    <p>Gaming Laptops, work laptops, you name it, we have it all. Come check out our laptops and see if they float your boat.</p> <!--just some text to fill the empty area-->
    </div>
</div>
<div class="component">
    <img src="css/pictures/gamingpc.jpg" alt="gamingpc" width="500" height="350"><!--This controls what picture is displayed and the size of the picture-->
    <div class="info">
        <a href="gamingpc.php">Gaming PCs</a><!--This hyper links to the gaming pcs page-->
        </div>
</div>
<div class="component">
    <img src="css/pictures/1.jpg" alt="1" width="500" height="400"><!--This controls what picture is displayed and the size of the picture-->
    <div class="info">
        <a href="mouse.php">Gaming Mouses</a><!--This hyper links to the gaming mouse page-->
        </div>
</div>
<div class="component">
    <img src="css/pictures/keyboard.jpg" alt="keyboard" width="500" height="350"><!--This controls what picture is displayed and the size of the picture-->
    <div class="info">
        <a href="keyboards.php">Gaming Keyboards</a><!--This hyper links to the gaming keyboard page-->
        </div>
</div>
<div class="component">
    <img src="css/pictures/rtx.png" alt="rtx" width="500" height="300"><!--This controls what picture is displayed and the size of the picture-->
    <div class="info">
        <a href="rtx.php">Graphics Cards</a><!--This hyper links to the graphics card page-->
        </div>
</div>

</div>



    <div class="footer"id= 'bottom'> <!--This is the footer-->

        <div class="footer-content">


            <div class="footer-section about">
                <h2>Live<span>Game</span>Love</h2><!--My logo with the weighted "Game" text-->
                <p class="good"> This is a business where you can purchase or sell computer parts. We have all the latest stuff from the Minecraft <!--Just text to fill empty space-->
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
                            style="font-size:30px;color:pink;"></i></a>                               <!--hyperlinked icons to social medias-->
                    <a href="https://accounts.snapchat.com/accounts/snapcodes"><i class="fab fa-snapchat"
                            style="font-size:30px;color:yellow;"></i></a>                               <!--hyperlinked icons to social medias-->

                </div>
            </div>
            <div class="footer-section link">
                
            </div>
            <div class="footer-section social">

            </div>
            <div class="footer-bottom">
                &copy; LiveGameLove.gov | Designed by Zachary Plants<!--copyright stuff-->
            </div>
        </div>
    </div>

</body>

</html>