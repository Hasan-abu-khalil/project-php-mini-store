<!DOCTYPE html>
<html>

<head>
    <title>Login </title>
    <link rel="stylesheet" href="style.css">

    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            font-size: 50px;
            color: #666;
        }

        label {

            font-size: 20px;
            color: #666;
        }

        .btn {
            font-size: 20px;
            height: 50px;
            width: 90%;
            margin: auto;
            background: rgba(5, 226, 237, 0.874);
            border: none;
            outline: none;
            color: red;
            border-radius: 20px;
            transition: all .5s;

        }

        input {
            font-size: 20px;
            width: 100%;
            height: 30px;
            margin: 10px 0;
            background: rgb(8, 120, 248);
            border: none;
            outline: none;
            border-radius: 20px;
            transition: all .5s;
            color: #fff;
            padding: 3px 10px;

        }

        input:hover {
            background: rgba(8, 120, 248, 0.724);
        }

        input:focus {
            background: rgba(8, 120, 248, 0.724);
        }


        .login{
            padding: 150px;
        }
    </style>
</head>


<body>


    <nav>
        <img src="img/logo.png" alt="">
        <div>
            <a href="home-page.php">Home</a>
            <a href="show_item.php?id=0">single product</a>
            <a href="login.php">Add product</a>
        </div>
    </nav>
    
    <div class="login">
    <h2>Login</h2>
    <form action="#" method="GET">
        <label for="username">Username:</label>
        <input type="text" name="name">

        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <input class="btn" type="submit" value="Login">
    </form>
    </div>


    <footer class="footer">
        <img src="img/logo.png" alt="" >
        

        <div class="footer-left-side">
            <a href="home-page.php">Home</a>
            <a href="show_item.php?id=0">single product</a>
            <a href="login.php">Add product</a>
        </div>
        <div class="footer-right-side">
            <h1>contact me</h1>
            <div>
                <h3><span><i class="fa-solid fa-envelope"></i></span>hasan.aak1998@gmail.com</h3>
                <h3><span><i class="fa-solid fa-mobile"></i></span>0798832182</h3>
                <div class='footer-right-side-icon'>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>

        </div>
    </footer>
    
</body>

</html>




<?php
session_start();

$name = 'hasan';
$email = 'hasan@gmail.com';
$password = 'hasan123';




if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
    $submitted_name = $_GET['name'];
    $submitted_email = $_GET['email'];
    $submitted_password = $_GET['password'];


    if ($submitted_name === $name && $submitted_email === $email && $submitted_password === $password) {

        // $_SESSION['is_logged_in'] = true;
        // $_SESSION['name'] = $submitted_name;

        header('Location: add_products.php');
        exit;
    } else {
        echo "Fill in the missing blank";
    }
}
?>