 <?php
$mysqli = new mysqli('localhost', 'root', '', 'LiveGameLove' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("LiveGameLove");
 
?>


<!-- The purpose of this page is to connect the database to the website -->