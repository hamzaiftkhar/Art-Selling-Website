<?php

$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$mailheader = "From :".$name."<".$email.">\r\n";

$recepiant = "hamzaifti627@gmail.com";

mail($recepiant, $message, $mailheader)
or die("error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT FORM</title>
    <script src="https://kit.fontawesome.com/f73fd69246.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header class="nav center">
        <p class="logo">H.Z_CREATIVES</p>
        <ul class="center">
            <a href="hamza.html">
                <li>HOME</li>
            </a>
            <a href="about.html">
                <li>ABOUT</li>
            </a>
            <a href="gallery.html">
                <li>GALLERY</li>
            </a>
            <a href="contact.html">
                <li>CONTACT</li>
            </a>
            <a href="login.html">
                <li>LOGIN</li>
            </a>
        </ul>
    </header>
    <hr>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea odio harum, porro consequatur fugiat nam illo veniam minus tenetur quia. Molestiae excepturi soluta ipsum assumenda iusto quam eos placeat velit.</p>
            <p>Go back to previous page <a href="hamza.html">homepage </a></p>
            
           
        </div>
       

    </section>
    
</body>
</html>

';


?>