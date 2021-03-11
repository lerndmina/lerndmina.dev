<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Lerndmina.Dev · <?php $project_name ='RSA Project - Home Sweet Home'; /*Set project name here*/
        echo "$project_name"; ?></title>

    <!-- Tags for socials -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/head.php') ?>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/assets/php/nav.php") ?>

<!--
TODO:
    Talk about the following:
    remote control design
    wall unit design
    can be retrofitted into existing homes
    can be used on a commercial scale room by room (like in a retirement home to allow guests to individually control their room's temperature with a master control for the staff and emergency contacts for the staff.

-->


<!-- Page Content -->
<div class="container ">
    <div class="border-0 shadow my-5 bg-dark">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/backbutton.php') ?>
        <div class="card-body p-5">
            <h1 class="font-weight-light"> <?php echo "$project_name"; ?></h1>
            <h3 class="font-weight-light">
                <!--No large sections needed rn-->
            </h3>
            <h4 class="font-weight-light">
                Which brief did I choose and why?
            </h4>
            <p>
                I chose the home sweet home brief. It came with the question “How might we harness age friendly design to future proof homes, so they are sustainable, safe and inclusive places to live and enjoy?”</p><p>
                This question inspired me to think about something that I had observed. Elderly people always seem to have their heating turned all the way up, or all the way down. If you visit the home of an elderly person, it is either so warm you are sweating buckets or so cold you think you need about three extra layers! The weirdest part about this whole phenomenon is they never seem to notice.</p><p>
                It turns out that some physical changes in elderly people mean that they often notice heat differently to their younger counterparts in the same environment. They may feel unnervingly comfortable at hotter temperatures and are strangely at ease when you can’t stop shivering. This can be a major problem in the summer months, when the temperature can rise so much that elderly people can be put in danger of hyperthermia <!--TODO: link to definition about this--> .</p><p>
                I want to stop this. Nobody should be in danger of death in their own home because they can’t sense when it’s getting too hot or too cold. To do this I’m going to design a home heating automation system to help the elderly in their homes. I want to use machine learning to predict when the occupant requires heat or cooling based on their previous behaviour. The system will also have safety limits to prevent elderly people from overheating or under heating for too long and will notify an emergency contact if the situation necessitates it.</p>
            Image from <a href="https://www.shutterstock.com/image-photo/paramedic-rescues-elderly-person-distress-ambulance-1829857820" target="_blank"><i>Shutterstock "Paramedic rescues an elderly person in distress..."</i></a>
            <a href="https://www.shutterstock.com/image-photo/paramedic-rescues-elderly-person-distress-ambulance-1829857820" target="_blank">  <img src="/assets/img/proj-rsa-coldperson-min.jpg" alt="Image" class="img-proj img-fluid"></a>
        </div>



        <div class="card-body p-5">
            <h3 class="font-weight-light">My Design</h3>
            <p>
                Any design I come up with needs to seamlessly integrate into the elderly person’s home. It shouldn't look like an accessibility device, but something you’d want to have around and feel comfortable using. The idea is to have a simple wall unit in the shape of a cartoon style house with two buttons and a screen. This would, at a glance allow the user to quickly determine the status of the heating in their home, adjusting it when necessary. </p>
            <img src="/assets/img/proj-rsa-mainuinit1-min.png" alt="Image" class="img-proj img-fluid">
            <p>
                When I was coming up with the idea I had a thought. Not everyone would want or be able to get up and walk over to their master control unit every time they needed to adjust the temperature a little. To solve this I decided to design a small, hand-held remote control. This remote unit would perform the same functionality as the master control unit bolted on the wall. It will allow the user to indicate their preference in increasing or decreasing temperature and check, at a glance the current ambient temperature. </p>
            <img src="/assets/img/proj-rsa-remote1-min.png" alt="Image" class="img-proj img-fluid">
            <p>
                Further into my design I realised I would need to accomodate those with poor vision, and so designed the buttons with tactile plus and minus insignia. The device safety feature would mean that the user could push the plus or minus button according to how they felt. If these pushes continued to take the ambient temperature into the “danger zone” then an outside authority would be notified so that the situation could be investigated. The user would then not be in a situation of being frustrated with the controller, they would think that they were achieving what they felt they needed that but help would be on the way. </p>
            <img src="/assets/img/proj-rsa-remote2buttons-min.png" alt="Image" class="img-proj img-fluid">
            <p>
                Somebody commented on my design for the wall plate that the LCD screen was not large enough. In fact the screen is approximately 10 cm across. Because I wanted a large device to go on the wall so it could be easily spotted the dimensions are bigger than might first be apparent.
            </p>
            <img src="/assets/img/proj-rsa-mainuinit3-min.png" alt="Image" class="img-proj img-fluid">
        </div>

        <div class="card-body p-5">
            <h3 class="font-weight-light">RSA Submission Boards</h3>
            <p>
               As a part of my RSA submission I was required to make A3 PDF pages following the entry requirements from the RSA.
            </p>
            <br>
                
            <a href="/assets/rsa-submission-boards.pdf" target="_blank"><h4>If you can't view the PDF below, you can download it here:</h4>
                <img class="img-proj img-fluid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAlElEQVRIiWNkIB78R+MzEqOJiQQLyAKjFoxaMGoBfgu0GRgYvjJAcjB6LmZAEv/OwMCgT64D0pEMwoXTyDUcBpbhMXw1pYYzMDAw8DMwMNzDYvgjBgYGIWpYwMDAwGDKwMDwE8nw3wwMDFbUMhwGKpAsKKe24QwMkBS3k4GBYR8DDZO3OBSPgiEEGBmwlzNUAzQvTQGWeSc+PHVQMgAAAABJRU5ErkJggg=="/>
            </a>

            <embed src="/assets/rsa-submission-boards.pdf#toolbar=0" frameborder="0" width="100%" height="3350px">
        </div>

</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php') ?>
</body>
</html>