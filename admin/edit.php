<?php require ('..\path.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <title>Admin Section - Edit Products</title>
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
                    <form action="create.php" method="post">
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