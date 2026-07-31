<?php
include("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE EMAIL='$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

    $row = mysqli_fetch_assoc($result);

    if(password_verify($password,$row['password'])){

        session_start();

        $_SESSION['user']=$row['name'];

        header("Location:index.php");
        exit();

    }else{

        echo "<script>
        alert('Wrong Password');
        window.location='login.php';
        </script>";

    }

}else{

    echo "<script>
    alert('Email Not Found');
    window.location='login.php';
    </script>";

}
?>