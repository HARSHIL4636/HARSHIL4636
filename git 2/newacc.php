<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- fonts -->
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
</style>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="ms-auto me-auto text-center mb-2 mt-2">
                <a class=" bg-dark text-light p-sm-3 btn rounded-3" href="index.html">B R A V O</a>
                </div>
                <form action="" method="post">
                <div class="bg border-3 border border-dark-subtle rounded-3 ms-auto me-auto pt-3" style="width: 25rem; padding-left: 20px; ">
                       <p class="" style="font-size: 2rem; font-family:sans-serif;">
                            Sign in
                       </p>
                            <p class="ms-1 mt-40" style="letter-spacing: 0.07rem; font-weight: 600; font-family: 'Roboto Condensed', sans-serif;">
                            REGISTRATION
                        </p>
                        <div class="input-group flex-nowrap text-center" style="font-family: sans-serif;">
                            <div class="">
                                <form action="newacc.php" method="post">
                                <div class="input-group mb-1" style="width: 22rem;">                                
                            <input type="text" id="firstName" name="FName" class="form-control mt-1"placeholder="FIRST NAME" aria-label="Username" aria-describedby="addon-wrapping" required>
                            <input type="text" name="LName" id="LastName" class="form-control mt-1" placeholder="Last Name">
                                </div>
                            <input type="email" id="email" name="email"  class="form-control" style="width: 22rem;" placeholder="ENTER YOUR EMAIL" aria-label="Email" aria-describedby="addon-wrapping" required>
                            <div class="input-group" id="passDiv">
                            <input type="password" name="pass" id="password" style="width: 19rem;" maxlength="14" class="form-control mt-1 border-end-0" placeholder="PASSWORD" aria-describedby="addon-wrapping" required><span class="btn  h-25 p-2 px-3 mt-1 border-start-0 border" id="openeye" > <i class="bi bi-eye" id="icon" ></i> </span>
                            </div>
                            <input type="submit" name="submit" id="submit" class="btn btn-warning mb-2 my-2 " style="font-family: sans-serif; width: 22rem;" value="S U B M I T ">   
                                </form>    
                        </div>
                        </div>
                </form>
                <script>
                    let xx=document.getElementById('openeye');
                    let x = document.getElementById('password');
                    let passDiv =document.getElementById('passDiv');
                    let xxx = document.getElementById('icon');
                    xx.addEventListener('click',open);
                    function open()
                    {
                        if (x.type === "password") {
    x.type = "text";
 
    xxx.className="bi bi-eye-slash";
 
  } else {
    xxx.className='bi bi-eye'
    x.type = "password";
  }
                    }
                //     function open(e)
                    
                // {
                       
                    //     x.type='text';
                    //    x.textContent=x.value;
                    //     
                    //     xx.remove();
                    //     
                        
                   
                    //     let xxs=document.getElementById('closeeye');
                    
                    // xxs.addEventListener('click',close);
                    // function close()
                    // {
                    //     x.type='password';
                        
                    //     console.log(x.type)
                    //     xxs.remove();
                    //     passDiv.innerHTML+=`<span class="btn  h-25 p-2 px-3 mt-1 border-start-0 border" id="closeeye"> <i class="bi bi-eye" ></i> </span>`
                    // }
                
                    // }
                 
                

                </script>
</body>
</html>

<?php
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
    if(isset($_POST['submit']))
    {

        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $_SESSION['email']=$_POST['email']; 
        $_SESSION['pass']=$pass;
        $sql="INSERT INTO `reg` VALUES ('$FName','$LName','$email','$pass')";
        if (mysqli_query($con, $sql)) {
            echo $_SESSION['email'];
            echo "SIGNIN SUCCESS!";
         } else {
            echo "<script> alert('ent er a another data') </script>";
         }
       
    }

}
?>
