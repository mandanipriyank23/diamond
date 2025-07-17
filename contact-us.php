<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>



<?php 
  include('partials/menu.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
       <!--  <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
    </head>
    <body>
   
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">

                <div class="text-center">
                </br></br> <h2 class="text-center"> contact-us <hr/></h2><br/><br/>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
<div style="width:100%">
<table class="table">
    <tr>
        <th width="200">location 📍:</th>
        </br> <td width="500">999- Maruti-nandan Rasturant,<br />
        Jewels circle,<br />
        bhavnagar, gujrat 364002,<br />
        India</br></br>
    </td>
    </tr>
        <tr>
        <th>phone ☎ :</th>
        <td></br>priyank patel : 9313560156    
        <br>Dev patel : 8849085600</br></br></td>
        </tr>
        <tr>
        <th>mail 📨 :</th>
        <td>mandanipriyank@gmail.com</td>
    </tr>
</table>
</div>

</div>
</div> 
</div>
        
</body>
</html>




<?php
  include('partials/footer.php');

  ?>