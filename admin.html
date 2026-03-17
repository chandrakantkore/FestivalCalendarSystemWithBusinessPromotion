<?php
session_start();
include('db.php');

$festivals   = $conn->query("SELECT * FROM festivals ORDER BY date ASC");
$businesses  = $conn->query("SELECT * FROM businesses ORDER BY id DESC");
$users       = $conn->query("SELECT * FROM users ORDER BY id DESC");

$promotions = $conn->query("
    SELECT promotions.id,
           promotions.title,
           businesses.name AS business_name,
           festivals.name AS festival_name
    FROM promotions
    JOIN businesses ON promotions.business_id = businesses.id
    JOIN festivals ON promotions.festival_id = festivals.id
    ORDER BY promotions.id DESC
");

$promotionsByFestival = $conn->query("
    SELECT f.name AS festival, COUNT(p.id) AS total
    FROM festivals f
    LEFT JOIN promotions p ON f.id = p.festival_id
    GROUP BY f.id
");

$promoLabels = [];
$promoCounts = [];

while($row = $promotionsByFestival->fetch_assoc()){
    $promoLabels[] = $row['festival'];
    $promoCounts[] = $row['total'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Admin </title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="admin.css">
</head>
<body>

<nav>
    <div><b> Admin</b></div>
    <ul>
        <li onclick="location.href='admin.php'">Dashboard</li>
    </ul>
</nav>

<div class="container">

<div class="stats">
    <div class="card">Festivals<br><b><?= $festivals->num_rows ?></b></div>
    <div class="card">Businesses<br><b><?= $businesses->num_rows ?></b></div>
    <div class="card">Users<br><b><?= $users->num_rows ?></b></div>
    <div class="card">Promotions<br><b><?= $promotions->num_rows ?></b></div>
</div>

<div class="section">
    <h3>Promotions Per Festival</h3>
    <canvas id="promoChart"></canvas>
</div>

<div class="section">
<h3>Festivals</h3>
<table>
<tr><th>ID</th><th>Name</th><th>Date</th><th>Action</th></tr>
<?php while($f=$festivals->fetch_assoc()){ ?>
<tr>
<td><?= $f['id'] ?></td>
<td><?= $f['name'] ?></td>
<td><?= $f['date'] ?></td>
<td><a class="delete" href="delete.php?type=festival&id=<?= $f['id'] ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>

<div class="section">
<h3>Businesses</h3>
<table>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
<?php while($b=$businesses->fetch_assoc()){ ?>
<tr>
<td><?= $b['id'] ?></td>
<td><?= $b['name'] ?></td>
<td><?= $b['email'] ?></td>
<td><a class="delete" href="delete.php?type=business&id=<?= $b['id'] ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>

<div class="section">
<h3>Users</h3>
<table>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
<?php while($u=$users->fetch_assoc()){ ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['name'] ?></td>
<td><?= $u['email'] ?></td>
<td><a class="delete" href="delete.php?type=user&id=<?= $u['id'] ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>

<div class="section">
<h3>Promotions</h3>
<table>
<tr><th>ID</th><th>Business</th><th>Festival</th><th>Title</th><th>Action</th></tr>
<?php while($p=$promotions->fetch_assoc()){ ?>
<tr>
<td><?= $p['id'] ?></td>
<td><?= $p['business_name'] ?></td>
<td><?= $p['festival_name'] ?></td>
<td><?= $p['title'] ?></td>
<td><a class="delete" href="delete.php?type=promotion&id=<?= $p['id'] ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>

</div>

<script>
new Chart(document.getElementById('promoChart'),{
    type:'bar',
    data:{
        labels: <?= json_encode($promoLabels) ?>,
        datasets:[{
            data: <?= json_encode($promoCounts) ?>,
        }]
    },
    options:{scales:{y:{beginAtZero:true}}}
});
</script>
</body>
</html>
