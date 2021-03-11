<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Lerndmina.Dev · <?php $project_name ='Year 2 Semester 1 Group Project - Virtual Cities Winchester'; /*Set project name here*/
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
    <div class="border-0 shadow my-5 virtual-cities-proj-bg-dark">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/backbutton.php') ?>

        <!-- START OF SECTION -->
        <div class="card-body p-5">
            <h1 class="font-weight-light"> <?php echo "$project_name"; ?></h1>
            <h3 class="font-weight-light">
                The Question.
            </h3>
            <h4 class="font-weight-light">
                How can we construct a historically accurate representation of Winchester in the Georgian period?
            </h4>
            <p>
                We split our group so we could all work on separate buildings within the whole project. Together with Alex I chose <b><u><a target="_blank" href="https://link.lerndmina.dev/tqstu0e">Jane Austen's House</a></u></b>. I am experienced at working with hard surface modelling and small props so I picked the interior as my task for the project. Alex worked on the exterior and main building structure .
            </p>
            <div class="text-center">
            <i class="text-center">Image below taken from presentation to the client.</i>
            </div>
            <br>
            <img src="/assets/img/proj-virtual-cities-brief.png" alt="Image" class="img-proj img-fluid">
        </div>


        <!-- START OF SECTION -->
        <div class="card-body p-5">
            <h3 class="font-weight-light">The Client's resources.</h3>
            <p>
                To get started, the Client provided us with some visual research that they previously made. This research was presented in a <b><u><a target="_blank" href="https://link.lerndmina.dev/l4n44il">Pinterest board</a></u></b> with pictures of buildings and other examples of old architecture. We used this imagery to give us ideas about what buildings looked like in a developed area during that time. We discovered which buildings we needed to represent in Winchester and gained the information required to accurately recreate them, while maintaining the nuances of the time period.
            </p>
            <div class="text-center"><br>
                <a target="_blank" href="https://link.lerndmina.dev/l4n44il"><i>Click image to view Pintrest Board.</i> (Link Opens in a new tab)</a>
            </div>
            <br>
            <a target="_blank" href="https://link.lerndmina.dev/l4n44il"><img src="/assets/img/proj-virtual-cities-pintrest.png" alt="Image" class="img-proj img-fluid"></a>

        </div>
        <!-- END OF SECTION -->

        <!-- START OF SECTION -->
        <div class="card-body p-5">
            <h3 class="font-weight-light">Mockups</h3>
            <p>
                Members of our group made some building mockups (shown below).<br>
            <div class="text-center"><i>The following images were taken as screenshots from the group presentation shown to our Client</i></div>
            <br>
            <img src="/assets/img/proj-virtual-cities-mock1.png" alt="Image" class="img-proj img-fluid">
            <img src="/assets/img/proj-virtual-cities-mock2.png" alt="Image" class="img-proj img-fluid">
            <img src="/assets/img/proj-virtual-cities-mock3.png" alt="Image" class="img-proj img-fluid">
            <img src="/assets/img/proj-virtual-cities-mock5.png" alt="Image" class="img-proj img-fluid">
        </div>
        <!-- END OF SECTION -->

        <!-- START OF SECTION -->
        <div class="card-body p-5">
            <h3 class="font-weight-light">How did I fit in?</h3>
            <p>
                The ultimate aim is to use AR (augmented reality) so that users of the product can wear a pair of AR glasses and explore the environment created as if it were real life. They will be able to wander around the buildings and examine the 3D objects from all sides. The objects I chose to model were a copper kettle and saucepan, made from reference imagery taken from Jane Austin's house (<b><u><a target="_blank" href="https://link.lerndmina.dev/0pmeq5a">Chawton Cottage Museum</a></u></b>).
            </p>
            <div class="text-center"><i>Image credit, <b><u><a target="_blank" href="https://link.lerndmina.dev/3l2lcdr">Chawton Cottage Museum Virtual Tour</a></u></b></i></div>
            <br>
            <img src="/assets/img/proj-virtual-cities-where-fit-in.png" alt="Image" class="img-proj img-fluid">
        </div>
        <!-- END OF SECTION -->

        <!-- START OF SECTION -->
        <div class="card-body p-5">
            <h3 class="font-weight-light">Making an old copper kettle</h3>
            <H4>The Main Body</H4>
            <p>
                With Covid restrictions and my own personal health issues, it was not possible to visit the <b><u><a target="_blank" href="https://link.lerndmina.dev/0pmeq5a">Chawton Cottage Museum</a></u></b> in Winchester. However, I was able to find a website with images from the Museum. One image I believed would work well in AR was the copper kettle. Copper has a glorious colour and great reflections. Because copper is a comparatively soft metal, it acquires scratches and dents over time. This makes it very pleasant to look at when rendered well with sharp, angled lighting. In my search for high quality reference material, I found antiques.com where there was an accurate image for a fixed handle copper teakettle circa 1880. This exactly matched the timeframe outlined in the brief and examples shown on the range in the <b><u><a target="_blank" href="https://link.lerndmina.dev/3l2lcdr">Kitchen</a></u></b> of the Museum.
            </p>
            <p>
                I was now able to start recreating the model. This wasn't as easy as I hoped. Due mostly to the off perspective of the reference image, it was tricky for me to figure out where everything went, the angles didn't line up properly.</p>
            <p>
                To make the initial 3D superstructure, I started with a cylinder and using loop cuts in edit mode, I matched it to the outline of the kettle in my reference imagery. After creating the basic outline, I decided to work next on the spout. I sub-divided the face of the kettle to create some area to work with. To make the spout, I extruded material out from the body, rotating and scaling it as necessary to match the reference imagery. This was more challenging than I originally thought, I had to keep in mind to turn on blender's X-Ray mode, to allow me to select vertices I could not directly see. A few times during this process I forgot to do this, and ended up with a half spout.</p>
            <img src="/assets/img/proj-virtual-cities-kettle1.png" alt="Image" class="img-proj img-fluid">
            <p>
                Because the final product was going to be displayed in an AR environment, the spout needed to have a hollow tip. This would provide more realism if the user inspected the model closely. To make the tip, I had to subdivide the end of the spout enough to give me some geometry that I could use to extrude inside of the spout itself. I could then bend the interior of the spout enough, to create the illusion that the hole extended the entire length of the spout. I used this method so I wasn't wasting compute power to render something that would not be seen.
            </p>
            <img src="/assets/img/proj-virtual-cities-kettle3-spout.png" alt="kettle spout" class="img-proj img-fluid">
            <h4>The Lid</h4>
            <p>
                The lid started as a sphere. I wanted the shape to be concave to trap steam, and have the smallest surface area possible contacting the kettle body, to prevent shading errors.
            </p>

            <p>
                To achieve this I used reference imagery taking inspiration from plates. To start, I made it look like an upside down dinner plate. I then added the lip round the edge using extrusion and scaling in an iterative fashion, to pull it to the shape that I needed.
            </p>

            <p>
                In the reference imagery, the top of the lid had a decorative staircase effect. There were alternating acute, obtuse and reflex angles all slightly different from 90°. I started by creating 90° steps. Then selected the rim of each step and bevelled it. I adjusted their position to slightly offset the slope of the steps to match my reference.
            </p>

            <p>
                After adjusting the final step, I inserted a face, scaled it down and moved it up, leaving me ready to create the lid handle. I extruded the handle in a similar way to the slope leading up to it. I inserted faces, scaled and moved them to the correct position creating a sloping concave effect with the bulging top that the reference imagery showed.
            </p>
            <img src="/assets/img/proj-virtual-cities-kettle4.png" alt="Image" class="img-proj img-fluid">
            <p>
                Using the subdivision surface modifier to interpolate the difference in the geometry, I smoothed out the rough areas, creating the look that I needed. To complete the effect, I added loop cuts at the bottom of the sharp areas of the staircase. This added geometry allowed for most of the detail in the sharp curves to remain while keeping the overall smoothed look.
            </p>
            <img src="/assets/img/proj-virtual-cities-kettle6-lid-smooth.png" alt="Image" class="img-proj img-fluid">
            <p>
                I noticed there is a roughness in the shading when too many vertices terminate to an N-gon that is too large. To prevent this I inserted a final face and scaled it down allowing for the shading to correct itself.
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/proj-virtual-cities-kettle5-l.png" alt="Image" class="img-proj img-fluid">
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/proj-virtual-cities-kettle5-r.png" alt="Image" class="img-proj img-fluid">
                </div>
            </div>
            <p><br>
                I scaled the lid to fit, then moved it to be in line with the body of the kettle.
            </p>
            <img src="/assets/img/proj-virtual-cities-kettle7.png" alt="Image" class="img-proj img-fluid"><br>
            <h4>The Handle</h4>
            <p>
                To extrude the initial shape for the handle supports, I started with a cylinder. From the bottom left hand corner I rotated the face of the cylinder to be vertical, extruded up, then slowly angled left a little more than 90 degrees. From that angle I scaled it to be slightly thicker, extruded some more and rotated to the right to reach the beginning of the thickened handle section. I then chose to make the gripped portion of the handle thick and flat to provide an ergonomically comfortable gripping surface. I then reversed the process on the other side but not as a complete mirror, so matching my reference imagery. This makes the handle higher towards the spout to allow for easier pouring.
            </p>

            <p>
                As previously shown I used X-ray mode to allow me to manipulate vertices I could not directly see. To allow the handle to properly fix to the body of the kettle the reference imagery showed for some 'feet' to connect the handle to the main body. I made these by adding a sphere, cutting it in half in edit mode, selecting all of the rim vertices and creating a face. I stretched it in one direction to be more like an oval (a half grape). I then duplicated it to the other side of the handle, placing them on the kettle body and rotating them to to fix to the body (not shown in this image).
            </p>

            <p>
                To finish the design, I applied a subdivision surface modifier to the handle and the connecting pieces, to smooth them out and match the kettle body.
            </p>
            <img src="/assets/img/proj-virtual-cities-kettle8.png" alt="Image" class="img-proj img-fluid"><br>
            <h4>Finishing touches</h4>
            <p>
                I found a <b><a target="_blank" href="https://hdrihaven.com/">High Dynamic Range Image</a></b> (HDRI) to use as background lighting. This added depth and complexity to the scene. With this lighting, when I unwrapped the model and added my texture there would be something interesting to be reflected by the material. Next, I unwrapped the models surface to make a flat map. This represents the 3D model, so texture can be overlaid on the flat representation and mapped to the model.
            </p>
            <p>
                To explain the concept of UV unwrapping, I compare it to making cubes out of paper as a kid.</a></b> To do this you cut out a shape that looks vaguely like a cross, mark the seams and fold it into a cube. This is similar to what happens when you unwrap the UV of a model ,except the process happens in reverse.
            </p>
            <div class="text-center"><i>Image credit, <b><u><a target="_blank" href="https://en.wikipedia.org/wiki/UV_mapping">Wikipedia</a></u></b></i></div>
            <br>
            <img src="/assets/img/uv-unwrap-demo.png" alt="Image" class="img-proj img-fluid"><br>
            <p>
                The bulk of work in this project is not well demonstrated when looking at the white box model. By overlaying it with a photorealistic texture and well made <b><a target="_blank" href="https://hdrihaven.com/">HDRI</a></b> the observer will fully appreciate the 3D elements of my model. By adding a shiny and reflective texture, the model's appeal immediately improves. I am not experienced in creating photorealistic textures from scratch.  I used a website called <b><a target="_blank" href="https://quixel.com/megascans/">Quixel Megascans</a></b>. It provides high resolution textures for use with 3D work. Once I had acquired the texture I wanted, a copper scratched material, I applied it to my model and customised it. I decided that the original copper colour was too bright. To rectify this I navigated to the material editor, darkened the base colour of the texture, creating a richer final product.
            </p>
            <p>
                To finish the kettle, I needed to work on the scen lighting. For this particular model it was quite simple. I added a single point light at an angle a few degrees off from the camera's position. This provides some harsh shadows and fills in for the <b><a target="_blank" href="https://hdrihaven.com/">HDRI</a></b>'s deficiencies. I rendered this scene using the Cycles renderer in Blender. I could then see that the kettle needed a subtle drop shadow, as when I looked at the image on my website, it was definitely missing something. It did not have the punchy effect that I wanted. Adding the drop shadow solved this problem, as it allowed the kettle to stand out from the background on the page.
            </p>
            <img src="/assets/img/proj-virtual-cities-kettle-rendered.png" alt="Image" class="img-proj img-fluid">
        </div>
        <!-- END OF SECTION -->

        <!-- START OF SECTION -->
        <div class="card-body p-5">
            <h3 class="font-weight-light">Making the saucepan</h3>
            <h4>Main body</h4>
            <p>
                The main body started by slicing the top off a sphere in edit mode. Using proportional editing, I moulded the rest of the geometry to match my physical reference. I extruded a flat base, then using extrusion and rotation, I created the lip of the saucepan. Finally I added the subdivision surface modifier to smooth out the surface.
            </p>
            <img src="/assets/img/proj-virtual-cities-pot1.png" alt="Image" class="img-proj img-fluid"><br>
            <p>

            </p>
            <img src="/assets/img/proj-virtual-cities-pot2.png" alt="Image" class="img-proj img-fluid"><br>
            <p>

            </p>
            <img src="/assets/img/proj-virtual-cities-pot3.png" alt="Image" class="img-proj img-fluid"><br>
            <h4>Handle</h4>
            <p>
                The handle was surprisingly complicated. I started with a cylinder, scaled and rotated it into position. Initially my cylinder had too many sides so I deleted it and remade with six sides. As my pan was currently upside down I needed to rotate it and then in edit mode I added loop cuts along the handle giving me geometry to work with. I then had to ensure the handle was not sticking through the pan.
            </p>
            <img src="/assets/img/proj-virtual-cities-pot4.png" alt="Image" class="img-proj img-fluid">
            <p>
                Using proportional editing I manipulated the handle to be more ergonomic. I then realised the handle was too short so added more length.
                <br>
                To match my reference material, the handle required a hole in the end to hang it up. I tried to use a Boolean cutter but it looked wrong. Where did the hole come from? Where did the material go when it was punched out? This pan was made during a period of time where the average blacksmith would not have had access to modern technology like electric drills. The blacksmith would have used a punch and anvil to remove material. The copper would have been pushed outwards creating a bulging effect. A Boolean cutter does not do that. At this stage I removed the hole to continue work on the rest of the pan.
            </p>
            <i>Handle using Boolean modifier</i>
            <img src="/assets/img/pot-handle-example1.png" alt="Image" class="img-proj img-fluid">
            <p>
                I UV unwrapped the pan, marking the seams as needed.
            </p>
            <img src="/assets/img/pot-uv-example.png" alt="Image" class="img-proj img-fluid">
            <p>
               I applied a copper texture from <b><a target="_blank" href="https://quixel.com/megascans/">Quixel Megascans</a></b> and then a global light. Later in the process I added a further light inside the pan to bring up the visual appeal of the render. The current texture was too bright, so I referred back to the kettle model to take inspiration for the texture colour. I added an <b><a target="_blank" href="https://hdrihaven.com/">HDRI</a></b> to fill out the lighting and reflections and then a blank backdrop. Using <b><a target="_blank" href="https://quixel.com/megascans/">Quixel Megascans</a></b> again I added a backdrop texture. From the video you can see I worked a long time on the marble background, but in the end decided that would be something to achieve when working with my partner, inserting objects into the 3D environment. I reflected that my task at this point was to complete and demonstrate the object without distracting viewers from it, and so used a black backdrop to keep the focus on the 3D model itself.
            </p>
            <img src="/assets/img/pot-handle-no-hole.png" alt="Image" class="img-proj img-fluid">
            <p>
                Referring back to my reference imagery, I realised the handle still needed a hole. The video for creating the hole is extended! I attempted the process several times. Each time it was a nightmarish exercise in futility! I had to redo the process at least four times. I got it working by manually creating the geometry I needed. I split the handle in half, mirrored it, and moulded it into a keyhole like shape for hanging on a rack. It took many attempts to fix the topology but eventually I achieved the shape I desired that matched my reference material.
            </p>
            <div class="text-center"><i>Pan Building Timelapse</i></div>
            <br>
            <a target="_blank" href="https://www.youtube-nocookie.com/embed/fPqI8AraTCg"><img src="/assets/img/pot-handle-thumb.png" alt="Image" class="img-proj img-fluid"></a>
            <!--<video src="/assets/video/making-pot-final-mp4.mp4" class="img-proj img-fluid" poster="/assets/img/pot-handle-thumb.png" muted controls preload="auto" ></video>-->
        </div>
        <!--Coming to the end of this project I realised that while I was making the handle for the pan I could make it easier to recall exactly what I had done by recording my process and creating a short time lapse this would allow me to demonstrate not only my innovations but also anything I had done wrong and then fixed-->
        <!-- END OF SECTION -->

        <!-- START OF SECTION -->
        <div class="card-body p-5">
            <h3 class="font-weight-light">Conclusion</h3>
            <p>
                Although it was difficult coordinating with my group due to the coronavirus pandemic, I learned a lot which I view as a success. I enjoyed working on this project. I had fun immersing myself in the 3D modelling. I was able to significantly improve my skill with Blender, which will help me with future 3D projects. However, communication, coordination and teamworking were inadequate. On the next project I will spend more time communicating with my group to ensure the goals are met.
            </p>
        </div>
        <!-- END OF SECTION -->



        <br/>
        <p class="text-center">Miscellaneous image credits: <u><a href="https://link.lerndmina.dev/87qrzcj" target="_blank">Group presentation made to the Client</a></u></p>
        <br/>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php') ?>
</body>
</html>