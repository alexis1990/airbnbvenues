<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<<<<<<< HEAD
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php echo $pageTitle;?></title>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/public/stylesheet/fonts.css">
		<link rel="stylesheet" href="/public/stylesheet/style.css">
		<link rel="stylesheet" href="/public/stylesheet/home.css">
		<link rel="stylesheet" href="/public/stylesheet/booking.css">
		<link rel="stylesheet" href="/public/stylesheet/form.css">
=======
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo $pageTitle;?></title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/public/stylesheet/fonts.css">
	<link rel="stylesheet" href="/public/stylesheet/style.css">
	<link rel="stylesheet" href="/public/stylesheet/home.css">
	<link rel="stylesheet" href="/public/stylesheet/booking.css">
>>>>>>> master

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaz-DUqja-r1rHgXJRTDBwK7JYkYuSkYc&sensor=false"></script>

</head>

<body>

<<<<<<< HEAD
		<header>
			<div class="globalAlign" style="position: relative;">
				<?php echo html_entity_decode($menu); ?>
				<?php echo html_entity_decode($profile); ?>

				<div class="headerProfileList">
					<a href="/settings" class="settingsIcon">Préférences</a>
					<a href="/invit" class="giftIcon">Inviter</a>
					<a href="/logout" class="logoutIcon">Déconnexion</a>
				</div>
			</div>
		</header>

		<?php if(isset($message) && $message != ""){
			?>
				<div class="message"><div class="messageCenter"><?php echo $message;?></div></div>
			<?php
		}
		?>
=======
	<header>
		<div class="globalAlign" style="position: relative;">
			<?php echo html_entity_decode($menu); ?>

			<div class="headerMenu headerProfile">
				<a href="#" class="menuProfile">
					<span class="headerProfileName">Arthur</span>
					<span class="headerProfilePic"></span>
				</a>
			</div>

			<div class="headerProfileList">
				<a href="#" class="settingsIcon">Préférences</a>
				<a href="#" class="giftIcon">Inviter</a>
				<a href="#" class="logoutIcon">Déconnexion</a>
			</div>
		</div>
	</header>
>>>>>>> master
