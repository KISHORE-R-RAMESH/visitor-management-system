<?php session_start();
$phone= $_SESSION['phone'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create pass</title>
	<link rel="stylesheet" href="../css/createpass_1.css">
</head>
<body>
<form action="../php/pass.php" method="post">
	<div class="back_ground">
	<h1>Create Pass</h1>
		<div class="left">
			<input type="text" name="name" placeholder="Name" required style="width: 70%; height: 20px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px; margin-top: 10px;"><br><br>
			<label style="margin-left: 22px;">Gender : </label><br><br>
			<div style="margin-top: -8px; margin-left: 46px;"><input type="radio" name="gender" value="male" style="margin-left: 18px;"><label>Male</label>
			<input type="radio" name="gender" value="female"><label>Female</label><br></div>
			<input type="text" name="phone" placeholder="Phone No" value="$phone" required style="width: 70%; height: 20px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px; margin-top: 10px;"><br><br>
			<label style="margin-left: 22px;">Department : </label><br><br>
			<div style="margin-top: -8px; margin-left: 60px;">
				<select name="department" required style="border-radius: 10px; height: 30px; width: 28%;">
					<option value="#">Select..</option>
					<option value="CSE">CSE</option>
					<option value="ECE">ECE</option>
					<option value="ME">ME</option>
					<option value="IT">IT</option>
					<option value="CIVIL">CIVIL</option>
				</select>
			</div><br>
			<label style="margin-left: 22px;">Whom To Meet : </label><br><br>
			<div style="margin-top: -8px; margin-left: 60px;">
				<select name="department" required style="border-radius: 10px; height: 30px; width: 28%;">
					<option value="#">Select..</option>
					<option value="Vinod">Mr.Vinod Sharma</option>
					<option value="Girish">MR.Girish Sharma</option>
					<option value="Sandeep">Mr.Sandeep </option>
					<option value="Karan">Mr.Karan </option>
					<option value="Jatin">MR.Jatin</option>
				</select>
			</div>
			<input type="time" name="in_time" required style="width: 70%; height: 20px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px; margin-top: 20px;">
			<input type="time" name="out_time" required style="width: 70%; height: 20px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px; margin-top: 20px;">
			<input type="date" name="date" required style="width: 70%; height: 20px; border-radius: 10px;border:none;e; margin-left: 22px; padding: 5px; margin-top: 10px;">
			<input type="submit" value="Create" style="width: 70%; height: 26px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px; margin-top: 20px;">
		</div>
		<div class="right">
			<div class="image_box">	
			</div>
			<input type="submit" value="capture" style="width: 80%; height: 25px; border-radius: 10px;border:none; margin-left: 10px; padding: 5px; margin-top: 10px;">
			<div class="image_box">	
			</div>
			<div class="qr">
				
			</div>
		</div>
	</div>
</form>
	

</body>
</html>