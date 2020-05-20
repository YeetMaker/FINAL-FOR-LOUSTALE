<html>

<head>
    <title>LiveGameLove</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="CSS/headerandfooter.css">
    <link rel="stylesheet" href="CSS/stylesheet.css">
<style>                                         /* This is some styling specifically for this page*/
.component .inputs{
    color: #bababa;
    font-size: 20px;                    /* Nothing special here.*/
    text-align: center;
    font-family: arial;

}
.component .inputs input{           
background:#2b2b2b;
border-radius: 10px;
border:2px solid #1c1c1c;
font-size: 20px;
color: white;
font-family: arial;
}
h1{
    font-size:35px;
}

</style>

</head>

<body>
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
                <a href="dealspage.php">
                    <li>Deals</li>
                </a>
                <a href="#bottom">
                    <li>Contact and Info</li>
                </a>
            </ul>

        </div>

    </div>




    <div class="shop">

<div class='component'>                                       <!--I'll just go over one of these components because its basically duplicated over and over again-->
 <div class='inputs'>
 <h1>Laptops</h1>
 <form action='phppclink.php' method='post'>                    <!-- This will take inputs and send it to another php file that will connect the inputs to the database-->
 ID: <input name='ID' type='text'><br>                          
 <br />
 Name: <input name='NAME' type='text'><br>
 <br />
 Brand: <input name='BRAND' type='text'><br>
 <br />
 Touch Screen: <input name='TOUCH_SCREEN' type='text'><br>
 <br />
 Storage in Gigabytes: <input name='STORAGE_IN_GIGABYTES' type='text'><br>             <!--This basically collects values from you inputs that match the values from within the tables in the databse-->
 <br />
 Ram: <input name='RAM' type='text'><br>
 <br />
 Price: <input name='PRICE' type='text'><br>
 <br />
 Picture file name: <input name='PIC_FILE_NAME' type='text'><br>
 <br />
 In Stock: <input name='IN_STOCK' type='text'><br>
 <br />
 Day Deal: <input name='DAY_DEAL' type='text'><br>                    <!--Not much to go over here-->
 <br />

 <input type='submit' value='Submit'><br>
 </form>
 </div>
 </div>

 <div class='component'>
 <div class='inputs'>
 <h1>Gaming Computers</h1>
 <form action='phppclink.php' method='post'>                    <!-- This will take inputs and send it to another php file that will connect the inputs to the database-->
 ID: <input name='ID' type='text'><br>
 <br />
 Name: <input name='NAME' type='text'><br>
 <br />
 Brand: <input name='BRAND' type='text'><br>
 <br />
 Graphics Card: <input name='GRAPHICS_CARD' type='text'><br>
 <br />
 Storage in Gigabytes: <input name='STORAGE_IN_GIGABYTES' type='text'><br>
 <br />
 Ram: <input name='RAM' type='text'><br>
 <br />
 Price: <input name='PRICE' type='text'><br>
 <br />
 Picture file name: <input name='PIC_FILE_NAME' type='text'><br>
 <br />
 In Stock: <input name='IN_STOCK' type='text'><br>
 <br />
 Day Deal: <input name='DAY_DEAL' type='text'><br>
 <br />

 <input type='submit' value='Submit'><br>
 </form>
 </div>
 </div>
 


 <div class='component'>
 <div class='inputs'>
 <h1>Gaming Mouses</h1>
 <form action='phpmouselink.php' method='post'>                    <!-- This will take inputs and send it to another php file that will connect the inputs to the database-->
 ID: <input name='ID' type='text'><br>
 <br />
 Name: <input name='NAME' type='text'><br>
 <br />
 Brand: <input name='BRAND' type='text'><br>
 <br />
 Wireless: <input name='WIRELESS' type='text'><br>
 <br />
 Max DPI: <input name='MAX_DPI' type='text'><br>
 <br />
 Buttons: <input name='BUTTONS' type='text'><br>
 <br />
 Color: <input name='COLOR' type='text'><br>
 <br />
 Price: <input name='PRICE' type='text'><br>
 <br />
 Picture file name: <input name='PIC_FILE_NAME' type='text'><br>
 <br />
 In Stock: <input name='IN_STOCK' type='text'><br>
 <br />
 Day Deal: <input name='DAY_DEAL' type='text'><br>
 <br />

 <input type='submit' value='Submit'><br>
 </form>
 </div>
 </div>

 <div class='component'>
 <div class='inputs'>
 <h1>Gaming Keyboard</h1>
 <form action='phpkeyboardlink.php' method='post'>                    <!-- This will take inputs and send it to another php file that will connect the inputs to the database-->
 ID: <input name='ID' type='text'><br>
 <br />
 Name: <input name='NAME' type='text'><br>
 <br />
 Brand: <input name='BRAND' type='text'><br>
 <br />
 Wireless: <input name='WIRELESS' type='text'><br>
 <br />
 LED: <input name='LED' type='text'><br>
 <br />
 Purpose: <input name='PURPOSE' type='text'><br>
 <br />
 Color: <input name='COLOR' type='text'><br>
 <br />
 Price: <input name='PRICE' type='text'><br>
 <br />
 Picture file name: <input name='PIC_FILE_NAME' type='text'><br>
 <br />
 In Stock: <input name='IN_STOCK' type='text'><br>
 <br />
 Day Deal: <input name='DAY_DEAL' type='text'><br>
 <br />

 <input type='submit' value='Submit'><br>
 </form>
 </div>
 </div>

 <div class='component'>
 <div class='inputs'>
 <h1>Graphics Card</h1>
 <form action='phpgcardlink.php' method='post'>                    <!-- This will take inputs and send it to another php file that will connect the inputs to the database-->
 ID: <input name='ID' type='text'><br>
 <br />
 Brand: <input name='BRAND' type='text'><br>
 <br />
 Name: <input name='TYPE' type='text'><br>
 <br />
 Version: <input name='VERSION' type='text'><br>
 <br />
 Price: <input name='PRICE' type='text'><br>
 <br />
 Picture file name: <input name='PIC_FILE_NAME' type='text'><br>
 <br />
 In Stock: <input name='IN_STOCK' type='text'><br>
 <br />
 Day Deal: <input name='DAY_DEAL' type='text'><br>
 <br />

 <input type='submit' value='Submit'><br>
 </form>
 </div>
 </div>

 <div class='component'>
 <div class='inputs'>
 <h1>Delete Something</h1>
 <form action='phpdeletelink.php' method='post'>                    <!-- This will take inputs and send it to another php file that will connect the inputs to the database-->
 Specify table name(laptops, gamingmouse, graphics_card, pc, keyboards): <input name='TABLE' type='text'><br>
 <br />
 Name of what you want to deleted: <input name='DEL_NAME' type='text'><br>
 <br />
 Brand of product: <input name='DEL_BRAND' type='text'><br>
 <br />


 <input type='submit' value='Submit'><br>
 </form>
 </div>
 </div>



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