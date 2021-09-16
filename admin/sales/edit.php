<?php require ('..\..\path.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
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
    </head>

    <body>
    <?php require_once (ROOT_PATH . '/includes/header.php'); ?>

        <!-- Admin Page Wrapper -->
        <div class="main-wrap">
        <?php require_once (ROOT_PATH . '/includes/adminSidebar.php'); ?>   
            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Product</a>
                    <a href="index.php" class="btn btn-big">Manage Products</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Manage Products</h2>
                    <form action="edit.php" method="post">
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" class="text-input">
                        </div>
                        <div>
                            <label>Type</label>
                            <textarea name="type" id="text"></textarea>
                        </div>
                        <div>
                            <label>SKU</label>
                            <input type="text" name="sku" class="text-input">
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <label>Price</label>
                            <input type="text" name="price" class="text-input">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big">Add Post</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->


        <?php require_once (ROOT_PATH . '/includes/footer.php'); ?>
        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>

</html>