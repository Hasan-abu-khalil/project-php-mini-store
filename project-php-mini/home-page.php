<!DOCTYPE html>
<html>

<head>
    <title>Store Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
    <script src="https://kit.fontawesome.com/cccdab20bd.js" crossorigin="anonymous"></script>

    <title>Home-page</title>
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

    <div class="header">
        <h1>Qadumi Home Center</h1>
        <h2>Welcome to our Store</h2>
    </div>


    <h1 class="products"> Products</h1>


    <table>

        <tr>
            <th>image</th>
            <th>Item Name</th>
            <th width="400px">Details</th>
            <th>price</th>
            <th>show Details</th>
        </tr>
        
        <?php
        session_start();
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
        
        if (isset($_SESSION["added_items"]) && !empty($_SESSION["added_items"])) {
            foreach ($_SESSION["added_items"] as $show => $item) {

                echo "<tr>";
                echo "<td ><img  src=" . $item["image_url"] . " ></td>";
                echo "<td>" . $item["item_name"] . "</td>";
                echo "<td>" . $item["details"] . "</td>";
                echo "<td>$ " . $item["price"] . "</td>";
                echo "<td><a ' href='show_item.php?id=" . $show . "'>Show Details</a></td>";
                echo "</tr>";

            }
        } else {
            echo "<p> >No items added yet.</p>";
        }
        ?>

    </table>



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