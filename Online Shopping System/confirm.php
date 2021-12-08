<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Confirm | Mobile Shoppee</title>
</head>
<body>
<?php
        $user_id = $_SESSION["user_id"];
        $query = "SELECT product_id FROM users_products WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["product_id"];
            $query_update = "UPDATE users_products SET status = 'Confirmed' WHERE product_id = '$product_id'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
    ?>
</body>
</html>