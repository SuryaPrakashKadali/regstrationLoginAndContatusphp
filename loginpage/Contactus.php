<?php
include("auth_session.php");
?>
<?php 
$link = mysqli_connect("localhost", "root", "", "workspacephp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phno = mysqli_real_escape_string($link, $_REQUEST['phno']);
$query = mysqli_real_escape_string($link, $_REQUEST['query']);
 
// Attempt insert query execution
$sql = "INSERT INTO contact (username, email, phno, query) VALUES ('$username', '$email', '$phno', '$query')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	echo "<p><a href=' logout.php'>Logout</a></p>";
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>