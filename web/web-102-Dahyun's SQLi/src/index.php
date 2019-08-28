<?php
ob_start();
session_start();

$db = new SQLite3('db.sqlite3', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

	//Create a table.
 $db->query( 'CREATE TABLE IF NOT EXISTS "login" (
	 			"id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
				"username" VARCHAR,
				"password" VARCHAR,
				UNIQUE(username)
		   )');
  $db->query('INSERT OR IGNORE INTO "login" ("username", "password") VALUES ("admin","asd2a1230IAPSDKFLDVZimzalabimZimzalabimM123KJI2")');

?>
<!doctype html>
<html lang="en">
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<title>TWICE Airlines</title>
</head>
<body>

<main class="login-form" style="margin-top:30vh;">
	<div class="cotainer-fluid">
		<div class="row justify-content-center">
			<div class="col-md-auto col-sm-auto">
				<div class="card">
					<div class="card-header">Login</div>
					<div class="card-body">
						<form action="index.php" method="POST">
							<div class="form-group row">
								<label for="email_address" class="col-6 col-md-4 col-form-label text-sm-left">Username</label>
								<div class="col-12 col-sm-auto col-md-8">
									<input type="text" id="username" class="form-control" name="username" required autofocus>
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-6 col-md-4 col-form-label text-sm-left">Password</label>
								<div class="col-12 col-sm-auto col-md-8">
									<input type="password" id="password" class="form-control" name="password" required>
								</div>
							</div>
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									Login
								</button>
							</div>
						<?php

  							if (isset($_POST['username']) || isset($_POST['password'])) {
								$ret = $db->query("SELECT * FROM login WHERE username = '". $_POST['username']. "' AND password = '". $_POST['password'] . "'");
								while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
									$id=$row['id'];
									$username=$row["username"];
									$password=$row['password'];
								}
								if($id != ""){
									if($password != ""){
											$_SESSION["login"]="admin";
											header("location:flag.php");
									} else{
										echo "Wrong Password";
									}
								}else{
									echo "User not exist, Please contact 'admin'.";
								}
  							}
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
</body>
</html>