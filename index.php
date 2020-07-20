<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <style type="text/css">
    	body
    	{
font-family: 'Poppins', sans-serif;
    	}
    	.bg
    	{
    		background-color: #fff;
    		
    		width: 350px;
    	}
    </style>

	<title>Sign Up</title>
</head>
<body>




  <div class="container mt-3">
  	<div class="row">
  		<div class="col-md-12">
  			<center>
  			<div class="bg shadow"><br>
  				<i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 60px;"></i><br><br>
  				<h3>Sign Up</h3><br>
                 
                 <form method="post">
                 	   <input type="text" style="border-radius: 50px; width: 95%;" class="form-control" name="f_name" placeholder="First Name" required><br>
                   <input type="text" style="border-radius: 50px; width: 95%;" class="form-control" name="l_name" placeholder="Last Name" required><br>
<input type="email" style="border-radius: 50px; width: 95%;" name="email" class="form-control" placeholder="Enter Email Id" required><br>
<input type="number" style="border-radius: 50px; width: 95%;" name="phone" class="form-control" placeholder="Enter Phone Number" required><br>
<input type="password" style="border-radius: 50px; width: 95%;" name="pass" class="form-control" id="passw" placeholder="Password" required><br>
<input type="password" style="border-radius: 50px; width: 95%;" name="cpass" class="form-control" id="cpassw" placeholder="Confirm Password" required><br>
<input type="submit" style="border-radius: 50px; width: 95%;" name="submit" class="btn btn-dark" value="Sign In" onclick="myfun()"><br><br>
            <a href="login.php"><input style="border-radius: 50px; width: 95%;" type="button" class="btn btn-dark" value="Log In" name=""><br><br>
                 </form>
                
  			</div>
  		</div>
  	</div>
  </div>




<?php

 $conn = mysqli_connect("localhost","root","","learn");

 if (isset($_POST['submit'])) 
 {
 
      $f_name = $_POST['f_name'];
      $l_name = $_POST['l_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $pass = $_POST['pass'];

      $pass = md5($pass);

      $sql = " insert into sign (f_name,l_name,email,phone,pass) values ('$f_name','$l_name','$email','$phone','$pass') ";

      if (mysqli_query($conn,$sql)) 
      {
      	
        

      }
      else
      {
      	echo "Not insertd";
      }


 }


?>




 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
