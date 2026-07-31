<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
display:flex;
justify-content:center;
align-items:center;
height:100vh;
background:linear-gradient(135deg,#ff6b6b,#ffa502);
}

.login-box{
background:#fff;
padding:35px;
border-radius:12px;
width:350px;
box-shadow:0 10px 25px rgba(0,0,0,.2);
text-align:center;
}

.login-box h2{
margin-bottom:20px;
color:#333;
}

.login-box input{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ccc;
border-radius:8px;
font-size:16px;
}

.login-box button{
width:100%;
padding:12px;
background:#ff5722;
color:white;
border:none;
border-radius:8px;
font-size:16px;
cursor:pointer;
}

.login-box button:hover{
background:#e64a19;
}

.login-box a{
text-decoration:none;
color:#ff5722;
}
</style>

</head>

<body>

<div class="login-box">

<h2>Login</h2>

<form action="login_process.php" method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Login</button>

</form>

<br>

<p>Don't have an account?
<a href="register.php">Register</a>
</p>

</div>

</body>
</html>