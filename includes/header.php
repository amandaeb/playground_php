<header>
        <div class="logo-container"><h1><a href="<?php echo (BASE_URL . '\index.php');?>">Playground Parade<a></h1><small>located in Chicago, shipping worldwide</small>
        </div>
        <div class="nav">
            <div class="quick-links" id="quick-links">
                <a href="<?php echo BASE_URL . '/about.php';?>">About us</a>
                <a href="<?php echo BASE_URL . '/faq.php';?>">FAQ</a>
                <a href="<?php echo BASE_URL . '/terms.php';?>">Terms and Conditions</a>
                <a href="<?php echo BASE_URL . '/contact.php';?>">Contact us</a>
            </div>
            <div class="hamburger" id="hamburger"><i class="fas fa-bars"></i></div>
        </div>
    </header>
    <div class="menu-row">
        <ul class="drop-down-menu">
            <li class="menu-item">Sets</li>
            <li class="menu-item">Tires
                <ul class="sub-menu" id="sub-menu">
                    <li class="sub-menu-title"><a href="<?php echo BASE_URL . '/tires.php';?>">Tires</a></li> 
                    <li><a href="#">Lorem ipsum dolor sit.</a></li>
                    <li><a href="#">Lorem, ipsum.</a></li> 
                    <li><a href="#">Lorem ipsum dolor sit amet consectetur.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit.</a></li>
                    <li><a href="#">Lorem, ipsum.</a></li> 
                    <li><a href="#">Lorem ipsum dolor sit amet consectetur.</a></li>
                </ul>
            </li>
            <li class="menu-item">Swings</li>
        </ul>
    <div class="customer-needs">
        <div class="cart">
            <img src="assets/images/order.png" alt=""/>
            <a href="/cart">Order</a>
        </div>
        <div class="account">
            <?php if(isset($_SESSION['id'])): ?>
                <img src="assets/images/user.png"/>
                <a href="#"><?php echo $_SESSION['username']; ?></a>
                <ul>
                <?php if($_SESSION['admin']): ?>
                    <li><a href="<?php echo BASE_URL . '/admin/dashboard.php';?>">Dashboard</a></li>
                <?php endif; ?>
                <li><a href="<?php echo BASE_URL . '/logout.php';?>">Log Out</a></li>
                </ul>
            <?php else: ?>
                <img src="assets/images/user.png"/>
                <a href="<?php echo BASE_URL . '/login.php';?>">Sign In</a>
            <?php endif; ?>
        </div>
    </div> 
    </div>

    <!--I need to make it so that order doesn't show up when an admin is
    logged in -->