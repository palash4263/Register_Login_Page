<?php include('linkDB.php'); ?>

<?php 
 
session_start();
 $error = "";
if (array_key_exists("signUp", $_POST)) {
 

     include('linkDB.php');  
 
     $name = mysqli_real_escape_string($linkDB, $_POST['name']);
    $email = mysqli_real_escape_string($linkDB, $_POST['email']);
    $password = mysqli_real_escape_string($linkDB,  $_POST['password']); 
    $Address = mysqli_real_escape_string($linkDB,  $_POST['Address']); 
    $phone = mysqli_real_escape_string($linkDB,  $_POST['phone']); 
    
      
     if (!$name) {
      $error = "Name is required <br>";
     }
    if (!$email) {
        $error = "Email is required <br>";
     }
    if (!$password) {
        $error = "Password is required <br>";
     } 
     if (!$Address) {
        $error = "Address is required <br>";
     }
     if (!$phone) {
        $error = "Phone is required <br>";
     }
     if ($error) {
        $error = "<b>There were error(s) in your form!</b> <br>".$error;
     }  else {
       
  
        $query = "SELECT id FROM fields WHERE email = '$email'";
        $result = mysqli_query($linkDB, $query);
        if (mysqli_num_rows($result) > 0) {
            $error ="<p>Your email has taken already!</p>";
        } else {
 
             
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
            $query = "INSERT INTO fields (name, email, password,Address,phone) VALUES ('$name', '$email', '$hashedPassword','$Address','$phone')";
            $result = mysqli_query($linkDB,$query);
            if (!$result){
                $error ="<p>Could not sign you up - please try again.</p>";
                } 
            else {
 
                    
                $_SESSION['id'] = mysqli_insert_id($linkDB);  
                $_SESSION['name'] = $name;
                echo "You are signed up <br>";
                 if ($_POST['stayLoggedIn'] == '1') {
                setcookie('id', mysqli_insert_id($linkDB), time() + 60*60*365);
                 }
                  
                 header("Location: loggedInPage.php");  
             
                }
             
            }
 
        }  
    }
 
  
if (array_key_exists("logIn", $_POST)) {
     
     include('linkDB.php'); 
 
       $email = mysqli_real_escape_string($linkDB, $_POST['email']);
      $password = mysqli_real_escape_string($linkDB,  $_POST['password']); 
       
       if (!$email) {
          $error2 .= "Email is required <br>";
       }
      if (!$password) {
          $error2 .= "Password is required <br>";
       } 
       if ($error2) {
          $error2 = "<b>There were error(s) in your form!</b><br>".$error2;
       }
        
      else {        
  
            $query = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($linkDB, $query);
            $row = mysqli_fetch_array($result);
         
            if (isset($row)) {
                 
                if (password_verify($password, $row['password'])) {
 
                     $_SESSION['id'] = $row['id'];  
 
                     if ($_POST['stayLoggedIn'] == '1') {
                    setcookie('id', $row['id'], time() + 60*60*24);  
                    }
 
                    header("Location: loggedInPage.php");
 
                } else {
                    $error2 = "Combination of email/password does not match!";
                     }
   
            }  else {
                $error2 = "Combination of email/password does not match!";
                 }
        }
}

  
if (isset($_GET["logout"])) {
    unset($_SESSION['id']);
    setcookie("id", "", time() - 3600);
    $_COOKIE['id'] = "";
  } 
?>