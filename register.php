<?php require ('.\path.php'); 
      require (ROOT_PATH . '/controllers/users.php');   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Register</title>
</head>
<body>
<?php require_once (ROOT_PATH . '/includes/header.php'); ?>
    <div class="form-wrap">
    <form action="register.php" method="post">
      <h2 class="form-title">Register</h2>
    <?php include(ROOT_PATH . '/helpers/formErrors.php');?>
      <div>
        <label>Username</label>
        <input type="text" name="username" class="text-input" value="<?php echo $username; ?>">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" class="text-input" value="<?php echo $email; ?>">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" class="text-input">
      </div>
      <div>
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" class="text-input">
      </div>
      <div>
        <button type="submit" name="register-btn" class="btn btn-big">Register</button>
      </div>
      <p>Or <a href="login.html">Sign In</a></p>
    </form>
    </div>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom Script -->
  <script src="./assets/js/scripts.js"></script>

</body>

</html>