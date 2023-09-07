<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family:Helvetica;
    }
    .banner{
    width: 100%;
    height: 100vh;
    background-image:linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.75)),url(bg.jpg);
    background-size:cover;
    background-position: center;
}
.nav-bar{
    width:85%;
    margin:auto;
    padding:35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    
}
#logo{
    text-decoration: none;
    color: #00aeef;
    width: 150px;
    font-size: 40px;
    cursor: pointer;
}
.nav-bar ul li{
    list-style-type: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.nav-bar ul li a{
    text-decoration: none;
    color:#00aeef;
    font-size: 25px;
}
.nav-bar ul li::after{
    content:"";
    height: 3px;
    width: 0;
    background: #00aeef;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.3s;
}
.nav-bar ul li:hover::after{
width:100%;
}
.content{
    width: 100%;
    position: absolute;
    top:50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}
.content h1{
    font-size: 70px;
    margin-top: 80px;
    word-spacing: 10px;
}
.content p{
    margin: 20px auto;
    font-size: 20px;
    line-height: 25px;
    word-spacing: 5px;
}
button{
    width: 200px;
    padding: 15px 0;
    margin: 20px 0;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #8a8a8a;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    
}
span{
    background: #8a8a8a;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left:0;
    bottom:0;
    z-index:-1;
    transition: 0.5s;
}
button:hover span{
    width: 100%;
}
button:hover{
    border: none;
}
</style>
<body>
    <div class="banner">
    <div class="nav-bar">
        <a id="logo"href="home.php">ADVOHIRE</a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Welcome To Advohire</h1>
        <p>Find and Communicate with available advocates and clients with ease</p>
        <div>
        <button type="button" onclick="window.location.href = 'advolist.php'"><span></span>Find More</button>
        </div>
    </div>
</div>
</body>
</html>