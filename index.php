<?php include('server.php'); ?>
<?php include('linkDB.php'); ?>

 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration</title>
 
    <style>
            body {
        font-family: Arial, sans-serif;
        background-image: linear-gradient(to bottom, #ffd89b, #ffaace);

    }
    .form {
        background-color: white;
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
    }
    input[type="submit"]:hover {
        background-color: #4CAF50;
        color: white;
    }
    .error {
        background-color: #ffb3b3;
        color: #ff0000;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 10px;
    }
    input[type="submit"]:active {
        animation: shake 0.5s;
    }

    @keyframes shake {
    0% { transform: translate(1px, 1px) rotate(0deg); }
    10% { transform: translate(-1px, -2px) rotate(-1deg); }
    20% { transform: translate(-3px, 0px) rotate(1deg); }
    30% { transform: translate(3px, 2px) rotate(0deg); }
    40% { transform: translate(1px, -1px) rotate(1deg); }
    50% { transform: translate(-1px, 2px) rotate(-1deg); }
    60% { transform: translate(-3px, 1px) rotate(0deg); }
    70% { transform: translate(3px, 1px) rotate(-1deg); }
    80% { transform: translate(-1px, -1px) rotate(1deg); }
    90% { transform: translate(1px, 2px) rotate(0deg); }
    100% { transform: translate(1px, -2px) rotate(-1deg); }
    }

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    input {
        border: 1px solid #ccc;
        width: 300px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    }
    @media screen and (max-width: 600px) {
        .container {
            flex-direction: column;
        }
        input {
            width: 100%;
        }
    }
    input:hover {
        background-color: #f2f2f2;
        border: 1px solid #4CAF50;
    }

            .container{
                justify-content: center;
                text-align: center;
                align-items: center;
            }
            input{
                padding: 5px;
            }
            .error{
                background-color: pink;
                color: red;
                width: 300px;
                margin: 0 auto;
            }
            .navbar {
        background-color: #333;
        overflow: hidden;
    }

    .navbar a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    @media screen and (max-width: 600px) {
    .navbar a {
        float: none;
        display: block;
    }
    #menu-btn {
    display: none;
    }
    .navbar.show-menu a {
        display: block;
        float: none;
    }
    @media screen and (max-width: 600px) {
    #menu-btn {
        display: block;
        float: right;
    }
    }
    .page-title {
        text-align: center;
        font-size: 2em;
        margin-bottom: 20px;
    }

    .home-link {
        text-align: center;
        font-size: 1.2em;
        margin-bottom: 10px;
    }
    @media screen and (max-width: 600px) {
    .page-title {
        font-size: 1.5em;
    }
    .home-link {
        font-size: 1em;
    }
    }
    .home-link-a {
        color: green;
        text-decoration: none;
    }

    .home-link-a:hover {
        color: blue;
    }


}

     </style>
 </head>
 
 <body>
 
 <div class="container">
    
     <div action="" class="form" id="signUp">
     <form method="POST">
        <div class="error"> <?php echo $error ?> </div>
 
      <p>
         <?php
            if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
             echo "Please first register to proceed.";
            }
         ?>
        </p>
       <input type="text" name="name" placeholder="User Name"> <br> <br>
       <input type="email" name="email" placeholder="Email"> <br><br>
       <input type="password" name="password" placeholder="password"><br><br>
       <input type="text" name="Address" placeholder="Address"><br><br>
        <input type="text" name="phone" placeholder="phone"><br><br>
       
       <input type="submit" name="signUp" value="Sign Up">
       <p >Have an account already? <a href="logIn.php">Log In</a></p>
      </form>
     </div>
     <script>
        const menuBtn = document.getElementById("menu-btn");
const navbar = document.querySelector(".navbar");

menuBtn.addEventListener("click", function() {
  navbar.classList.toggle("show-menu");

  window.location.href = "login.php"; 
});
 

        </script>
  
 </body>
 </html>