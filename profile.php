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

</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    body{
        background-image:linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.75)),url(bg.jpg);
    background-size: cover;
    background-position: center;
    }
    .container{
    width:100%;
    height:100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}
.profile-box{
    background: rgba(138, 138, 138, 0.7);
    text-align: center;
    padding:40px 90px;
    color:#fff;
    position: relative;
    border-radius: 20px;
}
.profile-pic{
    width: 150px;
    border-radius: 50%;
    background: #fff;
    padding: 6px;
}
.profile-box h1{
    padding:15px 0;
}
.profile-box p{
    padding-bottom: 15px;
    
}
#logo{
    text-decoration: none;
    color: #00aeef;
    width: 150px;
    font-size: 40px;
    cursor: pointer;
    padding:40px;
}
.headers{
    display: flex;
    justify-content:space-between;
}
#logout{
    text-decoration: none;
    color:#00aeef;
    font-size: 30px;
    padding:40px;
}
</style>
<body>
    <div class="headers">
<a id="logo"href="home.php">ADVOHIRE</a>
<a id="logout"href="logout.php">Logout</a></div>
    <div class="container">
        <div class="profile-box">
            <img src="image.jpeg" class="profile-pic">
            <h1> <?php echo $user_data['name'] ?></h1>
            <?php if ($user_data['Type'] == 'Client'): ?>
                <p>User ID : <?php echo $user_data['userid'] ?></p>
                <p>Username : <?php echo $user_data['name'] ?></p>
                <p>Email : <?php echo $user_data['email'] ?></p>
                <p>Gender : <?php echo $user_data['gender'] ?></p>
            <?php else: ?>
                <p>User ID : <?php echo $user_data['userid'] ?></p>
                <p>Username : <?php echo $user_data['name'] ?></p>
                <p>Email : <?php echo $user_data['email'] ?></p>
                <p>Gender : <?php echo $user_data['gender'] ?></p>
                <p>Specialised In : <?php echo $user_data['specialisation'] ?></p>
                <p>Commencement Date : <?php echo $user_data['commencement'] ?></p>
                <p>Court : <?php echo $user_data['court'] ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>