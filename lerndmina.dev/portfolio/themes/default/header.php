<!doctype HTML>
<html>
<head>
	<title><?= $title; ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="<?= $description; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?= get_theme_directory_url(); ?>/assets/normalize.min.css" type="text/css">	
	<link rel="stylesheet" href="<?= get_theme_directory_url(); ?>/assets/styles.css" type="text/css">

	<!--FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Questrial&family=Sanchez&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<!--/FONTS-->
<meta name="theme-color" content="#E93679">
<meta property="og:image" content="/assets/img/logos/logo-name-bottom-min-transparent.png">
<meta property="twitter:image" content="/assets/img/logos/logo-name-bottom-min-transparent.png">
</head>
<body>
	<header class="site-header nav-size">
		<a href="/">
		<!-- <div class="logo">&lt;/l&gt</div> -->
		</a>
		<a href="/about"> 
			About Me
		</a> - 
		<a href="/">
			 Home
		</a> - 
		<a href="<?= $config['base_url'] ?>/">
			Portfolio
		</a>
	</header>
	
	<div class="container">


		<!-- Things i can use
<?= $config['blog_name'] ?>

<?= substr($config['blog_name'], 0, 1) ?>


		 -->