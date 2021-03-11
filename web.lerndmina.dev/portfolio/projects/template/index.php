<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Lerndmina.Dev · <?php $project_name ='Test Project'; /*Set project name here*/
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
            <h3 class="font-weight-light">Section Subtitle</h3>
            <p class="lead">

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta lobortis tortor, vitae faucibus libero consectetur non. Aenean enim arcu, efficitur sit amet sodales quis, rhoncus ac odio. Morbi blandit lorem elit, vitae convallis massa cursus quis. Curabitur nisi augue, feugiat at vestibulum non, laoreet eu ante. Maecenas dapibus urna eu ligula mattis, sed efficitur tellus cursus. Vivamus maximus viverra quam vitae ornare. Ut pulvinar venenatis felis in luctus. Suspendisse nec mauris eu justo pharetra faucibus. Vivamus sit amet porttitor felis. Vivamus congue tortor eu lectus egestas, quis vulputate nibh blandit.

            </p>
        </div>
            <img src="https://placehold.it/900x500" alt="Image" class="img-proj">

        <div class="card-body p-5">
            <h3 class="font-weight-light">Section Subtitle</h3>
            <p class="lead">

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta lobortis tortor, vitae faucibus libero consectetur non. Aenean enim arcu, efficitur sit amet sodales quis, rhoncus ac odio. Morbi blandit lorem elit, vitae convallis massa cursus quis. Curabitur nisi augue, feugiat at vestibulum non, laoreet eu ante. Maecenas dapibus urna eu ligula mattis, sed efficitur tellus cursus. Vivamus maximus viverra quam vitae ornare. Ut pulvinar venenatis felis in luctus. Suspendisse nec mauris eu justo pharetra faucibus. Vivamus sit amet porttitor felis. Vivamus congue tortor eu lectus egestas, quis vulputate nibh blandit.

            </p>
        </div>
            <img src="https://placehold.it/900x500" alt="Image" class="img-proj">

        <div class="card-body p-5">
            <h3 class="font-weight-light">Section Subtitle</h3>
            <h4>List one</h4>
                <ul>
                    <li>###############</li>
                    <li>###############</li>
                    <li>###############</li>
                    <li>###############</li>
                    <li>###############</li>
                </ul>
            <h4>Reasons why coding is for nerds</h4>
            <ol>
                <li>###############</li>
                <li>###############</li>
                <li>###############</li>
                <li>###############</li>
                <li>###############</li>
                <li>###############</li>
            </ol>
        </div>
            <img src="https://placehold.it/900x500" alt="Image" class="img-proj">
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php') ?>
</body>
</html>