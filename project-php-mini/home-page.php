<!DOCTYPE html>
<html>

<head>
    <title>Store Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">

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
        <!-- <h2>Welcome to our Store</h2> -->
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
                echo "<td>" . $item["price"] . "</td>";
                echo "<td><a ' href='show_item.php?id=" . $show . "'>Show Details</a></td>";
                echo "</tr>";

            }
        } else {
            echo "<p> >No items added yet.</p>";
        }
        ?>

    </table>



    <footer class="footer">
        
    </footer>










</body>

</html>