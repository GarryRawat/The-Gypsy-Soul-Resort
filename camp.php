<!DOCTYPE html>
<html>
<style>
    .bg {
        background: url(images/bg-1.jpg);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #card {
        transition: 1s;

    }

    #card:hover {
        transform: scale(1.1);
    }
</style>

<body>
    <?php require_once("include/header.php"); ?>
    <section>
        <div class="container bg  p-5 mt-4">
            <h1 class="text-success text-center">Camp Gallery</h1>
            <div class="row">
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-1.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-1.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-2.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-2.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class=" col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-3.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-3.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class=" col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-4.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-4.jpg" width="100%" height="250px" alt=""></a>
                </div>

            </div>

            <div class="row">
                <div class="col p-4 mt-4 " id="card">

                    <a href="images/camp/camp-5.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-5.jpg" class="img-fluid" width="100%" height="150px" alt=""></a>

                </div>
            </div>
            <div class="row">
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-6.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-6.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-7.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-7.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-8.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-8.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-9.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-9.jpg" width="100%" height="250px" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-1.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-1.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-1.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-1.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-1.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-1.jpg" width="100%" height="250px" alt=""></a>
                </div>
                <div class="col-6 p-2 col-lg-3" id="card">
                    <a href="images/camp/camp-1.jpg" data-lightbox="roadtrip"><img src="images/camp/camp-1.jpg" width="100%" height="250px" alt=""></a>
                </div>
            </div>
    </section>

    <?php require_once("include/footer.php"); ?>
</body>


</html>