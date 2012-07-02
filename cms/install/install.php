<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Szabó Gábor - Eötvös Loránd Tudományegyetem</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Szabó Gábor - Eötvös Loránd Tudományegyetem</a></h1>
		</div>
		<!-- end #logo -->
		
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="bgtop">
			<div id="bgbottom">
				<div id="content">
					<div class="post">
						<div class="title">
							<h2><a href="#">Információ</a></h2><br />
								szakdolgozathoz készült tartalomkezelő rendszer, mySQL szerverrel.<br />
								telepítéshez rendszergazdai jogosultságok szükségeltetnek!<br />
								további beállításokat lentebb, illetve tovább találhatsz!<br /><br />
						</div>
					</div>
					<div class="post">
						<div class="title">
							<h2><a href="#">Telepítés - Első lépés (SQL beállítások)</a></h2>
						</div>
						<div class="entry">
							<form action="install.php" method="post">
								MySQL username: <input type="text" name="username" /><br />
								MySQL password: <input type="password" name="password" /><br />
								Database name (i will create a new one): <input type="text" name="database" /><br />
								Prefix for tables (optional): <input type="text" name="prefix" value="elte_"/><br />
								<input type="submit" value="OK"/>
								</form>
						</div>
					</div>
					<div class="post">
						<div class="title">
							<h2><a href="#">Státusz</a></h2><br />
								<?php
								include 'sql.php';
								?>
						</div>
					</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Lépések</h2>
							<ul>
								<li><a href="#">Valami 1</a></li>
								<li><a href="#">Valami 2</a></li>
							</ul>
						</li>
						<li>
							<h2>Adatok</h2>
							<ul>
								<li><a href="#">Cucc 1</a></li>
								<li><a href="#">Cucc 2</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2012-2015 Szabó Gábor - ELTE-IK</p>
	</div>
	<!-- end #footer -->
</div>
<!-- end #wrapper -->
</body>
</html>
