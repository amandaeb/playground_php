<?php require ('..\path.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="equiptment sold by playground parade"/>
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="author" content="amanda box"/>
    <meta property=”og:type” content="website"/>
    <meta property=”og:title” content="playground parade about page"/>
    <meta property=”og:url” content=""/>
    <meta property=”og:image” content="image url"/>
    <title>About - Playground Parade</title>
</head>
<body>
    <?php require_once (ROOT_PATH . '/includes/header.php'); ?>
    <div class="main-wrap">
        <div class="admin-wrapper">
        <div class="admin-intro">
            <h2>Administration</h2></br>
            <p>add products</p>
            <p>edit products</p>
            <p>--put a sale price</p>
            <p>--say its sold out</p>
            <p>delete products</p>
        </div>
        <?php require_once (ROOT_PATH . '/includes/adminSidebar.php'); ?>
        <div class="admin-content">
            <h3>Dashboard</h3>            
        </div>
        </div>
    </div>
    <?php require_once '../includes/footer.php'; ?>
</body>
</html>