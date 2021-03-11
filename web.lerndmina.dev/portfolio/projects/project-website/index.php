<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Lerndmina.Dev · <?php $project_name ='Website Project'; /*Set project name here*/
        echo "$project_name"; ?></title>

    <!-- Tags for socials -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/head.php') ?>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/assets/php/nav.php") ?>
<!-- Page Content -->
<div class="container ">
    <div class="border-0 shadow my-5 bg-dark">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/backbutton.php') ?>
        <div class="card-body p-5">
            <h1 class="font-weight-light"> <?php echo "$project_name"; ?></h1>
            <h3 class="font-weight-light">This is a work in progress.</h3>
            <p class="lead">



            </p>
        </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php') ?>
</body>
</html>