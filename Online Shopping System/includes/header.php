<nav class="navbar navbar-inverse navbar-fixed top">
<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Mobile Shoppee</a>
    </div>
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['email'])) { ?>                
                <li><a href="cart.php" class="text-center"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="settings.php" class="text-center"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                <li><a href="logout.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>                
            <?php } else { ?>
                <li><a href="about.php" class="text-center"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php" class="text-center"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                <li><a href="signup.php" class="text-center"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                <!-- <li><a href="" class="text-center" type="button" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
                <li><a href="login.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php } ?>
        </ul>
    </div>
</div>
</nav>
