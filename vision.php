<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato&family=Montserrat:wght@600;700&family=Poppins&family=Roboto&display=swap');
        * {
            font-family: 'Montserrat', sans-serif;

        }

        #main_box {
            padding: 20px;
            background-image: url(./images/VISION/vision_bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        #Main_Heading {
            margin-top: 10px;
            padding-top: 40px;
            margin-bottom: 40px;
        }

        #Main_Heading h1 {
            text-align: left;
            font-size: 45px;
            font-weight: 900;
            color: green;
        }
    </style>
</head>

<body>

    <?php require_once("include/header.php"); ?>
    <div class="container-fluid" id="main_box">
        <div class="container" id="Main_Heading">
            <h1>OUR VISION & MISSION</h1>
        </div>
        <!--Mission-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-lg-6 ">
                    <div class="row " data-aos="fade-right">
                        <div class="col-lg-3 col-4"><img src="./images/VISION/vision.png" width="100%" alt=""></div>
                        <div class="col-lg-7 col-8">
                            <h3>VISION</h3>
                            <p> To create exceptional experiences in remarkable destinations.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-12 col-lg-6">
                    <div class="row " data-aos="fade-right">
                        <div class="col-lg-3 col-4"><img src="./images/VISION/target.png" width="100%" alt=""></div>
                        <div class="col-lg-8 col-8">
                            <h3>MISSION</h3>
                            <p>To be an ecologically friendly, full-service, Resort that provides guests with a relaxing and rejuvenating retreat from the stress and chaos of everyday life.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class=" col-12 col-lg-6">
                    <div class="row " data-aos="fade-right">
                        <div class="col-lg-3 col-4"><img src="./images/VISION/gold.png" width="100%" alt=""></div>
                        <div class="col-lg-9 col-8">
                            <h3>VALUS</h3>
                            <p>To be T-R-U-E Trust – We’re honest, transparent, and committed Reliable – We show up, with care and consistency United – We work together as a team Evolve – We embrace change and pursue growth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("include/footer.php"); ?>
    <script>
        AOS.init();
    </script>
</body>

</html>