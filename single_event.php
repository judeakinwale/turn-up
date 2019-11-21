<?php
require('./connections/user_login_status.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/tu Logo 2.png">
    <title>TURN UP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body id="bg-img">

    <!-- HEADER NAVBAR-->
    <?php require('header_slim.php') ?>
    <!-- SEARCH -->
    <!-- <section class="bg-light">
        <div class="container">

            <div class="input-group pt-3">
                <input type="search" class="form-control" aria-label="Search Input" placeholder="Search Events">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>

                </div>
            </div>
            <nav>

            </nav>
        </div>
    </section> -->

    <!-- SINGLE EVENTS -->
    <section class="container text-light">
        <div class="row py-3">
            <div class="col-md-8">
                <img src="img/1080-grey.png" class="img-fluid m-0 p-0" alt="">
            </div>
            <div class="col-md-4">
                <div class="row h-50">
                    
                </div>
                <div class="row h-25 justify-content-center">
                    <h3 class="text-center">@Event organizer link</h3>
                </div>
                <div class="row align-items-end">
                    <div class="col-12 pt-5">
                        <button class="btn btn-lg btn-outline-light w-100" type="submit">Buy Ticket</button>
                    </div>               
                </div>
            </div>

        <div class="row">
            <div class="col-md-8 p-5">
                <h5>Description:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ducimus quo cumque recusandae illum voluptas
                    repudiandae. Quam, eum dignissimos saepe repellat optio sint.</p>
            
            </div>
            <div class="col-md-4 p-5">
                <div class="col-md-12">
                    <h5>Location:</h5>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-md-12">
                    <h5>Time:</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <!-- <p>Lorem ipsum dolor sit.</p> -->
                </div>
            </div>
        </div>
            
            <!-- <h5>Event Tags: lorem, ipsum</h5> -->
            <!-- <div class="col-sm-12">
                <h5></h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15856.4965315804!2d3.3616950298130233!3d6.505967044284971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c5b5eff1d99%3A0x2796afaf3969f996!2sTejuosho%20Market!5e0!3m2!1sen!2sng!4v1573568785025!5m2!1sen!2sng"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div> -->
                
            
        </div>
    </section>

    <section>
        
    </section>

    <section>

    </section>

    <!-- FOOTER -->
    <?php require('footer.php'); ?>
</body>

</html>