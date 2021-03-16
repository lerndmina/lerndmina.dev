<!doctype HTML>
<html>
<head>
	<title><?= $title; ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="<?= $description; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?= get_theme_directory_url(); ?>/assets/normalize.min.css" type="text/css">	
	<link rel="stylesheet" href="<?= get_theme_directory_url(); ?>/assets/styles.css" type="text/css">
</head>
<body>
	<header class="site-header">
		<a href="/">
		<div class="logo">&lt;/l&gt</div>
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