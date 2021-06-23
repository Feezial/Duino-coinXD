<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show Balance</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/views/assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body  style="background: url('https://i.pinimg.com/originals/20/5f/45/205f456aa1faecf8eb9588ab2dc0b737.png'); background-repeat: no-repeat; background-size: cover;">
	<?php
$name = $_POST['Name'];
$get_data = file_get_contents('https://server.duinocoin.com/users/' . $name);
$duicoin = json_decode($get_data);

$balance = $duicoin->result->balance->balance;
$username = $duicoin->result->balance->username;
$tran = $duicoin->result->transactions;
$data = json_encode($tran, JSON_PRETTY_PRINT);
?>
	<div class="container">
		<div class="card mt-5" style="background: rgb(0, 0, 0, 0.5);">
			<div class="card-body" >
				<h1 class="text-white text-center">ชื่อ: <?=$username?></h1>
				<h1 class="text-white text-center">จำนวนเหรียญ: <?=$balance?></h1>
				<div class="card-body bg-white mt-3">
					<?php
echo '<pre>';
print_r($tran);
echo '</pre>';

?>

				</div>
				<a href="https://github.com/UnNameXD" class="mb-3 text-white text-center btn" style="font-size: 40px;"><i class="fab fa-github"></i><font style="font-size: 15px;"> Copyright By FeeXD</font></a>
			</div>
			<a href="index.php" class="btn btn-success">กลับหน้าแรก</a>


		</div>

	</div>

</body>
</html>