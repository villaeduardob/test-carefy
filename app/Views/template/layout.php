<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo base_url(); ?>/">
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<!-- styles -->
	<link rel="stylesheet" href="css/partner.css"/>

</head>
<body>

	<!-- header - menu -->
	<header>
		<div class="menu">
			<ul>
				<li class="logo">
					<a href="boards/list" target="_blank">
						<img height="44" title="Logo" src="images/logo-blue-carefy.png">
					</a>
					<span>Trello API</span>
				</li>
				<li class="menu-toggle">
					<button onclick="toggleMenu();">&#9776;</button>
				</li>
				
				<li class="menu-item hidden"><a href="boards/list">Boards</a></li>
				<li class="menu-item hidden"><a href="details">Dados</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<?php echo view($view); ?>

	<!-- footer -->
	<footer>
		<div class="copyrights">
			<p>&copy; 2020 Test Carefy. Eduardo Barros Villa.</p>
		</div>
	</footer>

	<!-- script -->
	<script>
		function toggleMenu() {
			var menuItems = document.getElementsByClassName('menu-item');
			for (var i = 0; i < menuItems.length; i++) {
				var menuItem = menuItems[i];
				menuItem.classList.toggle("hidden");
			}
		}
	</script>

</body>
</html>
