 <?php include('server.php'); ?>
<?php include('linkDB.php'); ?>
  
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>User logIn</title>
 
     <style>
         body {
            background-image: linear-gradient(to bottom, #ffd89b, #ffaace);
  }
         .container{
            display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
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
         .page-title {
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
}
form {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 2px 2px 5px #ccc;
    width: 400px;
    text-align: center;
  }
  input[type="text"], input[type="password"] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
  }
  
   input[type="submit"] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .error {
    color: red;
    text-align: center;
  }
  
   .home-link {
    margin-top: 20px;
    font-size: 1.2em;
  }
.home-link {
    text-align: center;
    font-size: 1.2em;
    margin-bottom: 10px;
}

.log-in-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.input-field {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.checkbox-label {
    font-size: 0.8em;
    margin-right: 5px;
}

.checkbox {
    margin-bottom: 10px;
}

.status-text {
    text-align: center;
    font-size: 0.8em;
    color: red;
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-top: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
@media screen and (max-width: 600px) {
  .page-title {
    font-size: 1.5em;
  }
  .home-link {
    font-size: 1em;
  }
  .log-in-form {
    width: 90%;
  }
  .input-field {
    width: 100%;
  }
}

     </style>
 </head>
 <body>
 <h1 class="page-title"> User Registration System</h1>
 
 <h4 class="home-link"><a href="index.php">Home Page</a></h4>

 <div class="container">
      
     <div class="logInForm" id="logIn">
     <form method="POST" class="log-in-form">
 
         <div class="error"> <?php echo $error2 ?> </div>
 
         <p>
         <?php
            if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
             echo "<p>Please first log in to proceed.</p>";
            }
         ?>
       </p>
 
       <input  class="input-field" type="email" name="email" placeholder="Email"> <br><br>
       <input class="input-field" type="password" name="password" placeholder="password"><br><br>
       <label for="checkbox">Stay logged in</label>
       <input class="checkbox-label" type="checkbox" name="stayLoggedIn" id="chechbox" value="1"> <br><br>
       <input  class="checkbox"type="submit" name="logIn" value="Log In">
 
        <p>Not a register user <a href="index.php"> Create Account</a></p>
     </form>
     </div>
 </div>
 
 </script>
  
 </body>
 </html>