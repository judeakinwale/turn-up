<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TURN UP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body class="bg-purple">

    <!-- HEADER NAVBAR-->
    <?php require('header.php'); ?>
    <section class="container-fluid">

        <!-- FEATURED IMAGE AND EVENT DETAILS -->
        <section>
            <div class="jumbotron jumbotron-fluid py-0 bg-transparent">
                <div class="row px-md-3">
                    <div class="col-md-3"></div>
                    <!-- jumbotron-image is the featured image -->
                    <div class="col col-md-9 jumbotron-image">
                        <div class="row">
                            <!-- EVENT DETAILS -->
                            <div class="col-auto ml-n25p mt-15p py-2 mt-5 mt-md-0 transparent-dark">
                                <h1 class="display-4 font-weight-bold"><a href="" class="nav-link text-light">LAGOS CARNIVAL</a></h1>
                                <h3 class="lead"><a href="" class="nav-link text-light">TBS Lagos Island</a></h3>
                            </div>
                            <!-- GET TICKETS BUTTON -->
                            <div class="col-12 py-md-5 py-3">
                                <button type="button" class="btn btn-lg btn-dark border bg-purple m-md-5 m-3">GET TICKETS</button>
                            </div>
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
                        <div class="col-sm-4 py-3 px-3">
                            <a href=""><img src="img/02.png" class="rounded-xl img-fluid" alt="image" height=""></a>
                        </div>
                        <div class="col-sm-4 py-3 px-3">
                            <a href=""><img src="img/02.png" class="rounded-xl img-fluid" alt="image" height=""></a>
                        </div>
                        <div class="col-sm-4 py-3 px-3">
                            <a href=""><img src="img/02.png" class="rounded-xl img-fluid" alt="image" height=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php require('footer.php') ?>

</body>

</html>