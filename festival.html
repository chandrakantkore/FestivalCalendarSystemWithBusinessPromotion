<?php
include('db.php');
session_start();
$session_id = session_id();

if(isset($_POST['favorite'])){
  $fid = $_POST['festival_id'];
  $chk = $conn->query("SELECT * FROM favorites WHERE festival_id=$fid AND session_id='$session_id'");
  if($chk->num_rows==0){
    $conn->query("INSERT INTO favorites (festival_id,session_id) VALUES ($fid,'$session_id')");
  }else{
    $conn->query("DELETE FROM favorites WHERE festival_id=$fid AND session_id='$session_id'");
  }
  exit;
}

$search = $_GET['search'] ?? '';
$q = "SELECT * FROM festivals WHERE name LIKE '%$search%' ORDER BY date ASC";
$festivals = $conn->query($q);
$festData = $conn->query("SELECT name,date FROM festivals")->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Festival</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="festival.css">
</head>
<body>
  <nav>
  <div class="logo">🎉 Festival Calendar</div>

  <ul class="menu">
     <li onclick="window.location='index.php'">Home</li>
        <li onclick="window.location='festival.php'">FestCal</li>
        <li onclick="window.location='business.php'">Business</li>
        <li onclick="window.location='user.php'">User</li>
        <li onclick="window.location='promotions.php'">Promotions</li>
  </ul>

  <div class="auth">
    <a href="user.php" class="btn">Register</a>
    <a href="user.php" class="btn login">Login</a>
  </div>
</nav>

<div class="banner">
  <h1>Welcome to FestCal</h1>
  <p>Discover all upcoming festivals and celebrate together</p>
</div>
<nav>
  <b>Festivals</b>
  <span>❤️ Favorites • 📅 Calendar</span>
</nav>

<form class="search">
  <input type="text" name="search" placeholder="Search festival..." value="<?= htmlspecialchars($search) ?>">
  <button>Search</button>
</form>

<div class="cards">
<?php while($f=$festivals->fetch_assoc()):
  $fav=$conn->query("SELECT * FROM favorites WHERE festival_id={$f['id']} AND session_id='$session_id'");
  $active=$fav->num_rows?'active':'';
?>
<div class="card">
  <span class="fav <?= $active ?>" onclick="fav(<?= $f['id'] ?>)">❤️</span>
  <h3><?= $f['name'] ?></h3>
  <p><?= $f['description'] ?></p>
  <p><b>Date:</b> <?= $f['date'] ?></p>
</div>
<?php endwhile; ?>
</div>

<div class="calendar">
  <div class="cal-head">
    <button onclick="prev()">◀</button>
    <h3 id="month"></h3>
    <button onclick="next()">▶</button>
  </div>
  <div class="grid" id="cal"></div>
</div>

<footer>© <?= date('Y') ?> Festivals Calendar, Modern Calendar</footer>

<script>
function fav(id){
 fetch('',{method:'POST',headers:{'Content-Type':'application/x-www-form-urlencoded'},
 body:'favorite=1&festival_id='+id}).then(()=>location.reload());
}

let d=new Date();
const fests=<?= json_encode($festData) ?>;
function draw(){
 let y=d.getFullYear(),m=d.getMonth();
 document.getElementById('month').innerText=
  d.toLocaleString('default',{month:'long'})+" "+y;
 let cal=document.getElementById('cal');
 cal.innerHTML='';
 let first=new Date(y,m,1).getDay();
 let days=new Date(y,m+1,0).getDate();
 for(let i=0;i<first;i++)cal.innerHTML+='<div></div>';
 for(let i=1;i<=days;i++){
  let html=`<div class="day">${i}`;
  fests.forEach(f=>{
    let fd=new Date(f.date);
    if(fd.getDate()==i && fd.getMonth()==m && fd.getFullYear()==y)
      html+=`<div class="event">${f.name}</div>`;
  });
  html+='</div>'; cal.innerHTML+=html;
 }
}
function prev(){d.setMonth(d.getMonth()-1);draw()}
function next(){d.setMonth(d.getMonth()+1);draw()}
draw();
</script>

</body>
</html>
