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
                I chose the home sweet home brief. It came with the question “How might we harness age friendly design to  future-proof homes, so they are sustainable, safe and inclusive places to live and enjoy?”
            </p>
            <p>
                This question inspired me to think about something that I had observed. Elderly people always seem to have their heating turned all the way up, or all the way down. If you visit the home of an elderly person, it is either so warm you are sweating buckets or so cold you think you need about three extra layers! The weirdest part about this whole phenomenon is they never seem to notice.
            </p>
            <p>
                It turns out that some physical changes in elderly people mean that they often notice heat differently to their younger counterparts in the same environment. They may feel unnervingly comfortable at hotter temperatures and are strangely at ease when you can’t stop shivering. This can be a major problem in the summer months when the temperature can rise so much that elderly people can be put in danger of <b><a target="_blank" href="https://www.healthline.com/health/hyperthermia">Hyperthermia</a></b>
            </p>
            <p>
                I want to stop this. Nobody should be in danger of death in their own home because they can’t sense when it’s getting too hot or too cold. To do this I’m going to design a climate control system to help the elderly in their homes. I want to use machine learning to predict when the occupant requires heat or cooling based on their previous behaviour. The system will also have safety limits to prevent elderly people from overheating or under heating themselves and would notify an emergency contact if safe parameters are exceeded.</p>
            <div class="text-center">Image from <a href="https://www.shutterstock.com/image-photo/paramedic-rescues-elderly-person-distress-ambulance-1829857820" target="_blank"><i>Shutterstock "Paramedic rescues an elderly person in distress..."</i></a></div>
            <br>
            <a href="https://www.shutterstock.com/image-photo/paramedic-rescues-elderly-person-distress-ambulance-1829857820" target="_blank">  <img src="/assets/img/proj-rsa-coldperson-min.jpg" alt="Image" class="img-proj img-fluid"></a>
        </div>



        <div class="card-body p-5">
            <h3 class="font-weight-light">My Design</h3>
            <p>
                Any design I come up with needs to seamlessly integrate into the elderly person’s home. It must not look like an accessibility device, but something you’d want to have around and feel comfortable using. The idea is to have a simple wall unit in the shape of a cartoon style house with two buttons and a screen. This would, at a glance, allow the user to quickly determine the status of the heating in their home, adjusting it when necessary. </p>
            <img src="/assets/img/proj-rsa-mainuinit1-min.png" alt="Image" class="img-proj img-fluid">
            <p>
                When I was coming up with the idea I had a thought. Not everyone would want or be able to get up and walk over to their master control unit every time they needed to adjust the temperature. I decided to design a small, hand-held remote control. This would perform the same functionality as the master control unit fixed to the wall, allowing the user to indicate their preference in increasing or decreasing temperature and check the current ambient temperature. </p>
            <img src="/assets/img/proj-rsa-remote1-min.png" alt="Image" class="img-proj img-fluid">
            <p>
                Further into my design I realised I would need to accommodate those with poor vision and so designed the buttons with tactile plus and minus insignia. The device safety feature would mean that the user could push the plus or minus button according to how they felt. If these pushes continued to request an ambient temperature into the “danger zone”, safe settings would be maintained and an outside authority would be notified. The situation could be investigated. The user would not be in a situation of being frustrated with the controller. They would think they were achieving what they felt they needed but help would be on the way.</p>
            <img src="/assets/img/proj-rsa-remote2buttons-min.png" alt="Image" class="img-proj img-fluid">
            <p>
                Somebody commented on my design for the wall plate that the LCD screen was not large enough. In fact the screen is approximately 10 cm across. Because I wanted a large device to go on the wall so it could be easily spotted the dimensions are bigger than might first be apparent.
            </p>
            <img src="/assets/img/proj-rsa-mainuinit3-min.png" alt="Image" class="img-proj img-fluid">
        </div>
        <!-- END OF SECTION -->

        <!-- START OF SECTION -->
        <div class="card-body p-5">
            <h3 class="font-weight-light">How did I make the design?</h3>
            <h4>Wall Unit Design</h4>
            <p>
                From a cube, in edit mode I subdivided and used the knife tool to create the main house shape. I pulled one top corner over and up to make the peak and then deleted the other corner giving a triangular shape to the roof. I used the knife tool to create the vertices giving me points to make the eaves. Using the knife tool again, I created the outline for the screen and inserted a face. I recessed the face back into the body to make the basic shape of the screen.
            </p>
            <p>
                I obviously could not leave the house looking like boring white plastic. I navigated to the material editor and chose to give the house a light green colour. I chose green as it is a gender neutral colour. It is neither red nor blue which would represent hot or cold and could clash with the buttons. I avoided choosing a colour like purple which could be considered too "modern". To indicate an LCD I made the screen area black.
            </p>
            <p>
                To start making the buttons I added a cylinder, inserted a face and extruded to make the shape. I thought a depression in the centre would make it more interesting. I considered using Braille but decided this could be confusing for the elderly not familiar with this communication method. Instead I added tactile plus and minus shapes to the buttons. The buttons were coloured according to heat and cold, red and blue.
            </p>

            <img src="/assets/img/proj-rsa-house-edit.png" alt="Image" class="img-proj img-fluid"><br>
            <h4>Remote Control Design</h4>
            <p>
                Starting with a UV sphere in edit mode. I turned on x-ray and removed the top half of the sphere. I stretched the half sphere to create an elongated oval-shape. I took inspiration from the Google Chromecast remote. This remote feels very comfortable in the hand, it is well designed ergonomically. Using the knife tool and the loop cut tool, I added geometry along the length of the remote. Rather than selecting the rim and creating one face, I took vertices directly across from each other and created an edge between them. Once I had a grid I was able to select squares in that grid and fill them in. This would allow me later to subdivide the geometry on the face giving me enough space to insert the screen.
            </p>
            <img src="/assets/img/proj-rsa-remote-geo.png" alt="Image" class="img-proj img-fluid"><br>
            <p>
                To match the design of the wall unit, I opened the shading workspace and created a green material for the main body. Next, I had to decide where the screen was going to go. I placed it towards the rear middle of the remote. This allowed the buttons to be located towards the front of the remote. When the remote is settled in the palm of the hand the buttons are easily accessible by the thumb. I textured the LCD with the same black material I used on the wall unit. To finish off, I created the buttons by making a cylinder and applying a subdivision surface modifier to it. I used loop cuts to exemplify the angles I wanted to be smooth rather than non-existent, otherwise the modifier would turn it into a spike.
            </p>
            <img src="/assets/img/proj-rsa-remote-button.png" alt="Image" class="img-proj img-fluid"><br>
            <p>
                To make the black dot denoting the infrared emitter on the remote control, I selected the geometry that was going to be black and applied the LCD screen material to it. That had the same kind of reflectivity I was looking for.
            </p>
            <i>Final Render of The Remote</i>
            <img src="/assets/img/remote-final.png" alt="Image" class="img-proj img-fluid"><br>
            <i>Final Wall Unit Render</i>
            <img src="/assets/img/house-final.png" alt="Image" class="img-proj img-fluid"><br>
        </div>
        <!-- END OF SECTION -->

        <div class="card-body p-5">
            <h3 class="font-weight-light">RSA Submission Boards</h3>
            <p>
                As a part of my RSA submission I was required to make A3 PDF pages following the entry requirements from the RSA.
            </p>
            <br>

            <a href="/assets/rsa-submission-boards.pdf" target="_blank"><h4 class="text-center">If you can't view the PDF below, you can download it here:</h4>
                <img class="img-proj img-fluid" src="/assets/img/icons8-download-96.png"/>
            </a>

            <embed src="/assets/rsa-submission-boards.pdf#toolbar=0" frameborder="0" width="100%" height="3350px">
        </div>

</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php') ?>
</body>
</html>