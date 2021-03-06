<?php
include $_SERVER['DOCUMENT_ROOT'] . '/turn-up/connections/user_login_status.php';   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/tu Logo 2.png">

    <title>TURN UP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body id="bg-img">

    <!-- HEADER NAVBAR-->
    <?php require('header.php'); ?>
    <main class="container-fluid">

        <!-- FEATURED IMAGE AND EVENT DETAILS -->
        <section>
            <div class="jumbotron jumbotron-fluid pb-0 pt-3 bg-transparent overflow-hidden">
                <div class="row px-md-3">
                    <div class="col-md-3"></div>
                    <!-- jumbotron-image is the featured image -->
                    <div class="col col-md-9 jumbotron-image">
                        <div class="row">
                            <!-- EVENT DETAILS -->
                            <div class="col-auto ml-n25p mt-15p py-2 mt-5 mt-md-0 transparent-dark">
                                <h1 class="display-4 font-weight-bold"><a href="./single_event.php" class="nav-link text-light">LAGOS CARNIVAL</a></h1>
                                <h3 class="lead"><a href="./single_event.php" class="nav-link text-light">TBS Lagos Island</a></h3>
                            </div>
                            <div class="w-100"></div>
                            <!-- GET TICKETS BUTTON -->
                            <div class="col-12 py-md-5 py-3 m-md-5 m-3">
                                <a href="./checkout.php" class="btn btn-lg btn-outline-w bg-purple">GET TICKETS</a>
                            </div>
                            <!-- <button type="button" class="btn btn-lg btn-dark border bg-purple m-md-5 m-3">GET TICKETS</button> -->

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- EVENTS -->
        <section>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9 col-12">
                    <div class="row justify-content-between">
                        <div class="col-sm-4 my-3">
                            <a href=""><img src="img/02.png" class="rounded-xl img-fluid shadow-anim-black" alt="image" height=""></a>
                        </div>
                        <div class="col-sm-4 my-3">
                            <a href=""><img src="img/02.png" class="rounded-xl img-fluid shadow-anim-black" alt="image" height=""></a>
                        </div>
                        <div class="col-sm-4 my-3">
                            <a href=""><img src="img/02.png" class="rounded-xl img-fluid shadow-anim-black" alt="image" height=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- FOOTER -->
    <?php require('footer.php') ?>

</body>

</html>