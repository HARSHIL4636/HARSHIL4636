<?php 
session_start();
$servername="localhost";
$pass="";
$username="root";
$dbname='add_to_cart';



$con= new mysqli($servername,$username,$pass,$dbname);

if(!$con)
{
   die("connection faild".$con->connect_error);
}
else
{
    $sql = "SELECT * FROM reg";
    $result = $con->query($sql);
    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc())
         {
          if($row['EMAIL']===$_SESSION['email'])
          {
            if($row['PASS']===$_SESSION['pass'])
            {
                echo $_SESSION['pass'];
            }               
          }
            }
          
          }
}  
?>