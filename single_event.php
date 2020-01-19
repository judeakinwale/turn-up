<?php
require('./connections/user_login_status.php'); ?>

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
    <?php
    require('header_slim.php');
    // if(isset($_GET['ticket_price']))? echo $_GET['ticket_price']:echo '';
    // (isset($_GET['ticket_price'])) echo $_GET['ticket_price']: echo '';
    // echo $_GET['event_image'];
    ?>

    <!-- SINGLE EVENTS -->
    <section class="container text-light">
        <div class="row py-3">
            <div class="col-md-8">
                <img src="<?php echo (isset($_GET['event_image'])) ? 'img/event_img/' . $_GET['event_image'] : 'img/1080-grey.png'; ?>" class="img-fluid m-0 p-0" alt="">
            </div>
            <div class="col-md-4">
                <div class="row h-50">

                </div>
                <div class="row h-25 justify-content-center">
                    <h4 class="text-center">@Event organizer link</h4>
                </div>
                <div class="row align-items-end">
                    <div class="col-12">
                        <span>
                            <h4>Price: <?php echo (isset($_GET['ticket_price'])) ? $_GET['ticket_price'] : 'N/A'; ?></h4>
                        </span>
                    </div>
                    <div class="col-12 pt-3">
                        <a class="btn btn-lg btn-outline-light w-100" href="./cart.php">Buy Ticket</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 p-5">
                    <h5 class="mt-5 mt-md-0"><?php echo (isset($_GET['event_name'])) ? $_GET['event_name'] : 'N/A'; ?>:</h5>
                    <p><?php echo (isset($_GET['event_description'])) ? $_GET['event_description'] : 'N/A'; ?></p>

                </div>
                <div class="col-md-4 p-5">
                    <div class="col-md-12">
                        <h5>Location:</h5>
                        <p><?php echo (isset($_GET['event_location'])
                                && isset($_GET['event_city'])
                                && isset($_GET['event_state'])
                                && isset($_GET['event_country']))
                                ? $_GET['event_location'] . ' '
                                . $_GET['event_city'] . ' '
                                . $_GET['event_state'] . ' '
                                . $_GET['event_country'] : 'N/A'; ?></p>
                    </div>
                    <div class="col-md-12">
                        <h5>Time:</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <!-- <p>Lorem ipsum dolor sit.</p> -->
                    </div>
                </div>
            </div>



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