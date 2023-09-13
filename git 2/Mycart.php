
<?php session_start();

$servername="localhost";
$pass="";
$username="root";
$dbname='add_to_cart';
$con= new mysqli($servername,$username,$pass,$dbname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,500&display=swap" rel="stylesheet"> 
<!-- icon  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
  .SMALL
  {
    width:5rem; 
  }

  .RMT
  {
    letter-spacing:0.1rem;
    margin-top:2.37rem;
  }
</style>
</head>

<body>
        <div class="ms-auto me-auto text-center mb-2 mt-3 ">
             

            <a class=" bg-dark text-light p-sm-3 btn rounded-3" href="index.html">B R A V O</a>
            <div class="w-75 border border-dark border-3 rounded-3 ms-auto me-auto m-2">
                <p class=" text-start ms-4 my-2 ps-3">
            <span class="fs-4 p-1  " style="font-family: 'Alegreya Sans SC', sans-serif;">
                SHOPPING CART <i class="bi bi-cart-check"></i>
            </span>
        </p>
        <table class="table table-striped">
            <thead class="text-center">
                <tr>
                  <th scope="col">SR.no</th>
                  <th scope="col">ITAMS</th>
                  
                  <th scope="col">QUONTITY</th>
                  <th scope="col">PRICE</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php 

                $sr=0;
                if(isset($_SESSION['email']))
                {

                  
  

                $email=$_SESSION['email'];
                  $sql = "SELECT * FROM itams WHERE EMAIL='$email'";
                  $result = $con->query($sql);
                  $i=1;
                  if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc())
                  {
                    echo 
                    "
                    <tr class='text-center'>
                  <th scope='row' class='pt-5'>$i</th>
                  <td> <img src='boo/$row[ImgAdd]' class='SMALL border border-3'> <br><span class='fw-bold'> $row[ITAM] </span> </td>
                  
                  <td class='pt-5'><input type='number' id='qon' class='w-25 fw-bold text-center small' value='$row[Qon]' > </td>
                  <td class='fw-bold pt-5' >&#8377 <span id='price'>$row[PRICE]</span></td>
                  <td>
                  <form action='CART.php' method='post'> 
                <input type='hidden' name='itam' value='$row[ITAM]'>
                  <button type='submit' class=' RMT btn btn-sm btn-outline-danger' name='remove'>REMOVE</button>
                    </td>
                </tr>
                   ";
                   $i++;
                  }
                  
                }
              
              }
            
                ?>
                
              </tbody>
          </table>
        
        </div>
    </div>
  <script src="Mycart.js"></script>
</body>
</html>