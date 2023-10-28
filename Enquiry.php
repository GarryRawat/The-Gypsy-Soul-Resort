<?php require_once("include/header.php"); ?>
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
    <section>
        <div class="container ">
            <div class="row text-center mt-5">
                <h1 class="fw-bloder fw-lg-bloder text-warning">Enquiry</h1>
            </div>
        </div>
        <div class="container bg mt-2">
            <div class="row">
                <div class="col-lg-6 p-4">
                    <form action="" class=" p-5" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row">
                            <div class="col">
                                <label for="Name">Enter Name <span>*</span> </label>
                                <input type="text" value="" class="form-control">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="Name">Enter Email</label>
                                <input type="email" value="" class="form-control">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="Name">Enter Phone No </label>
                                <input type="text" value="" class="form-control">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="Name">Subject</label>
                                <input type="text" value="" class="form-control">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="Name">Your Message</label>
                                <textarea type="text" value="" class="form-control"></textarea>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <input type="submit" value="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 p-5">
                    <div class="row mt-5">
                        <img src="./images/Enquiring.png.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php require_once("include/footer.php"); ?>