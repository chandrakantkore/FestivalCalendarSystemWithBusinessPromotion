<?php
include('db.php');

 $festivals = $conn->query("SELECT * FROM festivals ORDER BY date ASC");

 $filter_festival = isset($_GET['festival_id']) ? intval($_GET['festival_id']) : 0;

 $search_query = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

 $sql = "
    SELECT p.title, p.description, b.name AS business_name, f.name AS festival_name, f.date AS festival_date
    FROM promotions p
    JOIN businesses b ON p.business_id = b.id
    JOIN festivals f ON p.festival_id = f.id
    WHERE 1
";

if($filter_festival > 0){
    $sql .= " AND f.id=$filter_festival";
}

if($search_query != ''){
    $sql .= " AND (p.title LIKE '%$search_query%' OR b.name LIKE '%$search_query%' OR f.name LIKE '%$search_query%')";
}

$sql .= " ORDER BY f.date ASC";
$promotions = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Promotions  </title>
<link rel="stylesheet" href="promo.css">
</head>
<body>

<nav>
    <div class="logo">Festival Calendar Promotions</div>
    <ul>
        <li onclick="window.location='index.php'">Home</li>
        <li onclick="window.location='festival.php'">FestCal</li>
        <li onclick="window.location='business.php'">Business</li>
        <li onclick="window.location='user.php'">User</li>
        <li onclick="window.location='promotions.php'">Promotions</li>
    </ul>
</nav>

<div class="filter-container">
    <form method="GET" style="display:flex; gap:10px; flex:1 1 100%;">
        <select name="festival_id" onchange="this.form.submit()">
            <option value="0">All Festivals</option>
            <?php while($f = $festivals->fetch_assoc()){ ?>
                <option value="<?= $f['id'] ?>" <?= $filter_festival==$f['id']?'selected':'' ?>>
                    <?= $f['name'] ?> (<?= $f['date'] ?>)
                </option>
            <?php } ?>
        </select>
        <input type="text" name="search" placeholder="Search promotions..." value="<?= htmlspecialchars($search_query) ?>">
        <button type="submit">Search</button>
    </form>
</div>

<div class="promo-cards">
    <?php while($p = $promotions->fetch_assoc()){ 
        $festival_date = strtotime($p['festival_date']);
        $today = strtotime(date('Y-m-d'));
        $badge_class = $festival_date > $today ? 'badge-upcoming' : 'badge-active';
        $badge_text = $festival_date > $today ? 'Upcoming' : 'Active';
    ?>
    <div class="promo-card">
        <div class="festival-badge <?= $badge_class ?>"><?= $badge_text ?></div>
        <h3><?= $p['title'] ?></h3>
        <p><span>Festival:</span> <?= $p['festival_name'] ?> (<?= $p['festival_date'] ?>)</p>
        <p><span>Business:</span> <?= $p['business_name'] ?></p>
        <p><?= $p['description'] ?></p>
    </div>
    <?php } ?>
</div>

<footer>
    &copy; <?= date('Y') ?>@FestCal. All rights reserved.
</footer>

</body>
</html>
