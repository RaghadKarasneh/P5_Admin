<?php

include_once '../connection.php';
session_start();

if(isset($_POST['submit'])){
    $loginEmail=$_POST['loginEmail'];
    $loginPass=$_POST['loginPassword'];


    $stat = "SELECT * FROM  user_admin;";
    $result = mysqli_query($conn,$stat);
    $resultcheck = mysqli_num_rows($result);
 
    if($resultcheck > 0)
    {
    while($row = mysqli_fetch_assoc($result))
    {
        
        if($row['email'] == $loginEmail &&  $row['password'] == $loginPass){
            
                header("Location: ./admin_dashboard/dashboard.php");
            
        }else{if($row['email'] !== $loginEmail ||  $row['password'] !== $loginPass){
         
                $ERROR= "<span style='color: red;'> The Email or password is wrong </span>";
          
        }
    }
    }
}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- bootstrap link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- fontawesome link  -->
<script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>

</head>
<body>
    
<!-- <form action="" method="post">

<label for="loginEmail">Email</label>
<br>
<input type="text" name='loginEmail' placeholder= 'Email@...' ><br>

<br>
<label for="loginPassword">Password</label>
<br>
<input type="password" name='loginPassword' placeholder='Passwprd'><br>
<?php if(isset($ERROR)){echo $ERROR;}?>

<br><br>
<input type="submit" name='submit' value='submit'>

</form> -->








<form action="" method="post">
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://www.knowmuhammad.org/img/noavatarn.png"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;    height: 335px;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Login</h3>

            <form class="px-md-2">

              <div class="form-outline mb-4">
          


                

<input type="text" name='loginEmail' placeholder= 'Email@...' class="form-control" >
<label for="loginEmail" >Email</label>
              </div>

              <div class="row">
                <div class="form-outline mb-4">


                
                  

<input type="password" name='loginPassword' placeholder='Passwprd' class="form-control">
<label for="loginPassword">Password</label>
<?php if(isset($ERROR)){echo $ERROR;}?>


                </div>

                <input type="submit" name='submit' value='submit' class="btn btn-success btn-lg mb-1">
              

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</form>











</body>
</html>
