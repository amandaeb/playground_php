<?php
require (ROOT_PATH . '/db/db.php'); 
require (ROOT_PATH . '/helpers/validateProduct.php'); 

$types = selectAll('types');

if(isset($_POST['add-product'])){
    dd($_POST);
}