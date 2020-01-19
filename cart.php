<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/tu Logo 2.png">
    <title>TURN UP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body id="bg-img">

    <!-- HEADER NAVBAR-->
    <?php require('header_slim.php') ?>
    
    <div class="container">
        <h2 class="my-5 h2 text-center text-light">Cart</h2>

        <div class="row my-5">
            <div class="col">
                <table class="table table-hover table-dark text-light bg-transparent">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Event</th>
                            <th scope="col">Price</th>
                            <th scope="col">Ticket quantity</th>
                            <th scope="col">Total ticket price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td> <span class="pr-3"><img src="https://via.placeholder.com/53x30" alt=""></span> Event 1</td>
                            <td class="">$0.00</td class="">
                            <td class="">2</td>
                            <td class="">$0.00</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td> <span class="pr-3"><img src="https://via.placeholder.com/53x30" alt=""></span class="pr-3"> Event 2</td>
                            <td class="">$10.00</td class="">
                            <td class="">3</td>
                            <td class="">$30.00</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td> <span class="pr-3"><img src="https://via.placeholder.com/53x30" alt=""></span> Event 3</td>
                            <td class="">$2.00</td class="">
                            <td class="">2</td>
                            <td class="">$4.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row"><strong>Total:</strong></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>$34.00</strong></td>
                        </tr>
                    </tfoot>
                </table>
                <hr class="bg-secondary">
                <a class="btn btn-lg btn-purple w-100" href="./checkout.php">Proceed to checkout</a>
            </div>
        </div>
        
    </div>

    <!-- JAVASCRIPT -->
    <section>
        <script src="https://kit.fontawesome.com/baf1bb5cb9.js" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <script src="./js/validation.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </section>
    </body>
    
    </html>
    <?php session_destroy() ?>