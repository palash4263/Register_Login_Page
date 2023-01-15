<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: pink;
    background-size: cover;
    text-align: center;

}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 50px;
}

h1 {
    font-size: 40px;
    color: #fff;
    text-shadow: 2px 2px #333;
    margin-bottom: 50px;
}

a {
    font-size: 20px;
    color: #fff;
    text-decoration: none;
    background-color: #1f1f1f;
    padding: 15px;
    border-radius: 5px;
    margin-top: 20px;
    box-shadow: 2px 2px #333;
    transition: all 0.2s ease-in-out;
}

a:hover {
    background-color: #3f3f3f;
    box-shadow: 4px 4px #333;
}
</style>

    <h1>Welcome, <?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: index.php");
    exit();
}
?>!</h1>
    <p>You are now logged in.</p>
    <a href="logout.php">Log out</a>
</body>
</html>
