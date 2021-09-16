<?php require ('..\..\path.php'); 
require (ROOT_PATH . '/controllers/products.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="equiptment sold by playground parade"/>
    <link rel="stylesheet" href="../../assets/css/font.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
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
        <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Products</a>
                    <a href="index.php" class="btn btn-big">Manage Products</a>
                </div>
                <div class="content">
                    <h3 class="page-title">Manage Products</h3>
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>type</th>
                            <th>price</th>
                            <th>sku</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>This is the second post</td>
                                <td>Melvine</td>
                                <td>lgttw001</td>
                                <td><a href="edit.php" class="edit">edit</a></td>
                                <td><a href="delete.php" class="delete">delete</a></td>
                                <td><a href="#" class="publish">publish</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>        
        </div>
        </div>
    </div>
    <?php require_once (ROOT_PATH . '/includes/footer.php'); ?>
</body>
</html>