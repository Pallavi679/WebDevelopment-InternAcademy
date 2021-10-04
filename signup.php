<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- google font cnd link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- custom css file link -->
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/signup.css">

</head>

<body>
    <!-- header section starts  -->
    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="#" class="logo"><i class="fas fa-user-graduate">WebDevp</i></a>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="courses.php">course</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>

        </nav>
        <button class="btn btn primary btn block" > 
            <a href="signup.php"> LOG IN </a> 
        </button>    

        </div>
    </header>
    <!-- Sign Up Page -->
    <section class= signup id="signup">
       <div  class="form_wrapper">   
         <div class="signup-form">
            <form action=""  >
		       <b> <h2 class= text-center >Sign Up</h2><b>
           <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
         </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="form-check-label text-center" ><input type="checkbox" required="required"> I accept the Terms of Use Privacy Policy</label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
          </form>
	    
          </div>
    
        </div>

    </section> 

     <!-- footer section start -->
  <?php include 'footer.php'?>
    
    <!-- footer section end -->
</body>
<!-- jquery cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- custom script link -->
<script src="./Script/script.js"></script>

</html>
