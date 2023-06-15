<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="./signin.css">
	<link rel="stylesheet" href="./framework.css">
</head>
<body>
	<div class="formBox">
        <div class="container">
            <div class="box">
                <form action="signin_post.php" method="POST" id="signInForm">
                    <h2 class="h2-label"> library</h2>
					<?php 
						if(isset($id_error)){
							echo $id_error ;
						}
					?>
                    <h6 class="h6-label">Username</h6>
                    <input type="number" name="emp_id" id="empId" class="username"  placeholder="enter you id" >
                    <br>
					<?php 
						if(isset($password_error)) {
							echo $password_error;
						}
					?>
                    <h6 class="h6-label">password</h6>
                    <input type="password" name="emp_password" id="empPassword" class="password"  placeholder="enter your password">
                    <br>
                    <input name="signin" type="submit" value="Login" id="submitButton" class="submit"> 
                </form>  
            </div>
        </div>

    </div>
    <script src="script.js"></script>
    
</body>
</html>

