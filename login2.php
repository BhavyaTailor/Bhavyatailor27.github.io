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
	.submit
		{
		background-color: #494349;
		color: black;
		padding: 15px 20px;
		margin: 10px 0px;
		cursor: pointer;
		width: 100%;
		text:bold;
		}
       </style>
    </head>
    <body background="D:\html\image\reg.jpg">
    <?php
require('coone.php');
session_start();
if(isset($_POST['username']))
{
    $username=stripslashes($_REQUEST['username']);
    $username=mysqli_real_escape_string($con,$username);
    $password=stripslashes($_REQUEST['password']);
    $password=mysqli_real_escape_string($con,$password);
    $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($con,$query) or die(mysysqli_error($con));
    $rows=mysqli_num_rows($result);
    if($rows==1)
    {
        $_SESSION['username']=$username;
        header("Location:index.html");
    }
    else{
        echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
       </div>";
    }
}
else
{
    ?>
    <div class="form">
    <h1>Login</h1>
    <form action=" " method="post" name="users">
		<hr>
		<label><b>Name</b></label>
		<input type="text" name="username" required><br>
        <label><b>Password</b></label>
		<input type="password" name="password" required><br>
        <hr>
        <button type="submit" class="submit"><b>Submit</b></button>
		<p><a href="register.php">For Registration </a></p>
</form> 
</div>
<?php
}
?>
</body>
</html>