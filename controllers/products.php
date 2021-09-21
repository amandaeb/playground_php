<?php
require (ROOT_PATH . '/db/db.php'); 
require (ROOT_PATH . '/helpers/validateProduct.php'); 

$table = 'product';
$products = selectAll($table);
$types = selectAll('type');
$errors = array();

$name = '';
$sku = '';
$price = '';

if(isset($_POST['add-product'])){
    $errors = validateProduct($_POST);
    if(!empty($_FILES['image']['name'])){
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images" . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if($result){
            $_POST['image'] = $image_name;
        }else{
            array_push($errors, "Failed to upload image");
        }
    }else{
        array_push($errors, "Product image required");
    }
    if(count($errors) == 0){
    unset($_POST['add-product']);
       $product_id = create($table, $_POST);
       header('location: ' . BASE_URL . '/admin/products/index.php');
    exit();
    }else{
        $name = $_POST['name'];
        $sku = $_POST['sku'];
        $price = $_POST['price'];
    }
}