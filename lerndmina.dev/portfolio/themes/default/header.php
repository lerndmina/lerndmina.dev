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
<a class="logo-custom" href="/">
        <!--    <img src="/assets/img/logos/3.jpg" class="logo">-->
        &lt;/Lerndmina.Dev&gt
</a>
	<header class="site-header nav-size">
        <style>
            .logo-custom{
                background: hsla(324, 91%, 46%, 1);
                background: linear-gradient(0deg, hsl(324, 91%, 46%) 0%, hsl(18, 100%, 49%) 100%);
                background: -moz-linear-gradient(0deg, hsla(324, 91%, 46%, 1) 0%, hsla(18, 100%, 49%, 1) 100%);
                background: -webkit-linear-gradient(0deg, hsla(324, 91%, 46%, 1) 0%, hsla(18, 100%, 49%, 1) 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                padding-top: 0.2em; /* Fix on mobile where the text gets cut off */
                margin-top: -0.2em; /* Very temporary solotion*/
                display: block;
                margin-left: 5px;
                margin-right: auto;
                max-width: 300px;
                height: auto;
                font-family: 'Roboto', sans-serif;
                font-weight: 400;
                font-size: 1.15rem;
                text-decoration: none;
                /*position: absolute;*/
            }
            .no-underline{
                text-decoration: none;
            }
        </style>

        <a class="no-underline" href="/">
		<!-- <div class="logo">&lt;/l&gt</div> -->
		</a>
		<!--<a href="/about">
			About Me
		</a> - -->
		<a class="no-underline" href="/">
			 Home
		</a> - 
		<a class="no-underline" href="<?= $config['base_url'] ?>/">
			Portfolio
		</a>
	</header>
	
	<div class="container">


		<!-- Things i can use
<?= $config['blog_name'] ?>

<?= substr($config['blog_name'], 0, 1) ?>


		 -->