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
    </style>
</head>

<body>
    <?php require_once("include/header.php"); ?>
    <section>
        <div class="container bg mt-5">

            <div class="row">
                <div class="col-lg-6 p-4">
                    <div class="row  p-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <h3 class="text-success fw-bolder">Dining & Cuisine</h3>
                        <p class="p-2" data-aos="zoom-out">
                            Witness breathtaking views from the open seating to make the most of the mountain breeze and the memorable sights on either side. We have majestic views of the surkhanda devi peak on the east and tranquil views stretching down to saklana Range on the west. Make sure you take some time out during your stay with us to appreciate a relaxed early dinner and catch the sunset. For breakfast, enjoy our buffet spread on the sun deck.

                        </p>
                        <p class="p-2" data-aos="zoom-in">
                            You can ask our staff to recommend the chef’s special for the day. While the resort serves Indian, Chinese and Continental cuisine, you can also ask for a spread of local cuisine on special request. Ingredient availability is conditional on the season, please check availability with our manager.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 p-5">
                    <img src="./images/dining.jpg" alt="Notebook" width="100%">

                </div>
            </div>
        </div>
    </section>
    <?php require_once("include/footer.php"); ?>
    <script>
        AOS.init();
    </script>

</body>

</html>