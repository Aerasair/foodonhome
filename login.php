<?php 
session_start();

?>


<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="css/main.css">
    <title>Администрирование</title>
    <meta charset=utf-8>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
 <?php
echo "<body style='background:#fff;';>";  
     if ($_SESSION['notauth']!='0') {
        
echo "<div  class='formnotauth'>
<form method='post' action='login.php'>
Логин <input type='text' name='login'><br>
Пароль <input type='password' name='password'><br>
<input type='submit' value='Войти'> </form>
</div> 
</body></html>";
         
         if($_POST['login']=='admin' && $_POST['password']=='admin'){
             $_SESSION['notauth'] = '0';  echo '<script>location.reload()</script>';

         }      
         else {
             $_SESSION['notauth'] = '1'; 
         }
exit;
}
 if (isset($_SESSION['notauth'])=='0') {
        echo "<body>";
         
         }
?>







    <div class="menu">
        <nav class="">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Admin pizza</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    
                    <li><a href="<?php session_destroy();?>">Выход</a></li>
                </ul>
            </div>
        </nav>
    </div>



    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "food";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>

<?php
$sql = "SELECT * FROM food ORDER BY id DESC";
echo "<table border=1>";
 echo "<tr><td>id</td><td>Заказ</td><td>Сумма</td><td>Имя</td><td>Телефон</td><td>Адрес</td><td>Комментарий</td><td>Статус</td><td>Время заказа</td><td>Время доставки</td></tr>";
$result = $conn->query($sql);
$k=0;

if ($result->num_rows > 0) {
    // output data of each row
   
    echo "<tr>";
  
    while($row = $result->fetch_assoc()) {
    
 echo "<td>" . $row["id"]. "</td><td>Заказ: ".$row["description"]."</td><td>".$row["sum"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["adress"]."</td><td>".$row["comment"]."</td><td>".$row["status"]."</td><td>".$row["time_order"]."</td><td>".$row["time_deliver"]."</td>";
 echo "</tr>";
    }
   
} else {
    echo "0 results";
}

echo "</table>";

$conn->close();
?>


<?php
//$str='11060569168068269807943360910741';
//for ($x=0; $x<strlen($str); $x++) echo $str[$x].' ';

?>
