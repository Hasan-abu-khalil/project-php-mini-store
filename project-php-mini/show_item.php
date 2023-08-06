<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="show.css"> -->
    <script src="https://kit.fontawesome.com/cccdab20bd.js" crossorigin="anonymous"></script>


    <title> product</title>
</head>

<body>
    <nav>
        <img src="img/logo.png" alt="">
        <div>
            <a href="home-page.php">Home</a>
            <!-- <?php
            echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
            ?> -->
            <a href="show_item.php?id=0">single product</a>
            <a href="login.php">Add product</a>
        </div>
    </nav>


    <div class="header">
        <h1>single product</h1>
    </div>
    <h1 class="products"> product</h1>
    <div class="container">


        <?php
        session_start();

        if (isset($_GET["id"])) {
            $item_id = $_GET["id"];

            if (isset($_SESSION["added_items"][$item_id])) {

                $item = $_SESSION["added_items"][$item_id];



                echo "<div class='home-container'>
                
                    <img class ='home-img' src=" . $item["image_url"] . " >
                    <h1 class='home-name'>" . $item["item_name"] . "</h1>
                    <p class='home-details'>" . $item["details"] . "</p>
                    <p class='home-price'>$ " . $item["price"] . "</p>
                 
                   </div>
                  ";





            } else {
                echo "Item not found!";
            }

        }
        ?>

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