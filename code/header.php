<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body>
	<div id="container">
		<div id="kop">
			<div id="logo">
				<h1><a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div id="menu">
			</div>
		</div>