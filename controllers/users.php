<?php 
require (ROOT_PATH . '/db/db.php'); 
require (ROOT_PATH . '/helpers/validateUser.php');

$errors = array();
$username = [''];
$email = [''];
$passord = [''];
$passwordConf = [''];
$table = 'users';

function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = $user['you are now logged in'];
    $_SESSION['type'] = 'success';
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    }else{
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

if (isset($_POST['register-btn'])){
    $errors = validateUser($_POST);
    if(count($errors) === 0){
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);
        //log user in
        loginUser($user);
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
    }
} 

if(isset($_POST['login-btn'])){
    $errors = validateLogin($_POST);
    if(count($errors) === 0){
        $user = selectOne($table, ['username' => $_POST['username']]);
        if($user && password_verify($_POST['password'], $user['password'])){
            loginUser($user);
        }else{
            array_push($errors, 'wrong credentials');
        }
    }
}