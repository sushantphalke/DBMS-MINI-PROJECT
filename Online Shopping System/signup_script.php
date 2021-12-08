<?php
    require './includes/common.php';

    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con , $name);

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con , $password);
    $password = md5($password);

    $contact = $_POST['contact'];
    $contact = mysqli_real_escape_string($con , $contact);

    $city = $_POST['city'];
    $city = mysqli_real_escape_string($con , $city);

    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con , $address);

    $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $contact_regex = "/^[789][0-9]{9}$/";

    //check whether email already exists
    $select_query = "SELECT * from users WHERE email = '$email'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows!=0){
        $error = "<span class='red'>Email Already Exists</span>";
        header('location:signup.php?m1='.$error);
    }else if(!preg_match($email_regex , $email)){
        $error = "<span class='red'>Incorrect Email Id</span>";
        header('location:signup.php?m1='.$error);
    }else if(!preg_match($contact_regex , $contact )){
        $error = "<span class='red'>Incorrect Contact Number</span>";
        header('location:signup.php?m2='.$error);
    }
    //if not then add to DB
    else{
        $insert_query = "INSERT INTO users (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        header('location:home.php');
    }



?>