<?php

function validateProduct($product){
    $errors = array();
    if(empty($product['name'])){
        array_push($errors, 'name is required');
    }

    if(empty($product['sku'])){
        array_push($errors, 'must enter a SKU');
    }
    if(empty($product['price'])){
        array_push($errors, 'must enter a price');
    }
    return $errors;
}