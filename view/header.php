<!DOCTYPE html>
<html>
	<head>
		<title><?php echo ((isset($_GET['c']))?ucfirst($_GET['c']):'Products'); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo INCL_PATH; ?>assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INCL_PATH; ?>assets/css/main.css">
	</head>
	<body>
		<?php if(isset($this->data['session'])) { ?>
			<div class="logout">
				<form action="" method="post" name="logout_form">
					<input type="submit" name="logout" value="Logout">
				</form>
			</div>
		<?php } ?>
		<header>
			<div class="container">
				<div class="row">
					<nav class="navbar col-12 row">
						<ul class="nav col-12 justify-content-center">
							<li class="nav-item"><a class="nav-link" href="<?php echo INCL_PATH; ?>products/index">Products</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo INCL_PATH; ?>cart/index">Cart</a></li>
						</ul>
					</nav>
				</div>
			</div>
		<a href="<?php echo INCL_PATH; ?>admin/index">Admin panel</a>
		</header>
		<div class="container">
			<div class="row justify-content-center">