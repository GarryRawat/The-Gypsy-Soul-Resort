<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In the Gypsy</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato&family=Montserrat:wght@600;700&family=Poppins&family=Roboto&display=swap');


        /*
font-family: 'Bebas Neue', cursive;
font-family: 'Lato', sans-serif;
font-family: 'Poppins', sans-serif;
font-family: 'Roboto', sans-serif;
font-family: 'Montserrat', sans-serif;
*/
        * {
            font-family: 'Poppins', sans-serif;
        }

        #img_div1:hover {
            transform: scale(1.1);
        }


        #Sub_Heading_div h3 {
            color: var(--bs-green);
            font-size: 50px;
            font-weight: 900;
        }

        #img_div2:hover {
            transform: scale(1.1);
        }

        #gallery:hover {

            border: 1px solid #777;
        }

        #card {
            transition: 1s;

        }

        #card:hover {
            transform: scale(1.1);
        }


        /*  SECTION - 3  START HERE  */

        #card_box {
            font-family: 'Montserrat', sans-serif;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin: 10px;
            padding: 10px;
            transition: 1s;
        }

        #card_box:hover {
            transform: scale(1.1);

        }

        .bg {
            background: url(images/bg-1.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php require_once("include/header.php"); ?>
    <div class="container-fluid">
        <section>
            <div class="container mt-3" id="heading_box">
                <div class="row">
                    <h1 class="text-warning text-center fw-bolder">In The Gypsy</h1>
                </div>
            </div>
        </section>
        <!----SECTION -1-------->
        <section>
            <div class="container p-5 mt-2 bg ">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row" id="card">
                            <img src="./images/In_Gyps/jungle-2.jpg" alt="">
                        </div>
                        <div class="row mt-5 px-2" data-aos="fade-right" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <p class=" text-success text-ce fw-bolder fs-1">Jungal Walk</p>
                            <p>
                                Wildlife prowling in their habitat and signs of them having been around, make this trek more thrilling than any other. Follow the instructions of the experienced instructors accompanying you and ensure your safety.
                            </p>
                            <p>
                                Embark on a mesmerizing jungle walk, just steps away from our charming hillside resort. Immerse yourself in the embrace of nature as you traverse winding paths, surrounded by lush foliage and towering trees. Listen to the melodic songs of exotic birds echoing through the air, while the gentle rustling of leaves beneath your feet adds to the serene ambiance. Discover hidden treasures, like cascading waterfalls and vibrant flora, that paint a picture of pristine beauty.
                        </div>
                    </div>
                    <div class="col-lg-6 p-3">
                        <div class="row  px-2" data-aos="fade-left" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h4 class=" fw-bold">
                                Nature's Symphony <br>A Jungle Walk to Remember
                            </h4>
                            <p>
                                This invigorating adventure allows you to connect with the wilderness,
                                offering a moment of tranquility and awe-inspiring encounters with the
                                rich biodiversity of the jungle. Guided by expert naturalists, this journey unveils the secrets of the forest,
                                leaving you with cherished memories and a newfound appreciation for the delicate balance of nature.
                            </p>

                        </div>
                        <div class="row mt-sm-5" id="card">
                            <img src="./images/In_Gyps/jungle-1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mt-5 bg p-5">
                <div class="row" id="Sub_Heading_div">
                    <h3 class="text-success fw-bolder">Gypsy View</h3>
                </div>
                <div class="row">

                    <!-- Content here -->
                    <div class="row p-lg-5" id="row_1">
                        <div class="col-12 col-lg-6 p-3 " data-aos="fade-right">
                            <div class="row" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <h3>Mountain View</h3>
                                <h4>View from resort is Asoem </h4>
                                <p id=" para_div">
                                    Experience awe-inspiring vistas at our hillside resort, where the majestic mountains paint a mesmerizing canvas.
                                    Gaze out from your window or lounge on the terrace to witness nature's grandeur unfold before you. The panoramic views of the rugged peaks,
                                    draped in mist or kissed by the sun, create a serene and unforgettable backdrop for your tranquil escape.
                                    Indulge in the breathtaking mountain view from our charming hillside resort, where nature's magnificence takes center stage. As the morning sun peeks over the horizon,
                                    the mountains come alive with a golden glow, casting a spell of serenity over the landscape.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 px-3 mt-3">
                            <div class="row">
                                <div class=" col-6 col-lg-6 " id="card">
                                    <img src="./images/In_Gyps/morning-1.jpg" class="img-fluid" width="100%" alt="">
                                </div>
                                <div class=" col-6 col-lg-6" id="card">
                                    <img src="./images/In_Gyps/morning-2.jpg" class="img-fluid" width="100%" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class=" col-6 col-lg-6" id="card">
                                    <img src="./images/In_Gyps/morning-3.jpg" class="img-fluid" width="100%" alt="">
                                </div>
                                <div class="col-6 col-lg-6" id="card">
                                    <img src="./images/about_1.jpg" class="img-fluid" width="100%" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=" row" id="row_2">
                        <div class="col-md-7 p-lg-5">
                            <div class="row" id="gallary">
                                <div class="col-md-12" id="card" id="card">
                                    <img src=" ./images/In_Gyps/mout-3.jpg" class="img-fluid" width="600" height="250" alt="">
                                </div>
                            </div>

                        </div>
                        <div class=" col-lg-5 p-lg-5" data-aos="fade-left">
                            <div class="row p-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <h3>Morning View</h3>
                                <p id=" para_div">
                                    Greet the day with a mesmerizing morning view from our hillside resort.
                                    As the sun rises, it paints the sky with a symphony of colors, casting a warm glow over the landscape.
                                    The mist gently lifts, revealing lush valleys and rolling hills that stretch to the horizon. Sip your coffee on the balcony,
                                    immersed in the tranquility of the moment.
                                    This enchanting vista sets the perfect tone for a day filled with relaxation and wonder amidst nature's embrace.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row ">
                                <div class=" col-6 col-lg-3 p-2 shadow-1-strong" id="card"><img src="./images/In_Gyps/night-1.jpg" width="100%" height="270" alt=""> </div>
                                <div class=" col-6 col-lg-3 p-2 shadow-1-strong" id="card"><img src="./images/In_Gyps/night-3.jpg" width="100%" height="270" alt=""> </div>
                                <div class=" col-6 col-lg-3 p-2  shadow-1-strong" id="card"><img src="./images/In_Gyps/night-2.jpg" width="100%" height="270" alt=""> </div>
                                <div class=" col-6 col-lg-3  p-2  shadow-1-strong" id="card"><img src="./images/In_Gyps/night-4.jpg" width="100%" height="270" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----SECTION------3-------->
        <section>
            <div class="container mt-5 bg p-5">
                <div class="row" id="Sub_Heading_div">
                    <h3>Your Good Time In Gypsy</h3>
                </div>
                <!---first row------->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row p-3">
                            <div class="col">
                                <img src="./images/In_Gyps/campfire.jpg" width="100%" height="200px" class="img-fluid" alt="...">
                                <p class="mt-2">
                                    Savour food barbecued to perfection. There is something to cater to everyone’s tastebuds. Feel free to don the chef’s hat and join in the fun,
                                    chill and char-grill to add to your camping experience of whipping up delicious food despite being in the middle of nowhere.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col" id="card_box">
                                <div class="row">
                                    <div class="col">
                                        <div class=" text-center">
                                            <img src="./images/In_Gyps/sunnyday.jpg" width="100%" height="150" alt="...">
                                        </div>
                                    </div>
                                    <div class="col  mt-1">
                                        <h4>Break The Fast</h4>
                                        <p class="fs-6">There will be piping hot food and cool wind in your hair as you enjoy a leisurely breakfast,
                                            surrounded by green mountains. It will be a feast for both the soul and senses..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" id="card_box">
                                <div class="row">
                                    <div class="col">
                                        <div class=" text-center">
                                            <img src="./images/In_Gyps/ng.jpg" width="100%" height="150" alt="...">
                                        </div>
                                    </div>
                                    <div class="col mt-2">
                                        <h4>A romantic evening</h4>
                                        <p>Enjoy a romantic wine and dine experience with that special someone, sitting under a tree that is lit up with fairy lights so you don’t miss the twinkle in their eyes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!---second---row------->

    <?php require_once("include/footer.php"); ?>
    <script>
        AOS.init();
    </script>
</body>

</html>