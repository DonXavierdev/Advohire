<?php
include("logindetails.php");
class user{
    public function get_data($id){
        $query="select * from users where userid='$id'";
        $DB=new database();
        $result=$DB->read($query);
        if($result){
            $row=$result[0];
            return $row;
        }
        else{
            return false;
        }
    }
}
$id=$_SESSION['userid'];
$logged_user=new user();
$user_data=$logged_user->get_data($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .login-div p{
    font-size: 20px;
    padding-left: 15px;
}
</style>
<body>
    <div class="login-div">
           <h1>Welcome <?php echo $user_data['name'] ?></h1>
        <p id="here">User ID:<?php echo $user_data['userid'] ?></p>

         
        <p>Username:<?php echo $user_data['name'] ?></p>

          
        <p>Email:<?php echo $user_data['email'] ?></p>
      
       
        <p>Gender:<?php echo $user_data['gender'] ?></p>

    
        <p>Specialised In:<?php echo $user_data['specialisation'] ?></p>
  
  
        <p>Commencement Date:<?php echo $user_data['commencement'] ?></p>
 
         
        <p>Court:<?php echo $user_data['court'] ?></p>
       
        
    </div>
</body>
</html>