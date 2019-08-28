<?php session_start();
if ($_SESSION["login"] == "admin") { ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dahyun's Flight Ticket</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<h1>TWICE Airlines</h1>
		<ul>
			<li class="f_row"> <span class="from" data="Incheon">ICN </span>
				<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
					<path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
				</svg><span class="to" data="Bangkok">BKK</span>
			</li>
			<li class="s_row"> <span class="flight" data="Flight">IT101</span><span class="seat" data="Seat">13</span><span class="gate" data="Gate">37</span></li>
			<li class="t_row"> <span class="date" data="Date">23 AUG</span><span class="boarding" data="Boarding">15:07</span></li>
			<li class="fo_row"> <span class="passenger" data="Passenger">Kim Da-hyun</span></li>
			<li class="fi_row">
				<svg class="barcode" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.834 11.549H1a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h5.834a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM62.043 11.549h-4.168a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4.168a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM17 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM90.334 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM81.167 11.549h-2.724a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h2.724a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM51.875 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM42.167 11.549h-2.5a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h2.5a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM73.523 11.549H71.98a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h1.543a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM33.667 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM23.667 11.549h-1a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM67.227 11.549h-.363c-.551 0-1 .448-1 1v66.236c0 .552.449 1 1 1h.363c.551 0 1-.448 1-1V12.549c0-.552-.45-1-1-1z"></path>
				</svg>
				<svg class="barcode" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.834 11.549H1a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h5.834a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM62.043 11.549h-4.168a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4.168a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM17 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM90.334 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM81.167 11.549h-2.724a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h2.724a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM51.875 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM42.167 11.549h-2.5a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h2.5a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM73.523 11.549H71.98a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h1.543a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM33.667 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM23.667 11.549h-1a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM67.227 11.549h-.363c-.551 0-1 .448-1 1v66.236c0 .552.449 1 1 1h.363c.551 0 1-.448 1-1V12.549c0-.552-.45-1-1-1z"></path>
				</svg>
				<svg class="barcode" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.834 11.549H1a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h5.834a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM62.043 11.549h-4.168a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4.168a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM17 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM90.334 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM81.167 11.549h-2.724a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h2.724a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM51.875 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM42.167 11.549h-2.5a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h2.5a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM73.523 11.549H71.98a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h1.543a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM33.667 11.549h-4a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM23.667 11.549h-1a1 1 0 0 0-1 1v66.236a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V12.549a1 1 0 0 0-1-1zM67.227 11.549h-.363c-.551 0-1 .448-1 1v66.236c0 .552.449 1 1 1h.363c.551 0 1-.448 1-1V12.549c0-.552-.45-1-1-1z"></path>
				</svg>
			</li>
			<li class="flag">
				ID: IT@KMITL{I-L0V3-5QL-!nj3ctioN}
			</li>
		</ul>
	</div>
</body>
</html>
<?php
} else {
	header('location:/');
}
?>