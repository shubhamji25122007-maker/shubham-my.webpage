<?php
include("db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$check = mysqli_query($conn,"SELECT * FROM users WHERE EMAIL='$email'");

if(mysqli_num_rows($check)>0){

    echo "<script>
    alert('Email Already Exists');
    window.location='register.php';
    </script>";

}else{

    $sql="INSERT INTO users(name,EMAIL,password)
    VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql)){

        echo "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";

    }else{

        echo "Registration Failed";

    }
}
?>