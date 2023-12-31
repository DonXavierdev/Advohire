<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins',sans-serif;
    }
    .container{
        width: 100%;
        height: 100vh;
        padding:0 8%;
    }
    .container h1{
        text-align: center;
        padding-top: 10%;
        margin-bottom: 60px;
        font-weight: 600;
        position: relative;
    }
    .container h1::after{
        content:'';
        background:  #00aeef;/*#303ef7;*/
        width: 100px;
        height: 5px;
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
    }
    .row{
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
        grid-gap:30px;
    }
    .service{
        text-align: center;
        padding:25px 10px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        background: transparent;
        transition: transform 0.5s,background 0.5s;
    }
    .service i{
        font-size: 40px;
        margin-bottom: 10px;
        color: #00aeef;
    }
    .service h2{
        font-weight: 600;
        margin-bottom: 8px;
    }
    .service:hover{
        background:  #00aeef;
        color:#fff;
        transform: scale(1.05);
    }
    .service:hover i{
        color:#fff;
    }
    .row a{
        text-decoration: none;
        color:#000;
    }
</style>
<body>
    <div class="container">
        <h1>Our services</h1>
        <div class="row">
            <a href="advolist.php"><div class="service">
            <i class="fa-solid fa-magnifying-glass"></i>
                <h2>AdvoSearch</h2>
                <p>Search for advocates according to your needs</p>
            </div></a>
            <!-- <div class="service">
                <i class="fa-solid fa-briefcase"></i>
                <h2>Marketing</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-briefcase"></i>
                <h2>Marketing</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-briefcase"></i>
                <h2>Marketing</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-briefcase"></i>
                <h2>Marketing</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-briefcase"></i>
                <h2>Marketing</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing</p>
            </div> -->
        </div>
    </div>
</body>
</html>