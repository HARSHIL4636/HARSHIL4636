<?php
if(isset($_POST['Y']))
{
include('index.php');
}
elseif ($_POST['N']) 
{
    echo "<script> alert('TRY TO CREATE NEW ACCOUNT WITH CORRECT NAME ');</script>";
   
}
else {
    echo "<script>alert('TRY TO SIGNIN...;)');</secipt>";
}
?>