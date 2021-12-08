<?php
include './includes/common.php';
if (isset($_SESSION['email'])) {
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Welcome | Mobile Shoppee</title>
</head>

<body>
    <!-- Header -->
    <?php
    include './includes/header.php';
    ?>
    <!-- Header End -->

    <!-- Main -->
    <div class="content">
        <div class="container-fluid">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 1</div>
                        <div class="panel-body"><img src="./img/one-plus-7T.jpg" class="img-responsive img-phone" alt="Phone"></div>
                        <div class="panel-footer">
                            <h4 class="p-bold">One Plus 7T</h4>
                            <p>Battery : 3800mAH</p>
                            <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                            <p>RAM : 8GB ROM:128GB</p>
                            <p class="p-bold">Price : 35,999/-</p>
                            <a href="login.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 2</div>
                        <div class="panel-body"><img src="./img/one-plus-7T-pro.jpg" class="img-responsive img-phone" alt="Phone"></div>
                        <div class="panel-footer">
                            <h4 class="p-bold">One Plus 7T Pro</h4>
                            <p>Battery : 4085mAH</p>
                            <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                            <p>RAM : 8GB ROM:128GB</p>
                            <p class="p-bold">Price : 47,999/-</p>
                            <a href="login.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 3</div>
                        <div class="panel-body"><img src="./img/iphone-xs-max.jpg" class="img-responsive img-phone" alt="Phone"></div>
                        <div class="panel-footer">
                            <h4 class="p-bold">iPhone XS Max</h4>
                            <p>Battery : 3400mAH</p>
                            <p>Camera : 42MP + 20MP | 16MP Front Camera</p>
                            <p>RAM : 8GB ROM:256GB</p>
                            <p class="p-bold">Price : 99,999/-</p>
                            <a href="login.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 4</div>
                        <div class="panel-body"><img src="./img/iphone-xr.jpg" class="img-responsive img-phone" alt="Phone"></div>
                        <div class="panel-footer">
                            <h4 class="p-bold">iPhone XR</h4>
                            <p>Battery : 4085mAH</p>
                            <p>Camera : 20MP + 16MP | 16MP Front Camera</p>
                            <p>RAM : 8GB ROM:256GB</p>
                            <p class="p-bold">Price : 53,999/-</p>
                            <a href="login.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 5</div>
                        <div class="panel-body"><img src="./img/iphone-8.jpg" class="img-responsive img-phone" alt="Phone"></div>
                        <div class="panel-footer">
                            <h4 class="p-bold">iPhone 8</h4>
                            <p>Battery : 3400mAH</p>
                            <p>Camera : 20MP | 16MP Front Camera</p>
                            <p>RAM : 8GB ROM:128GB</p>
                            <p class="p-bold">Price : 41,999/-</p>
                            <a href="login.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 6</div>
                        <div class="panel-body"><img src="./img/mi-redmi-k20-pro.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                        <div class="panel-footer">
                            <h4 class="p-bold">Redmi K20 Pro</h4>
                            <p>Battery : 3400mAH</p>
                            <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                            <p>RAM : 8GB ROM:256GB</p>
                            <p class="p-bold">Price : 29,999/-</p>
                            <a href="login.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
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