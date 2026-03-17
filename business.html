<?php
session_start();
include('db.php');

if(isset($_POST['register'])){
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $contact = $conn->real_escape_string($_POST['contact']);
    $conn->query("INSERT INTO businesses (name,email,password,contact) VALUES ('$name','$email','$password','$contact')");
    echo "<script>alert('Business Registered Successfully');</script>";
}

if(isset($_POST['login'])){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $check = $conn->query("SELECT * FROM businesses WHERE email='$email' LIMIT 1");
    if($check->num_rows > 0){
        $row = $check->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $_SESSION['business_id'] = $row['id'];
            $_SESSION['business_name'] = $row['name'];
            $_SESSION['business_email'] = $row['email'];
            $_SESSION['business_contact'] = $row['contact'];
            echo "<script>window.location='business.php';</script>";
        } else { echo "<script>alert('Wrong Password');</script>"; }
    } else { echo "<script>alert('Email Not Found');</script>"; }
}

$festivals = $conn->query("SELECT * FROM festivals ORDER BY date ASC");

if(isset($_POST['add_promo']) && isset($_SESSION['business_id'])){
    $bid = $_SESSION['business_id'];
    $fest = intval($_POST['festival_id']);
    $title = $conn->real_escape_string($_POST['title']);
    $desc = $conn->real_escape_string($_POST['description']);
    if($fest == 0){ echo "<script>alert('Please select a festival');</script>"; } 
    else{
        $conn->query("INSERT INTO promotions (business_id, festival_id, title, description) VALUES ($bid, $fest, '$title', '$desc')");
        echo "<script>alert('Promotion Added Successfully');</script>";
    }
}

$promotions=[];
if(isset($_SESSION['business_id'])){
    $bid = $_SESSION['business_id'];
    $promotions = $conn->query("
        SELECT p.*, f.name AS festival_name 
        FROM promotions p 
        JOIN festivals f ON p.festival_id = f.id
        WHERE p.business_id=$bid
        ORDER BY p.id DESC
    ");
}

$allFestivals = $conn->query("SELECT * FROM festivals ORDER BY date ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Business  </title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="business.css">
</head>
<body>

<nav>
<div class="logo" onclick="window.location='index.php'">FestCal Business</div>
<ul>
<li onclick="window.location='index.php'">Home</li>
<li onclick="window.location='business.php'">Panel</li>
</ul>
</nav>

<div class="container">

<?php if(!isset($_SESSION['business_id'])){ ?>

<div class="card">
<h2>Business Registration</h2>
<form method="POST">
<input type="text" name="name" placeholder="Business Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<input type="text" name="contact" placeholder="Contact Number" required>
<button name="register">Register</button>
</form>
</div>

<div class="card">
<h2>Business Login</h2>
<form method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>
</div>

<?php } else { ?>

<div class="tabs">
<div class="tab active" data-tab="dashboard">Dashboard</div>
<div class="tab" data-tab="add-promo">Add Promotion</div>
<div class="tab" data-tab="all-festivals">All Festivals</div>
<div class="tab" data-tab="profile">Profile</div>
</div>

<div class="tab-content active" id="dashboard">
<div class="card">
<h3>Welcome, <?= $_SESSION['business_name'] ?></h3>
<p><strong>Total Promotions:</strong> <?= $promotions->num_rows ?></p>
</div>
<div class="card">
<h3>Your Promotions</h3>
<table>
<tr><th>Festival</th><th>Title</th><th>Description</th></tr>
<?php while($p = $promotions->fetch_assoc()){ ?>
<tr>
<td><?= $p['festival_name'] ?></td>
<td><?= $p['title'] ?></td>
<td><?= $p['description'] ?></td>
</tr>
<?php } ?>
</table>
</div>
</div>

<div class="tab-content" id="add-promo">
<div class="card">
<h3>Add Promotion</h3>
<form method="POST">
<select name="festival_id" required>
<option value="">Select Festival</option>
<?php while($f = $festivals->fetch_assoc()){ ?>
<option value="<?= $f['id'] ?>"><?= $f['name'] ?> (<?= $f['date'] ?>)</option>
<?php } ?>
</select>
<input type="text" name="title" placeholder="Promotion Title" required>
<textarea name="description" rows="3" placeholder="Promotion Description" required></textarea>
<button name="add_promo">Add Promotion</button>
</form>
</div>
</div>

<div class="tab-content" id="all-festivals">
<div class="card">
<h3>All Festivals</h3>
<table>
<tr><th>Name</th><th>Date</th><th>Description</th></tr>
<?php while($f=$allFestivals->fetch_assoc()){ ?>
<tr>
<td><?= $f['name'] ?></td>
<td><?= $f['date'] ?></td>
<td><?= $f['description'] ?></td>
</tr>
<?php } ?>
</table>
</div>
</div>

<div class="tab-content" id="profile">
<div class="card">
<h3>Profile</h3>
<p><strong>Name:</strong> <?= $_SESSION['business_name'] ?></p>
<p><strong>Email:</strong> <?= $_SESSION['business_email'] ?></p>
<p><strong>Contact:</strong> <?= $_SESSION['business_contact'] ?></p>
<form method="POST" action="logout.php">
<button class="logout-btn" name="logout">Logout</button>
</form>
</div>
</div>

<?php } ?>

</div>
<script>

const tabs=document.querySelectorAll('.tab');
const contents=document.querySelectorAll('.tab-content');
tabs.forEach(tab=>{
tab.addEventListener('click',()=>{
tabs.forEach(t=>t.classList.remove('active'));
contents.forEach(c=>c.classList.remove('active'));
tab.classList.add('active');
document.getElementById(tab.dataset.tab).classList.add('active');
});
});
</script>

</body>
</html>
