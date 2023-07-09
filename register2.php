<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
class signup{
    public function create_user($data){
        $userid=$this->create_userid();
        $name=$data['name'];
        $password=$data['password'];
        $email=$data['email'];
        $gender=$data['gender'];
        $commencement=$data['commencement'];
        $specialisation=$data['specialisation'];
        $court=$data['court'];
        $query = "insert into users
        (userid,name,email,password,gender,specialisation,commencement,court)
        values
        ('$userid','$name','$email','$password','$gender','$specialisation','$commencement','$court')";
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-div">

        <h1>Sign Up</h1>
        <form method="post"action="register2.php">
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
            
            <div class="input-data">
            
                <input name="specialisation"type="text" required>
                <span></span>
                <label>Specialisation</label>
            </div>
            <div class="input-data">
                <input name="commencement"type="text" placeholder="Commencement Date"onfocus="(this.type='date')"onblur="(this.type='text')">
            </div>
            <div class="radio">
                <input name="gender"type="radio" value="Male"required><label>Male</label>
                <input name="gender"type="radio" value="Female"required><label>Female</label>
            </div>
                <div class="input-data">
                <select name="court"style="width: 100%;height: 40px;"id="court">
                    <option value="select court" disabled selected>Select Court</option>
                    <option value="supreme court">Supreme Court</option>
                    <option value="high court">High Court</option>
                    <option value="civil court">Civil Court</option>
                    <option value="Criminal Court">Criminal Court</option>
                  </select>
            </div>
            <input type="submit" value="Submit">
            <div class="register-link">
            Already a member? <a href="main-login.php">Login</a>
            </div>
            
        </form>
    
    </div>
</body>
</html>