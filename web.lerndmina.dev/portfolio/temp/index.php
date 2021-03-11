<!--
todo
    add a method of contacting
    maybe an email mailto
    or a contact form
    add some socials or something

-->
<html lang="en">
<head>
    <title>Lerndmina.Dev · Temporary Page</title>
    <!-- Tags for socials -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/head.php') ?>

    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<style>
    #main{
        text-align: center;
    }
    .center{
        height:25vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    a {
        color: white;
    }
    a:hover{
        color: white;
    }
</style>
<script type="text/javascript"> /*I have no idea how exactly this works, thank god for StackOverflow*/
    var timeleft = 6; /*Set to one above what's needed*/
    var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("countdowntimer").textContent = timeleft;
        if(timeleft <= 0)
            clearInterval(downloadTimer);
        if(timeleft === 0)
            window.location.href = "../";
    }, 1000);
</script>
<div id="main">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/nav.php') ?>
    <h1 class="center"><a href="../">You land in uncharted waters. Going back in <span id="countdowntimer"><!--Num here--></span> </a></h1>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php') ?>
</body>
</html>