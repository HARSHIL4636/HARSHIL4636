 
 <!-- virsion 1.1 
      calculation with pricing 
      and modify with PRICE DIV
      add to price and add ids in all pricing 
      
      virsion 1.2 
      i) add al pricing and 
      ii) add loop in pricing in js.

      https://www.youtube.com/watch?v=-aRRH0gZYQw&t=1840s

     -->
     <?php session_start(); 
     $servername="localhost";
     $pass="";
     $username="root";
     $dbname='add_to_cart';
     $con= new mysqli($servername,$username,$pass,$dbname);
    //  echo $_SESSION['email'];
    ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font  -->
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quantico:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Lexend&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <!-- bootstrap bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      @keyframes slideInLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

header {
  animation: 1s ease-out 0s 1 slideInLeft;
  background: #666;
  padding: 40px;
}

    </style>
</head>
<body class="">
   
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand bg-light text-dark p-sm-3 rounded-3 text-center" href="index.php">B R A V O</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ps-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="main_Ul">
              <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CROCS.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CROCS</a></li>   
              <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-light" href="CASUAL.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL </a></li>
              <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="Formal.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> FORMAL </a></li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="B R A V O  Shues" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
            <ul class="navbar-nav px-3">
            <?php
            if(!$con)
  {
    
     die("connection faild".$con->connect_error);
  }
  else
  { 
    
  $sql = "SELECT * FROM reg";
  $result = $con->query($sql);
  if(isset($_SESSION['email']) && isset($_SESSION['pass']))
  {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($row['EMAIL']===$_SESSION['email'])
        {
            if($row['PASS']===$_SESSION['pass'])
            { ?>

              <li class=" me-2 outline nav-item d-inline-flex">
                <div class="px-2 container-sm pt-1   ">
                    <a href="Mycart.php" class="">
                        <div class="btn btn-sm">
                            
                        <p class="text-light mb-0">
                            Cart
                          
                
                       <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" >
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      </span>
                    </p>
                    </div>
                        
                    </a>
                </div>
            </li>
            <li class="me-2 outline nav-item">
              <div class='text-light'>
                <form action="CART.php" method='post'>
                <input type="hidden" name="PName" value='index.php'>
                <button type="submit" name='LOGOUT' class='mt-1 px-3 btn btn-sm text-light'>LOGOUT</button>
                </form>

              </div>
            </li>
              <?php }
              else
              {  ?>
               <li class="nav-item outline me-1 text-center h-25">
                  <a href="signAcc.html" class="btn btn-sm p-0">
                  <div class="container-sm text-light">
                  <p class="me-2" style="font-size: 0.65rem; display:inline;"><span> hey,sign in </span> </p>
                  <p class="mb-0" style="font-weight: 700; font-size: 0.90rem;">  Account </p>
                </div>
                </a>
              </li>
            

              
            <?php   } 
        } 
      }
    }

  }
  
    else
    {  ?>
     <li class="nav-item outline me-1 text-center h-25">
        <a href="signAcc.html" class="btn btn-sm p-0">
        <div class="container-sm text-light">
        <p class="me-2" style="font-size: 0.65rem; display:inline;"><span> hey,sign in </span> </p>
        <p class="mb-0" style="font-weight: 700; font-size: 0.90rem;">  Account </p>
      </div>
      </a>
    </li>


    
  <?php   } 
  }
        ?>  
        <li class='nav-item'>
              
                  <a class="nav-link bg-secondary text-light rounded-1" href="https://www.instagram.com/magnet_shoes_pb/">INSTAGRAM</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  <nav id="nav2" class="avbar navbar-light bg-dark rounded-pill w-25 me-auto ms-auto p1 mt-1">
        <!-- As a link -->
    <div class="container-fluid text-center p-1">
      <h1 class="ms-auto me-auto  navbar-brand text-light text-offset-2 text-underline-opacity-25 text-underline-opacity-100-hover">SPORTS</h1>
    </div>
  </nav>

<!-- main starting -->
<div id="main" >
  <div id="header">
<!-- top image -->
<div id="carouselExampleControl" class=" w-100 carousel slide container-lg h-50 mt-2 rounded-3" data-bs-ride="carousel">
  <div class="carousel-inner rounded-3 ">
    <div class="carousel-item active">
      <img src="top\top.jpg" class="d-block w-100 rounded-3" alt="...">
    </div>
    <div class="carousel-item">
      <img src="top\top2.jpg" class="d-block w-100 rounded-3" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="prev">
    <span class="carousel-c ontrol-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- top image -->

<!-- 1st row start  -->
      <div class="row align-items-center my-2 container-sm ms-auto me-auto">
       <!-- first part -->
        <div class="col container card shadow p-3  m-2">
              <div id="carouselExampleCaptions" class="carousel slide  container-fluid">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-3">
              <div class="carousel-item active ">
                <img src="boo\shue1.jpeg" class="d-block w-100 rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block  mt-5 mb-0 pt-5 position-absolute top-50">
                  <h5 class="mt-2"><span style="color:white; background-color:slategray; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">GREY</span> COLOR</h5>    
        
                </div>
              </div>
              <div class="carousel-item">
                <img src="boo\shue2.jpeg" class="d-block w-100 h-50 rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block mt-5 mb-0 pt-5 position-absolute top-50">
                  <h5><span style=" color:black; background-color:WHITE; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">WHITE</span> COLOR</h5>    
        
                </div>
              </div>
              <div class="carousel-item">
                <img src="boo\shue3.jpeg" class="d-block w-100  rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block  mt-5 mb-0 pt-5 position-absolute top-50">
                            <h5><span style="color:white; background-color:black; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">BLACK</span> COLOR</h5>    
              
                </div>
              </div>
            </div>

            <button class="carousel-control-prev ps-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
          <div class=" text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
            
            <p class="card-text"> Premium Qulity  Soft Fabric.</p>
            <h5 class="ms-auto me-auto d-inline-grid" >
           <div class="" >
            <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS1"> </span></p>
            <span class="">
            <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice1">5000</s></small>
          
            &#8377<span  class="fs-6" id="DisPrice1" style="font-family: 'Quantico', sans-serif;"></span>
            </span>
          </div>
          </h5>
          <form action="CART.php" method="post"> 
            <input type="hidden" name="price" id="DPSI1" value="">
            <input type="hidden" name="itam" value="Premium Qulity  Soft Fabric">
            <input type="hidden" name="itam_pic" value='shue1.jpeg'>
            <button type="submit" name="ADD" id='btn1' class="btn btn-warning"> ADD TO CART <i class="bi bi-cart-plus-fill " id='btncart1'></i></button>

             
        </form>
        </div>
      </div>
        <!-- second part  -->
        <div class="col container card shadow p-3 ">
            <div id="carouselExampleAutoplaying" class="carousel slide container-fluid" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3">
                  <div class="carousel-item active">
                    <img src="boo\shue14.jpeg" class="d-block w-100 rounded-3" alt="...">
                    <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                      <h5 class="mt-5 mb-0 pb-0">
                      <span style="background: rgb(121,90,173);
                      background: linear-gradient(90deg, rgba(121,90,173,1) 0%, rgba(128,153,187,1) 48%, rgba(97,144,67,1) 100%); font-weight:700 ; color: black;" class="p-2 align-top rounded-3 py-0">  Gradient </span>
                      <span class="bg-dark ms-2 px-2 py-1 rounded-3 pt-0 fs-6 text-white align-text-top" > BLACK </span>
                      </span>
                     </h5>
                    
                     </div>
                  </div>
                  <div class="carousel-item rounded-3">
                    <img src="boo\shue11.jpg" class="d-block w-100 rounded-3 " alt="...">
                    <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                      <h5 class="mt-5 mb-0 pb-0 rounded-pill text-center" >
                      <span style="background-color: navy;"   class="p-2 align-top rounded-3 py-0">  NAVY BLUE </span>
                      
                      </span>
                     </h5>
                   
                     </div>
                  </div>
                  
                </div>
                <button class="carousel-control-prev ps-3" type="button" name="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


              <div class=" text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
          
                <form action="CART.php" method="post">
                  <p class="card-text "> CONFORTABLE Running. </p>
                  <h5 class="ms-auto me-auto d-inline-grid" >
                 <div class="">
                  <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS2"></span></p>
                  <span class="">
                  <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice2">1799</s></small>
                
                  &#8377<span  class="fs-6" id="DisPrice2" style="font-family: 'Quantico', sans-serif;"></span>
                  </span>
                </div>
                </h5>
                <input type="hidden" name="price" id="DPSI2" value="">
                <input type="hidden" name="itam" value="CONFORTABLE Running.">
                <input type="hidden" name="itam_pic" value='shue14.jpeg'>
                <button type="submit" name="ADD" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill" ></i></button>
              </form>
            
            </div>
                      </div>
        

        <!-- third part -->
        <div class="col container card shadow p-3 m-2">
          <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner rounded-3 container-fluid ">
              <div class="carousel-item active">
                <img src="boo\shue8.jpeg" class="d-block w-100 rounded-3" alt="...">
                <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                  <h5 class="mt-5 pb-0 p-1 rounded-pill mb-0 " >
                  <span class=" align-top rounded-3 bg-dark text-light m-0 px-3 "> WHITE </span>
                  <span class="bg-info ms-0 px-3 ms-1 py-1 rounded-3 pt-0 fs-6 text-dark align-top " > BLUE </span>
                  </span>
                 </h5>

                 </div>
              </div>
              <div class="carousel-item">
                <img src="boo\shue9.jpeg" class="d-block w-100 rounded-3" alt="...">
                <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                  <h5 class="mt-5 pb-0 p-1 rounded-pill mb-0 " >
                  <span class=" align-top rounded-3 bg-dark text-light m-0 px-3 "> BLACK </span>
                  <span style="background-color:chartreuse; font-size: small;" class="ms-1 p-1 rounded-3 pt-0 text-dark align-top" >CHARTREUSE</span>
                  </span>
                 </h5>
              
                 </div>
              </div>
              <div class="carousel-item">
                <img src="boo\shue10.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                  <h5 class="mt-5 pb-0 p-1 rounded-pill mb-0 " >
                  <span class=" align-top rounded-3 bg-dark text-light m-0 px-3 "> BLACK </span>
                  <span class="ms-1 p-1 rounded-3 pt-0 text-dark bg-light fs-6   pb-0 align-top" >WHITE</span>
                  </span>
                 </h5>
               
                 </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
           
            </div>
            
            <div class="text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm ">
          
              <form action="CART.php" method='post'>
                <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">AIR STYLE.</p>
                <h5 class="ms-auto me-auto d-inline-grid" >
               <div class="">
                <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS3"></span></p>
                <span class="">
                <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice3">1769</s></small>
              
                &#8377<span  class="fs-6" id="DisPrice3" style="font-family: 'Quantico', sans-serif;"></span>
                </span>
              </div>
              </h5>
              <input type="hidden" name="price" id="DPSI3" value="">
                <input type="hidden" name="itam" value="AIR STYLE">
            <input type="hidden" name="itam_pic" value='shue8.jpeg'>

                <button type="submit" name="ADD" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
              </form>
          
          
          </div>
        </div>
      </div>
  
<!-- 2nd row -->

      <div class="row align-items-center my-2 container-sm ms-auto me-auto">
  <!-- 4th part -->
         <div class="col container card shadow p-3 m-2">
               <div id="carouselExampleCaptions2" class="carousel slide container-fluid">
             <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
             </div>
             <div class="carousel-inner rounded-3">
               <div class="carousel-item active ">
                 <img src="boo\shue15.jpeg" class="d-block w-100 rounded-3" alt="...">
                 <div class="carousel-caption d-none d-md-block  mt-4 mb-0 pt-5 position-absolute top-50">
                   <h5 class="mt-5"><span style="color:white; background-color:slategray; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">GREY</span> <span style="background-color: rgb(107, 153, 192);" class=" rounded-3 text-dark px-2 p-1 fs-6"> SKY BLUE</span> </h5>    
                   </div>
               </div>
             </div>
 
             <button class="carousel-control-prev ps-3" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
           </div>
           
           <div class="text-light bg-dark  pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
            <form action="CART.php" method="post">
              <p class="card-text "> CR7 </p>
              <h5 class="ms-auto me-auto d-inline-grid" >
             <div class="">
              <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS4"></span></p>
              <span class="">
              <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice4">2499</s></small>
            
              &#8377<span  class="fs-6" id="DisPrice4" style="font-family: 'Quantico', sans-serif;"></span>
              </span>
            </div>
            </h5>
          
            <input type="hidden" name="price" id="DPSI4" value="">
            <input type="hidden" name="itam" value="CR7">
            <input type="hidden" name="itam_pic" value='shue15.jpeg'>
            
            <button type="submit" name="ADD" class="btn btn-warning"> ADD TO CART <i class="bi bi-cart-plus-fill "></i></button>

          </form>
          
        </div>
       </div>
         <!-- 5th part -->
         <div class="col container card shadow p-3 m-2">
             <div id="carouselExampleAutoplaying2" class="carousel container-fluid slide  " data-bs-ride="carousel">
                 <div class="carousel-inner rounded-3">
                   <div class="carousel-item active">
                     <img src="boo\shue16.jpg" class="d-block w-100" alt="...">
                     <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                       <h5 class="mt-5 mb-0 pb-0">
                       <span style="background: rgb(11,219,213);
                       background: linear-gradient(90deg, rgba(11,219,213,1) 0%, rgba(194,56,79,1) 48%, rgba(255,255,255,1) 100%); font-weight:700 ; color: whitesmoke;" class="p-2 align-top rounded-3 py-0">  Multi </span>
                       <span class=" ms-2 px-2 py-1 rounded-3 pt-0 fs-6 text-dark align-text-top" > COLOR </span>
                       </span>
                      </h5>
                   
                      </div>
                   </div>
                   <div class="carousel-item rounded-3">
                     <img src="boo\shue17.jpg" class="d-block w-100  rounded-3 " alt="...">
                     <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                       <h5 class="mt-lg-5 pt-2 mb-0 pb-0 rounded-pill text-center" >
                       <span style="background-color: rgb(17, 17, 57);"   class="p-2 align-top rounded-3 py-0">  NAVY BLUE </span>
                       
                       </span>
                      </h5>
                     
                      </div>
                   </div>
                   
                 </div>
                 <button class="carousel-control-prev ps-3" type="button" name="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
                 </button>
               </div>
 
               <div class="text-light bg-dark  pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
          
                <form action="CART.php" method="post">
                  <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">DAY BY DAY</p>
                  <h5 class="ms-auto me-auto d-inline-grid">
                 <div class="">
                  <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS5"></span></p>
                  <span class="">
                  <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice5">2689</s></small>
                
                  &#8377<span  class="fs-6" id="DisPrice5" style="font-family: 'Quantico', sans-serif;"></span>
                  </span>
                </div>
                </h5>
                <input type="hidden" name="price" id="DPSI5" value="">
            <input type="hidden" name="itam" value="DAY BY DAY">
            <input type="hidden" name="itam_pic" value='shue16.jpg'>

            <button type="submit" name="ADD" class="btn btn-warning"> ADD TO CART <i class="bi bi-cart-plus-fill "></i></button>

              </form>
            
            
            </div>
                       </div>
         
 
         <!-- 6th part   -->
         <div class="col container card shadow p-3 m-2">
           <div id="carouselExampleFade2" class="carousel slide carousel-fade">
             <div class="carousel-inner rounded-3 container-fluid ">
               <div class="carousel-item active">
                 <img src="boo\shue19.jpg" class="d-block w-100 rounded-3 " alt="...">
                 <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                   <h5 class="mt-5 pb-0 p-1 rounded-pill mb-0 " >
                   <span class="bg-secondary ms-0 px-3 ms-1 py-1 rounded-3 pt-0 fs-6 text-light align-top " > GREY </span>
                   </span>
                  </h5>
                  
                  </div>
               </div>
               <div class="carousel-item">
                 <img src="boo\shue18.jpg" class="d-block w-100 rounded-3" alt="...">
                 <div class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                   <h5 class="mt-2 pb-0 p-1 pt-5 rounded-pill mb-0 " >
                   <span class=" align-top rounded-3 bg-dark text-light m-0 px-3 " > BLACK 
                   </span>
                  </h5> 
                  </div>
               </div>
              
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
     
             <div class="text-light bg-dark  pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
          
              <form action="CART.php" method='post'>
                <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">RUN OUT DOOR</p>
                <h5 class="ms-auto me-auto d-inline-grid" >
               <div class="">
                <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS6"></span></p>
                <span class="">
                <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice6">1769</s></small>
              
                &#8377<span  class="fs-6" id="DisPrice6" style="font-family: 'Quantico', sans-serif;"></span>
                </span>
              </div>  
              </h5>
              <input type="hidden" name="price" id="DPSI6" value="">
            <input type="hidden" name="itam" value="RUN OUT DOOR">
            <input type="hidden" name="itam_pic" value='shue18.jpg'>

            <button type="submit" name="ADD" class="btn btn-warning"> ADD TO CART <i class="bi bi-cart-plus-fill "></i></button>

            </form>
          
          
          </div>

        </div>
</div>
</div>
       
<script>
        document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth > 992) {

	document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

		everyitem.addEventListener('mouseover', function(e){

			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.add('show');
				nextEl.classList.add('show');
			}

		});
		everyitem.addEventListener('mouseleave', function(e){
			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.remove('show');
				nextEl.classList.remove('show');
			}
		})
	});

}
// end if innerWidth
}); 
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>


  // // DISCOUNTED FINAL price of ITAM
  // let b = document.getElementById('DisPrice1');
  // // REAL PRICE OF PROCDUCT
  // let a=document.getElementById('realPrice1');
  // // PERSANTAGE OF PRICE EMLEMENT SPAN
  // let DPS=document.getElementById('DPS1');
  // let realPrice=a.textContent;
  // let Dprice=b.textContent;
  // let R=Number(realPrice);
  // let D=Number(Dprice);  
  // // DISCOUN PERSANTAGE 
  // let DP=40;
  // let per=R*DP/100;
  // console.log(R);
  
  // console.log(D);
  
  //  D=R-per;
  // console.log(D);
  // b.textContent=D;
  // DPS.textContent=DP+'% off'; 
  // console.log(DISCOUNTED)
  


  // for loop
  let i = Number(1)
  for(i=1;i<=100;i++)
  {
     // DISCOUNTED FINAL price of ITAM
  let b = document.getElementById('DisPrice'+i);
  // REAL PRICE OF PROCDUCT
  let a=document.getElementById('realPrice'+i);
  // PERSANTAGE OF PRICE EMLEMENT SPAN
  let DPS=document.getElementById('DPS'+i);
  let DPSI=document.getElementById('DPSI'+i);
  let realPrice=a.textContent;
  let Dprice=b.textContent;
  let R=Number(realPrice);
  let D=Number(Dprice);  
  // DISCOUN PERSANTAGE 
  let DP=40;
  let per=R*DP/100;
  // console.log(R);
  
  // console.log(D);
  
   D=R-per;
  // console.log(D);
  DPSI.value=D;
  b.textContent=D;
  DPS.textContent=DP+'% off';
    // console.log(DPSI);   

  }

</script>
<script>
  let btn=document.getElementById('btn1');
  console.log(btn);
  btn.addEventListener("click", OK);
  function OK(e)
  {
    let btncart=document.getElementById('btncart1');
    consol.log(btncart);

  }

  
const audio = new Audio("C:/wamp64/www/bravo shues collection/pop-1.mp3");
const buttons = document.querySelectorAll("button");

buttons.forEach(button => {
    button.addEventListener("click", () => {
      audio.play();
    });
  });
</script>
</body>
</html>