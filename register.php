<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
class signup{
    public function create_user($data){
        $userid=$this->create_userid();
        $type='Client';
        $name=$data['name'];
        $password=$data['password'];
        $email=$data['email'];
        $gender=$data['gender'];
        $query = "insert into users
        (userid,Type,name,email,password,gender)
        values
        ('$userid','$type','$name','$email','$password','$gender')";
        $DB=new database();
        $DB->save($query);
        header("Location: main-login.php");
        exit();
    }
    private function create_userid(){
        $length=rand(4,19);
        $number='';
        for($i=0;$i<$length;$i++){
            $new_rand=rand(0,9);
            $number=$number.$new_rand;
        }      
        return $number;
    }
}
$call=new signup();
$call->create_user($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="login-div">

        <h1>Sign Up</h1>
        <form method="post" action="register.php">

        <div class="input-data">
            
            <input type="text" name="name"required>
            <span></span>
            <label>Name</label>
        </div>
        <div class="input-data">
        
            <input name="email"type="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="input-data">
        
            <input name="password"type="password" required>
            <span></span>
            <label>Password</label>
        </div>
            <div class="radio">
                <input name="gender"type="radio" value="Male"required><label>Male</label>
                <input name="gender"type="radio" value="Female"required><label>Female</label>
            </div><br>
        
            <input type="submit" value="Submit">
            <div class="register-link">
            Already a member? <a href="main-login.php">Login</a>
            </div>
            
        </form>
    
    </div>
</body>
</html>