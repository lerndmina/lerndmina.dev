<!doctype html>
<html lang="en">
<head>
    <title>Lerndmina.Dev</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- Tags for socials & Bootstrap core CSS -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/head.php') ?>

    <!-- Custom styles -->
    <link href="/assets/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/404.css">

    <script type="text/javascript">
        var timeleft = 11;
        var downloadTimer = setInterval(function(){
            timeleft--;
            document.getElementById("countdowntimer").textContent = timeleft;
            if(timeleft <= 0)
                clearInterval(downloadTimer);
            if(timeleft === 0)
                window.history.back();
        }, 1000);
    </script>
</head>


<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/nav.php') ?>

    <main role="main" class="inner cover">
        <div class="shadowed">
            <h1 class="cover-heading">How did you get here?</h1>
            <p class="lead">This isn't supposed to happen. <br>Looks like the page you're looking for<br> is either missing or temporarily unavailable.
            <noscript><br/>JavaScript is disabled in your browser use the button below to go home.</noscript><br/>
        </div>
        <p class="lead">
            <a href="/" class="btn btn-lg btn-secondary"><noscript>
                    Home
                </noscript>
                <script type="text/javascript">
                    document.write("Going back in ");
                </script><span id="countdowntimer"></span></a>
        </p>
    </main>

    <p class="image-credit">Image by <a href="https://pixabay.com/users/kirillslov-8058952">kirillslov</a> from <a href="https://pixabay.com">Pixabay</a</p>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php'); ?>

</div>
</body>
</html>