
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <div class="login-div">
    <h1>Log In</h1>
    <form method="post"action="logindetails.php">
        <div class="input-data">
            
            <input name="name"type="text" required>
            <span></span>
            <label for="username">Username</label>
        </div>
        <div class="input-data" >
            <input name="password"type="password" required>
            <span></span>
            <label for="password">Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="register-link">
            New to advohire? <a href="index.php">Register</a>
        </div>
    </form>
    </div>
</body>
</html>
