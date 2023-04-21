<html>
    <head>
        <style>
            Body 
		{
		font-family: Arial, Helvetica, sans-serif;
		margin-left:30%;
		margin-right:30%;
        color: black;
        margin-top: 10%;
		padding: 0px 15px 0 15px;
        box-sizing:border-box;
        background-size: 1600px 800px;
		background-image: url(img/Blush\ Wave\ Desktop\ Wallpaper\ \(1\).png);
		}
    
	input[type=text], input[type=password], input[type=email]
		{
		width: 97%;
		padding: 10px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #aaa1a1;
		}
	hr 
		{
		margin-bottom: 5px;
		}
	.registerbutton
		{
		background-color: #494349;
		color: rgb(248, 244, 244);
		padding: 15px 20px;
		margin: 10px 0px;
		cursor: pointer;
		width: 100%;
		text:bold;
		}
        </style>
    </head>
    <body>
    <?php
require('coone.php');
session_start();
if(isset($_REQUEST['username']))
{
    $username=stripslashes($_REQUEST['username']);
    $username=mysqli_real_escape_string($con,$username);
    $password=stripslashes($_REQUEST['password']);
    $password=mysqli_real_escape_string($con,$password);
    $email=stripslashes($_REQUEST['email']);
    $email=mysqli_real_escape_string($con,$email);
    // &trn_date=date("Y-m-d H:i:s");
    $query="INSERT into users(username,password,email) VALUES ('$username','$password','$email')";
    $result=mysqli_query($con,$query);
    if($result)
    {
 
        echo "<div class='form'>
        <h3>You registered sucessfully</h3>
        <br/>Click here to <a href='login2.php'>Login</a></div>";
    }
}
else
{
    ?>
    <div class="form">
        <h1>Registration</h1>
        <form action="" method="post" name="user">
		<hr>
		<label><b>Name</b></label>
		<input type="text" name="username" required><br>
		
		<label><b>Password</b></label>
		<input type="password" name="password" required><br>
		<label><b>Email</b></label> 
		<input type="email" name="email" required><br>

		<hr>
        <button type="submit" class="registerbutton"><b>Register</b></button>
		<p>Already have an account? <a href="login2.php">Login</a></p>
        </form>
</div>
<?php
}
?>
</body>
</html>