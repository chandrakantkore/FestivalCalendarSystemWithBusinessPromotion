<?php
include('db.php');
session_start();

 if(isset($_POST['register'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$conn->query("INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
echo "<script>alert('User Registered Successfully');</script>";
}

 if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];

$res = $conn->query("SELECT * FROM users WHERE email='$email'");

if($res->num_rows>0){

$row=$res->fetch_assoc();

if(password_verify($password,$row['password'])){

$_SESSION['user_id']=$row['id'];
$_SESSION['user_name']=$row['name'];

header("Location:user.php");
exit;

}else{
echo "<script>alert('Incorrect Password');</script>";
}

}else{
echo "<script>alert('Email not registered');</script>";
}

}

 $festivals = $conn->query("SELECT * FROM festivals ORDER BY date ASC");

?>

<!DOCTYPE html>
<html>
<head>

<title>User </title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="user.css">

</head>

<body>

<nav>

<div class="logo">User</div>

<ul>

<li onclick="window.location='index.php'">Home</li>

<li onclick="window.location='festival.php'">Festival Calendar</li>

<li onclick="window.location='promotions.php'">Promotions</li>

</ul>

</nav>


 <marquee behavior="" direction="left" scrollamount="5">
<div class="banner-container">

<div class="banner-slide">

<img src="images1.jpg">

<img src="images2.jpg">

<img src="images3.jpg">

</div>

</div>
</marquee>

<div class="dashboard-container">

<?php if(!isset($_SESSION['user_id'])){ ?>

 
<div class="form-container">

<h2>User Registration</h2>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="register">Register</button>

</form>

</div>


 
<div class="form-container">

<h2>User Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

<?php } else { ?>

 
<div class="form-container">

<h2>Welcome, <?= $_SESSION['user_name'] ?></h2>

<form method="POST" action="logout_user.php">

<button type="submit">Logout</button>

</form>

</div>


<div class="tables-wrapper">

<div class="table-container">

<h3>Upcoming Festivals</h3>

<table>

<tr>

<th>Name</th>

<th>Date</th>

<th>Description</th>

</tr>

<?php while($f=$festivals->fetch_assoc()){ ?>

<tr>

<td><?= $f['name'] ?></td>

<td><?= $f['date'] ?></td>

<td><?= $f['description'] ?></td>

</tr>

<?php } ?>

</table>

</div>

</div>

<?php } ?>

</div>


<script>

const slides=document.querySelector('.banner-slide');

let index=0;

function nextSlide(){

index=(index+1)%slides.children.length;

slides.style.transform=`translateX(${-index*100}%)`;

}

setInterval(nextSlide,4000);

</script>

</body>
</html>