<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $image_url = $_POST["image_url"]; 
    $item_name = $_POST["item_name"];
    $details = $_POST["details"];
    $price = $_POST["price"];
    
    
    $new_item = array(
        "image_url" => $image_url,
        "item_name" => $item_name,
        "details" => $details,
        "price" => $price,
    );

    
    session_start();
    if (!isset($_SESSION["added_items"])) {
        $_SESSION["added_items"] = array();
    }
    array_push($_SESSION["added_items"], $new_item);

    header("Location: add_products.php");
    exit();
}
?>