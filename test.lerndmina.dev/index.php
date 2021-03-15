<!DOCTYPE html>
<html>
<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/head.php') ?>
    <title><?php $title = 'Lerndmina.Dev - Home'; echo $title;?></title>
    <meta name="title" content="<?php echo $title; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="twitter:title" content="<?php echo $title; ?>">
</head>
<body>
<div id="page-container">
 <div id="content-wrap">
     <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/nav.php') ?>
     <h1>Welcome </h1>
     <h2>My name is Adam.</h2>
     <h3>I'm proficient in
         <type class="typewrite gradient" data-period="3000" data-type='[ "Web Design.", "Systems Administration.", "Server Management.", "Customer Support." ]'>
             Web Design, SysAdmin, Server Management.
         </type></h3>
     <h3><!--List stuff here--></h3>
     <p>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis urna id volutpat lacus laoreet non. Eget est lorem ipsum dolor sit amet consectetur adipiscing elit. Pellentesque eu tincidunt tortor aliquam nulla. Pellentesque eu tincidunt tortor aliquam nulla. Quis viverra nibh cras pulvinar mattis nunc sed blandit. Fermentum posuere urna nec tincidunt praesent. Mauris cursus mattis molestie a iaculis. Auctor neque vitae tempus quam pellentesque nec nam aliquam sem. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Consectetur adipiscing elit ut aliquam. Aliquam sem fringilla ut morbi tincidunt augue.
     </p>
     <img src="'" alt="A very Cool Image Here" class="logo">
</div>  <!--  Closes Content Wrap  -->

        <!--    Footer Here-->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php') ?>

</div>  <!--  Closes Page Container  -->
</body>
</html>