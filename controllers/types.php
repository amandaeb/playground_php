<?php 
require (ROOT_PATH . '/db/db.php'); 
require (ROOT_PATH . '/helpers/validateType.php'); 

$table = 'types';
$types = selectAll($table);
$errors = array();

$id = '';
$name = '';

if(isset($_POST['add-type'])){
    $errors = validateType($_POST);
    if(count($errors) === 0){
        unset($_POST['add-type']);
        $type_id = create($table, $_POST);
        header('location: ' . BASE_URL . '/admin/types/index.php');
        exit();
    }else{
        $name = $_POST['name'];
    }
}

if(isset($_GET['del_id'])){
    $errors = validateType($_POST);
    if(count($errors) === 0){
        $id = $_GET['del_id'];
        $count = delete($table, $id);
        header('location: ' . BASE_URL . '/admin/types/index.php');
        exit();
    }else{
        $name = $_POST['name'];
        $id = $_POST['id'];
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $type = selectOne($table, ['id' => $id]);
    $id = $type['id'];
    $name = $type['name'];
    header('location: ' . BASE_URL . '/admin/types/index.php');
    exit();
}

if(isset($_POST['update-btn'])){
    $id = $_POST['id'];
    unset($_POST['id'], $_POST['update-btn']);
    $type_id = update($table, $id, $_POST);
}