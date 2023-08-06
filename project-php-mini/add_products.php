<!DOCTYPE html>
<html>

<head>
    <title>Add Products</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 50px auto;
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


        .input {
            font-size: 20px;
            width: 100%;
            height: 50px;
            margin: 10px 0;
            background: rgb(8, 120, 248);
            border: none;
            outline: none;
            border-radius: 20px;
            transition: all .5s;
            color: #fff;
            padding: 3px 10px;

        }

        .input:hover {
            background: rgba(8, 120, 248, 0.724);
        }

        .input:focus {
            background: rgba(8, 120, 248, 0.724);
        }
    </style>
</head>

<body>

    <nav>
        <img src="img/logo.png" alt="">
        <div>
            <a href="home-page.php">Home</a>
            <a href="show_item.php?">single product</a>
            <a href="login.php">Add product</a>
        </div>
    </nav>
    <div class="header">

        <h1>Add a New Item</h1>
    </div>


    <form action="process_add_item.php" method="post">
        <label>image:</label>
        <input class="input" type="text" src="image_url" name="image_url" value="img/">
        <br>
        <br>
        <label>Item Name:</label>
        <input class="input" type="text" name="item_name" required>
        <br>
        <label>Details:</label>
        <textarea class="input" name="details" required></textarea>
        <br>

        <br>
        <label>price</label>
        <input class="input" type="number" name="price" value="price">
        <br>

        <br>
        <input class="btn" type="submit" value="Add Item">

    </form>


    <footer class="footer">
        <img src="img/logo.png" alt="">


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