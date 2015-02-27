<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php echo $pageTitle;?></title>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/public/stylesheet/fonts.css">
		<link rel="stylesheet" href="/public/stylesheet/style.css">
		<link rel="stylesheet" href="/public/stylesheet/home.css">
		<link rel="stylesheet" href="/public/stylesheet/booking.css">
		<link rel="stylesheet" href="/public/stylesheet/form.css">

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaz-DUqja-r1rHgXJRTDBwK7JYkYuSkYc&sensor=false"></script>

</head>

<body>
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
