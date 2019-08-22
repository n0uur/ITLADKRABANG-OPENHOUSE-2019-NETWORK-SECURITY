<?php
session_start();

if(isset($_SESSION["USERNAME"]))
{
	header( "location: ../home.php" );
	die();
}

include('database.php');

if(isset($_POST) && isset($_POST['submit']))
{
    if($_POST["password"] != $_POST["repassword"])
    {
        header('Location: ./register.php?msg=รหัสผ่านไม่เหมือนกัน');
    }
    else
    {
        $sql ='SELECT * from userdata where username="'.$_POST["username"].'";';
        $ret = $database->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) )
        {
            $id = $row['id'];
            header("location: ./index.php?msg=$id");
        }
        if ($id!="")
        {
            header('Location: ./register.php?msg=มีบัญชีนี้อยู่แล้วในระบบ');
        }
        else
        {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $res = $database->exec("
            INSERT INTO userdata(username, password, permission, registertime) VALUES ('$user', '$pass', 0, '0')
            ");
            if($res)
                header("Location: ./index.php?msg=สมัครสมาชิกสำเร็จ");
            else
                header("Location: ./register.php?msg=มีปัญหาอะไรสักอย่างแต่จริงๆ ไม่ควรมี!");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FREE | Minecraft Panel (Change Your Server's Name)</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post">
				<span class="login100-form-title p-b-37">
					CTF-Craft<center><hr width="50%"></center>สมัครสมาชิก
				</span>

				<span class="login50-form-title">
					<font color="red" style="text-align: center">
					<?php if(isset($_GET['msg'])) echo $_GET['msg']; ?>
					</font>
				<span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="กรุณากรอกชื่อตัวละคร">
					<input class="input100" type="text" name="username" placeholder="ชื่อตัวละคร">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "กรุณากรอกรหัสผ่าน">
					<input class="input100" type="password" name="password" placeholder="รหัสผ่าน">
					<span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input m-b-25" data-validate = "กรุณากรอกรหัสผ่าน">
					<input class="input100" type="password" name="repassword" placeholder="ยืนยันรหัสผ่าน">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button name="submit" type="submit" class="login100-form-btn">
                    สมัครสมาชิก
					</button>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>