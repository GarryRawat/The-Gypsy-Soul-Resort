<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg {
            background: url(images/bg-1.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .pricebanner {
            background-color: green;
            color: aliceblue;
        }

        .pricebanner:hover {
            background-color: red;
        }
    </style>
</head>

<body>
    <?php require_once("include/header.php"); ?>
    <section>
        <div class="container mt-5">
            <div class="row">
                <h1 class="text-center text-warning">Packages</h1>
            </div>
        </div>
        <div class="container bg">
            <div class="row p-5 ">
                <div class="col-12 col-lg-6 g-5">
                    <div class="row pricebanner p-lg-2">
                        <h5>Deluxe Cottage :<span>Rs. 7000+ TAX -2 Guests,Extra Bed : Rs.3000/-</span></h5>
                    </div>
                    <div class="row border border-success p-2">
                        <img src="./images/camp1.jpg" height="250px" width="100%" alt="">
                        <div class="row">
                            <h4 class="text-success fw-bolder">Deluxe Cottage</h4>
                            <p data-aos="zoom-in">
                                The Gypsy Soul Resort offers 4 Cottages accommodation equipped with all amenities needed for a relaxing holiday at the Resort. We offer you the best in hospitality and service for your stay.The resort offers accommodation in spacious and well-furnished rooms.
                                All rooms are neat and clean, windows of rooms offer picturesque view of valleys. Rooms offer all amenities to make your stay comfortable.
                            </p>
                            <div class="row bg-light m-lg-0" style="border :2px green dashed">
                                <div class=" col-lg-6 ">
                                    <h5 class=" text-success fw-bolder text-center">1st Day</h5>
                                    <hr>
                                    <ul>
                                        <li class="text-warning">Welcome With Drink</li><br>
                                        <li>Lunch: Rice, Daal, Rayta, Mix Veg, Roti</li>
                                        <li>Evening: Tea/ Coffee/ Mix Pakora</li>
                                        <li>Starters-Non Veg, Two Veg Snacks</li>
                                        <li>Course: Soup, Chicken Gravy, Mix Veg, Dal, Fried Rice, Roti, Sweet.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6" style="border-left:2px green dashed ">
                                    <h5 class="text-success fw-bolder text-center">2nd Day</h5>
                                    <hr>
                                    <ul>
                                        <li class="text-warning">Menu For second day:</li><br>
                                        <li>Bed Tea/ Green Tea/ Coffee with Cookies</li>
                                        <li>Breakfast : Bread Omlette, Parathas, Aloo Poori</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3">
                            <a class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6  g-5">
                    <div class="row pricebanner p-lg-2">
                        <h5>Deluxe Cottage :<span>Rs. 7000+ TAX -2 Guests,Extra Bed : Rs.3000/-</span></h5>
                    </div>
                    <div class="row border border-success p-2">
                        <img src="./images/camp3.jpg" class="" height="250px" width="100%" alt="">
                        <div class="row">
                            <h4 class="text-success fw-bolder">Deluxe Camp</h4>
                            <p data-aos="zoom-in">
                                The Gypsy Soul Resort offers 2 Camps accommodation equipped with all amenities needed for a relaxing holiday at the Resort.
                                We offer you the best in hospitality and service for your stay.The resort offers accommodation in spacious and well-furnished Camp. All Camp are neat and clean, windows of rooms offer picturesque view of valleys. Camp offer all amenities to make your stay comfortable.
                            </p>
                            <div class="row m-lg-0 bg-light" style="border:2px green dashed ">
                                <div class="col-lg-6">
                                    <h5 class="text-success fw-bolder text-center">1st Day</h5>
                                    <hr>
                                    <ul>
                                        <li class="text-warning">Welcome With Drink</li><br>
                                        <li>Lunch: Rice, Daal, Rayta, Mix Veg, Roti</li>
                                        <li>Evening: Tea/ Coffee/ Mix Pakora</li>
                                        <li>Starters-Non Veg, Two Veg Snacks</li>
                                        <li>Course: Soup, Chicken Gravy, Mix Veg, Dal, Fried Rice, Roti, Sweet.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6" style="border-left:2px  green dashed;">
                                    <h5 class="text-success fw-bolder text-center">2nd Day</h5>
                                    <hr>
                                    <ul>
                                        <li class="text-warning">Menu For second day:</li><br>
                                        <li>Bed Tea/ Green Tea/ Coffee with Cookies</li>
                                        <li>Breakfast : Bread Omlette, Parathas, Aloo Poori</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3">
                            <a class="btn btn-success">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row p-5">

                <p data-aos="zoom-in">
                    Our suites are non air-conditioned, and during the gentle monsoons and light winters,
                    each suite brims with warmth from its traditionally designed bonfire fireplaces.Cottage covering approx 240 square feet are designed keeping in mind the needs of today’s traveler. Cottage offers an option of a Double size bed and is equipped with a workspace that constitutes
                    a writing desk and chair,Outside private sitting area.
                </p>

            </div>
        </div>
        <div class="container bg mt-4  p-5">
            <div class="row p-4">
                <h3 class=" text-warning fw-bolder">Additional Information</h3>
                <ul>
                    <li><b>Extra Bed 2500/-</b></li>
                    <li><b>Child Policy: Kids free upto 7 Years no Extra Bed .</b></li>
                    <li><b>Rates Not applicable for Long weekends Govt.
                            Taxes extra as applicable Check Out Time 12.00 Noon</b></li>
                </ul>
            </div>
        </div>
    </section>
    <?php require_once("include/footer.php"); ?>
    <script>
        AOS.init();
    </script>
</body>

</html>