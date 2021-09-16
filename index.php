<?php require ('.\path.php'); 
require (ROOT_PATH . '/db/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="equiptment sold by playground parade"/>
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="author" content="amanda box"/>
    <meta property=”og:type” content="website"/>
    <meta property=”og:title” content="playground parade"/>
    <meta property=”og:url” content=""/>
    <meta property=”og:image” content="image url"/>
    <title>Playground Parade</title>
</head>
<body>
    <?php require_once (ROOT_PATH . "\includes\header.php");?>
    <div class="main-wrap">
        <div class="introduction">
            <h2>Welcome to <span>Playground Parade!</span></h2>
            <img src="assets/images/playground_set_bright_full.jpg" width=300 height=auto alt="">
            <div class="intro-p">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa officia quidem beatae quos placeat impedit itaque corporis nesciunt! Sint ipsum alias minus inventore! Numquam, ratione delectus assumenda rerum cum, blanditiis aliquid ipsa quos minima nulla veritatis distinctio necessitatibus tenetur illo!</p>
            </div>
        </div>
        <div class="sales">
            <div class="carousel">
                <div class="sale-card sale-card--visible one">
                    <h2>End of July Sale</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit non delectus animi rem temporibus. Quisquam cupiditate quos debitis ipsa qui.</p>
                </div>
               <div class="sale-card two">
                    <h2>End of July Sale</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit non delectus animi rem temporibus. Quisquam cupiditate quos debitis ipsa qui.</p>
                </div>
                <div class="sale-card three">
                    <h2>End of July Sale</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit non delectus animi rem temporibus. Quisquam cupiditate quos debitis ipsa qui.</p>
                </div>
                <div class="carousel-controls">
                    <button id="carousel-button-prev" aria-label="previous slide"><</button>
                    <button id="carousel-button-next" aria-label="next slide">></button>
                </div>
            </div>
        </div>
        <div class="featured-products">
            <h2>Most popular</h2>
            <div>
                <img src="assets/images/different_set.jpg" alt="">
                <span class="sale-title">featured product</span>
            </div>
            <div>
            <img src="assets/image/different_set.jpg" alt="">
               <span class="sale-title">featured product</span>
            </div>
        </div>
        <div class="second-section">
            <div class="testimonials">
                <div class="img-wrap">
                <img src="assets/images/pic_fun_kid.jpg" alt="">
                </div>
                <p><q>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui vero ad sequi!</q><cite><br>- Erin C. Walker</cite></p>
            </div>
            <div class="testimonials">
                <div class="img-wrap">
                <img src="assets/images/pic_fun_kid.jpg" alt="">
                </div>
                <p><q>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui vero ad sequi!</q><cite><br>- Erin C. Walker</cite></p>
            </div>
            <div class="catalog-button">
                <button class="animated-btn" id="animated-btn">See our Catalog <Span>&#8658</spam></button>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>
</body>
</html>