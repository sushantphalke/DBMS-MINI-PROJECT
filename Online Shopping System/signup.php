<?php
    require './includes/common.php';
    if(isset($_SESSION['email'])){
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Signup | Mobile Shoppee</title>
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
              <div class="col-md-6">
                <img src="./img/one-plus-7T.jpg" class="img-responsive signup-image" alt="Image">
              </div>
              <div class="col-md-6">
                  <h1 class>Signup</h1>
                  <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"   pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                            </div>
                            <div class="btn-signup">
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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