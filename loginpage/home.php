<head>
<link rel="stylesheet" href="style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<?php
include("auth_session.php");
?>
<div class="container">
  <div class="contact-section">
    <div class="row contact-fields">
      <div class="col-md-8 left-form">
       <form action="contactus.php" method="post" >
        <h1>Contact Us Form</h1>
        <p>Please fill in this form </p>
        <label for="username"><b>Username</b></label><span class="required">*</span>
		<br>
        <input type="text" placeholder="Enter Username" name="username" required />
		<br>
		
	
        <label for="email"><b>Email</b></label><span class="required">*</span>
		<br>
        <input type="email" placeholder="abc@gmail.com" name="email" required />
		<br>
		
		<label for="phno"><b>Phone Number</b></label><span class="required">*</span>
		<br>
        <input type="text" placeholder="123456789" name="phno" required />
		<br>
		
        <label for="query"><b>Query</b></label><span class="required">*</span>
		<br>
		<textarea id="query" name="query" rows="4" cols="50" required></textarea>
        
        <p>
          By creating an account you agree to our
          <a href="#">Terms & Privacy</a>.
        </p>
        <button type="submit" class="registerbtn" >Submit</button>
      </div>
      </form>
    </div>
      </div>
    </div>
  </div>
</body>
