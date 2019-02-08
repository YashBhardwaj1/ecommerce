<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!DOCTYPE HTML>
<html>
<head><title>Ajax Shopping Cart</title></head>
<body>
<?php
//List products from database
$results = $mysqli_conn->query("SELECT product_name, product_desc, product_code, product_image, product_price FROM products_list");
//Display fetched records as you please
$products_list =  '<ul class="products-wrp">';
while($row = $results->fetch_assoc()) {
$products_list .= <<<EOT
<li>
<form class="form-item">
<h4>{$row["product_name"]}</h4>
<div><img src="images/{$row["product_image"]}"></div>
<div>Price : {$currency} {$row["product_price"]}<div>
<div class="item-box">
    <div>
    Color :
    <select name="product_color">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Orange">Orange</option>
    </select>
    </div><div>
    Qty :
    <select name="product_qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
    </div><div>
    Size :
    <select name="product_size">
    <option value="M">M</option>
    <option value="XL">XL</option>
    <option value="XXL">XLL</option>
    </select>
    </div>
    
    <input name="product_code" type="hidden" value="{$row["product_code"]}">
    <button type="submit">Add to Cart</button>
</div>
</form>
</li>
EOT;

}
$products_list .= '</ul></div>';
echo $products_list;
?>
    <a href="#" class="cart-box" id="cart-info" title="View Cart">
<?php 
if(isset($_SESSION["products"])){
    echo count($_SESSION["products"]); 
}else{
    echo 0; 
}
?>
</a>
<div class="shopping-cart-box">
<a href="#" class="close-shopping-cart-box" >Close</a>
<h3>Your Shopping Cart</h3>
    <div id="shopping-cart-results">
    </div>
</div>
    

</body>
</html>