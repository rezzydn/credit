<?php
    require_once('../lib/config/autoload.php');
    require_once('../lib/classes/Orders.php');

    $Orders = new Orders($db);
    
    // Getting Data from Form
    $products = array_filter($_POST['products']);
    $order_id = $_POST['order_id'];

    $query = $Orders->add_products($products, $order_id);

    if($query){
        echo 'true';    
    }else{
        echo 'false';    
    }

?>