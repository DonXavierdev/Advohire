<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    body{
        background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(bg.jpg);
        background-position: center;
        background-size: cover;
        font-size: 20px;
        font-family: sans-serif;
    }
    .container{
        width:80%;
        margin: 50px auto;
    }
    .contact-box{
        background: #fff;
        display:flex;
    }
    .contact-left{
        flex-basis: 60%;
        padding:40px 60px;
    }
    .contact-right{
        flex-basis: 40%;
        padding:40px;
        background: #8a8a8a;
        color:#fff;
    }
    h1{
        margin-bottom: 10px;
    }
    .container h1{
        color:#fff;
    }
    .container p{
        margin-bottom: 40px;
        color:#fff;
    }
    .input-row{
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .input-row .input-group{
        flex-basis:45%;
    }
    input{
        width: 100%;
        border:none;
        border-bottom: 1px solid #ccc;
        outline:none;
        padding-bottom:5px;
    }
    textarea{
        width: 100%;
        border: 1px solid #ccc;
        outline: none;
        padding:10px;
        box-sizing: border-box;
    }
    label{
        margin-bottom: 6px;
        display: block;
        color:#00aeef;
    }
    button{
        background: #fff;
        width: 100px;
        border: 1px solid #00aeef;
        outline:none;
        color:#000;
        height: 35px;
        border-radius: 30px;
        margin-top: 20px;
        box-shadow: 0px 5px 15px 0px rgba(28,0,181,0.3);
    }
    button:hover{
        background: #00aeef;
        border: none;
        transition: 0.5s;
        color: #fff;
    }
    .contact-left h3{
        color: #00aeef;
        font-weight: 600;
        margin-bottom: 30px;
    }
    .contact-right h3{
        font-weight: 600;
        margin-bottom: 30px;
    }
    tr td:first-child{
        padding-right: 20px;
    }
    tr td{
        padding-top: 20px;
    }
    #logo{
    text-decoration: none;
    color: #00aeef;
    width: 150px;
    font-size: 40px;
    cursor: pointer;
}
</style>
<body>
    <a id="logo"href="home.php">ADVOHIRE</a>
    <div class="container">
        
        <h1>Connect With Us</h1>
        <p>We would love to respond to your queries and help you succeed. <br>Feel free to
            get in touch with us.
        </p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your request</h3>
                <form action="">
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Name</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="input-group">
                            <label for="">Email</label>
                            <input type="email" placeholder="">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Phone</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="input-group">
                            <label for="">Subject</label>
                            <input type="text" placeholder="">
                        </div>
                    </div>
                    <label for="">Message</label>
                    <textarea rows="5" placeholder="Your Message"></textarea>
                    <button type="submit">SEND</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach us</h3>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactus@exmple.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+1 012 345 6789</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>#212,Ground floor,7th cross<br>
                            Some layout,some floor,road
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>