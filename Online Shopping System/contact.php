<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Contact | Mobile Shoppee</title>
</head>
<body>
  <!-- Header -->
  <?php
            include './includes/header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
          <div class="container">
            
          <div class="row">
              <div class="col-md-8">
                <h2 class="p-bold">Live Support</h2>
                <div class="box-padding-10">
                <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores maxime expedita voluptatibus? Quam, cumque cupiditate laboriosam ducimus optio neque repudiandae vero sint nulla ipsum facilis earum consequuntur eum quo. voluptate obcaecati eveniet suscipit provident animi voluptatem placeat doloremque facere maxime totam nostrum necessitatibus cupiditate in corrupti quidem, explicabo saepe. Dolorem aut odit quo qui veniam!</p>
              </div>
              </div>

              <div class="col-md-4">
                <img src="./img/live-support.gif" class="img-responsive live-support-img" alt="Live Support">
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
              <h2 class="p-bold">Contact Us</h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
              </div>
              </div>

              <div class="col-md-5">
                <div class="box-padding-rl">
                  <h2 class="p-bold">Contact Information</h2>
                  <p class="text-muted">500, Kanchan Park Lorem, ipsum dolor sit amet consectetur,</p>
                  <p class="text-muted">12-568-875 Lorem ipsum dolor sit,</p>
                  <p class="text-muted">INDIA</p>
                  <p class="text-muted">Phone : +91-123-0000000</p>
                  <p class="text-muted">Email : mobile@shoppee.com</p>
                  <p class="text-muted">Follow On: <a href="#"><i class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-facebook-square"></a></i></p>                  
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include './includes/footer.php';
    ?>
    <!-- Footer End -->  
</body>
</html>