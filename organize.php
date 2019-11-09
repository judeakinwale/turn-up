<?php
require('./connections/user_login_status.php');
?>
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

<body class="bg-light">

    <!-- HEADER NAVBAR-->
    <?php require('header_slim.php') ?>
    <!-- ABOUT -->
    <section>
        <div class="">
            <div class="container py-5">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                        </div>

                        <label for="basic-url">Your vanity URL</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">With textarea</span>
                            </div>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <!-- <div class="w-100"></div>
                    <div class="col">
                        <small class="text-center">Don't have an account</small>
                        <small class="text-center"><a href="">Sign Up</a></small>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php require('footer.php') ?>

</body>

</html>