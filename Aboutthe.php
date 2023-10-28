<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato&family=Montserrat:wght@600;700&family=Poppins&family=Roboto&display=swap');
        @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext");

        * {
            padding: 0;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        #card {
            border-radius: 10px;
            filter: drop-shadow(0 5px 10px 0 #ffffff);
            background-color: #ffffff;
            position: relative;
            z-index: 0;
            overflow: hidden;
            transition: 0.6s ease-in;
        }

        #card h5 {
            font-size: 18px !important;
            color: #005A02;
            font-weight: 900;
        }

        #card::before {
            content: "";
            position: absolute;
            z-index: -1;
            top: -15px;
            right: -15px;
            background: #005A02;
            height: 220px;
            width: 25px;
            border-radius: 32px;
            transform: scale(1);
            transform-origin: 50% 50%;
            transition: transform 0.25s ease-out;
        }

        #card:hover::before {
            transition-delay: 0.2s;

            transform: scale(40);
        }

        #card:hover h5 {
            color: #F8B200;

        }

        #card:hover p {
            color: #ffffff;

        }

        .bg {
            background: url(images/bg-1.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #photo {
            transition: 1s;

        }

        #photo:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <?php require_once("include/header.php"); ?>

    <div class="container-fluid mt-5">
        <!--------------------first ----section ---start----->
        <section>
            <div class="container">
                <div class="row">
                    <div class="row">
                        <h1 class="text-warning text-center fw-bolder">About-Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------second --start--sectioon----->
        <section class="container bg p-5" id="section_2">
            <div class="row">
                <h3 class="text-success text-center fw-bolder">THE GYPSY SOUL Resort <br></h3>
                <span class="fw-bold text-center ">.....Adopt the place of nature.....</span>
                <div class="row mt-2">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="photo">
                                <img src="./images/banner/banner_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" id="photo">
                                <img src="./images/banner/banner_2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" id="photo">
                                <img src="./images/banner/banner_3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <p class="p-5 mt-3" data-aos="fade-right" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    We provide you the breathtaking beauty of nature. Located on a picturesque hill, it offers a serene escape from the bustling city life. With its luxurious
                    accommodations, breathtaking views, and a range of recreational activities, the resort provides an unforgettable experience for guests seeking relaxation and rejuvenation.
                </p>
            </div>

            <div class="row">
                <!--------------------first ----para----->
                <div class="col-lg-5 p-4">
                    <div class="row" id="photo">
                        <img class="img-fluid" src=" ./images/gallery/4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-7 p-lg-2" data-aos="fade-left" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="row">
                        <p class=" p-3">
                            The Gypsy Soul Resort is committed to offer you affordable and eco-friendly drives, so you can take back fond memories of the service we provide. We have well coordinated and synchronized units of operation, administration and management.We have focused towards providing quality services to our esteemed clients.

                            Resort is an outdoor activity that involves staying away from home overnight in a shelter, such as a tent or a recreational vehicle.

                            Best Resort in Dhanaulti, We welcomes you to enjoy your outdoor accommodation inside Cottage/tents to feel the nature and hear every clear sound around it like the mixed sounds of different birds.
                            The Gypsy Soul Resort offers rooms and deluxe tents at a budget price with basic amenities and amenities like attached bath, comfortable beds, gourmet food and bonfire.
                        </p>
                    </div>
                </div>
            </div>
            <!--------------------second ----para_div----->
            <div class="row mt-3">
                <div class="col-lg-7 order-2 p-lg-2 " data-aos="fade-right" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="row">
                        <p class="p-4">
                            The Gypsy Soul Resort is committed to offer you affordable and eco-friendly drives, so you can take back fond memories of the service we provide. We have well coordinated and synchronized units of operation, administration and management.We have focused towards providing quality services to our esteemed clients.

                            Resort is an outdoor activity that involves staying away from home overnight in a shelter, such as a tent or a recreational vehicle. Resort is an important part of many youth organizations around the world, such as Scouting, who use it to teach both self-reliance and teamwork.

                            Best Resort in Dhanaulti, The Gypsy Soul Resort kanatal welcomes you to enjoy your outdoor accommodation inside Cottage/tents to feel the nature and hear every clear sound around it like the mixed sounds of different birds.

                            The Gypsy Soul Resort offers rooms and deluxe tents at a budget price with basic amenities and amenities like attached bath, comfortable beds, gourmet food and bonfire.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5  p-4">
                    <div class="row">
                        <div class="row" id="photo">
                            <img class="img-fluid" src=" ./images/gallery/4.jpg">
                        </div>
                        </d `iv>
                    </div>
                </div>
        </section>
        <section>
            <div class="container bg  p-5 room_traifs">
                <div class="row p-4">
                    <h3 class="tittle text-success">Why To Choose The Gypsy Soul</h3>
                    <p class="p-4 mt-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        Gypsy Soul Resort is one of the most attractive Resort in kanatal and dhanaulti. It is one of the most popular and famous Resort in the region, it is not surprising based on the many attractive features that are associated with it.
                    </p>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="room_box">
                                <div class="img_box">
                                    <img class="img-fluid" src="images/camp2.jpg" alt="">
                                </div>
                                <div class="text_box mt-3">
                                    <h5>Best Price:-</h5>
                                    <p>We offer exclusive Luxury Packages with Superb quality services and excellent facilities. There are conditioned rooms elegantly styled and designed for greatest comfort providing chilling experience in summers and soothing warm comfort in winters.</p>
                                    <button href="#" class="booking"><span>Read More<i class="ms-1 fa-solid fa-arrow-right-long"></i></span></button>
                                    <i class="fa-solid fa-person-booth float_icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="room_box">
                                <div class="img_box">
                                    <img class="img-fluid" src="images/1.jpg" alt="">
                                </div>
                                <div class="text_box mt-3">
                                    <h5>Hygienic Food:-</h5>
                                    <p>Our Food is our most important USP. Our food menu consists of vegetarian meals and in special demand we made Non Vegetable food. We always feel enjoyment to alter our menus with the guest’s option on prior in order and subject to ease of use.</p>
                                    <button href="#" class="booking"><span>Read More<i class="ms-1 fa-solid fa-arrow-right-long"></i></span></button>
                                    <i class="fa-solid fa-broom-ball float_icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="room_box">
                                <div class="img_box">
                                    <img class="img-fluid" src="images/1.jpg" alt="">
                                </div>
                                <div class="text_box mt-3">
                                    <h5>Safe Stay:-</h5>
                                    <p>It is resources hotel with all the modern facilities and suitable for groups, corporate, families and children. There are many variations of passages orem psum available but the majority have suffered
                                        alteration in some form by injected.</p>
                                    <button href="#" class="booking"><span>Read More<i class="ms-1 fa-solid fa-arrow-right-long"></i></span></button>
                                    <i class="fa-solid fa-couch float_icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container bg mt-5 p-3 px-5">
                <div class="row">
                    <h1 class="text-success fw-bolder">The Gypsy Soul stay Benefits</h1><br>
                    <p class="mt-3 p-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        Experience nature alongwith the charm of the Himalayan mountains at their best.Dhanaulti invites you this season to come
                        and enjoy the nature and its beauty in reality and not in just movies!
                    </p>
                    <!-- partial:index.partial.html -->
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="row p-2 bg-white border" id="card">
                                <h5 class=" fw-bold"> Benefits of camping in Dhanaulti:-</h5>
                                <p>We Tourists often flock to camping trips when they feel bored and tired of their hectic day-to-day routine city life or
                                    when they feel geared up for some adventure. </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="row p-2 bg-white border" id="card">
                                <h5 class=" fw-bold">Getting your dose of fresh oxygen:-</h5>
                                <p>Spending more time in the proximity of greenery means the greater opportunity for you to inhale more pure oxygen. Thus
                                    you will feel lesser strain in your body.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="row p-2 bg-white border" id="card">
                                <h5 class=" fw-bold">Getting the “Feel-good” factor:-</h5>
                                <p>Feel on top of the world after a great camping in Dhanaulti. When you spend time outdoors in the sun, the melatonin
                                    levels in your brain get balanced . </p>
                            </div>
                        </div>
                    </div>
                    <!-- partial -->
                    <div class="row mt-5 ">
                        <div class="col-12 col-lg-4">
                            <div class="row p-2 bg-white border" id="card">
                                <h5 class=" fw-bold">Reduced levels of stress:-</h5>
                                <p>Camping is a great stress buster. When you are involved in any activity that interests you, then feelings of anger,
                                    annoyance, frustration etc. </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="row p-3 bg-white border" id="card">
                                <h5 class=" fw-bold">Increased physical exercising:-</h5>
                                <p>One of the most obvious positive outcomes of camping is getting the opportunity to perform more physical activities. You
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="row p-3 bg-white border" id="card">
                                <h5 class=" fw-bold">Getting plenty of sunshine:-</h5>
                                <p>The sun is a great source of vitamin D which lets the body take in the necessary calcium and phosphorus .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require_once("include/footer.php"); ?>
    <script>
        AOS.init();
    </script>
</body>

</html>