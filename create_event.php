<?php
require('./connections/user_login_status.php'); ?>

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
    <link rel="icon" href="img/tu Logo 2.png">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body class="">

    <!-- HEADER NAVBAR-->
    <?php require('header_slim.php') ?>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <form action="">
                        <div class="form-group pt-2">
                            <!-- <label for="">Event Name</label> -->
                            <input type="text" class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none" id="" placeholder="Event Name">
                        </div>
                        <div class="form-group pt-2">
                            <!-- <label for="">Description</label> -->
                            <input type="text" class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none" id="" placeholder="Description">
                        </div>
                        <div class="form-group pt-2">
                            <!-- <label for="imageUpload">Event Image</label> -->
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imageUpload" accept="image/*" aria-describedby="inputGroupFileAddon04">
                                    <label class="custom-file-label rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none" for="imageUpload">Choose Event Image</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-purple" type="button" id="imageUploadButton">Upload</button>
                                </div>
                            </div>
                            <small id="imageUpload" class="form-text text-muted">
                                Preferably with a 16x9 aspect ratio.
                            </small>
                        </div>
                        <div class="form-row">
                            <div class="form-group pt-2 pt-2 col-md-8">
                                <!-- <label for="inputAddress">Address</label> -->
                                <input name="address" type="text"
                                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none"
                                    id="inputAddress" placeholder="Address">
                            </div>
                            <div class="form-group pt-2 pt-2 col-md-4">
                                <!-- <label for="inputCity">City</label> -->
                                <input name="city" type="text"
                                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none"
                                    id="inputCity" placeholder="City">
                            </div>
                            <div class="form-group pt-2 pt-2 col-md-6">
                                <!-- <label for="inputCountry">Country</label> -->
                                <select name="country" id="inputCountry"
                                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none"
                                    aria-placeholder="Select your country">
                                    <option selected>Country</option>
                                </select>
                            </div>
                            <div class="form-group pt-2 pt-2 col-md-6">
                                <!-- <label for="inputState">State</label> -->
                                <select name="state" id="inputState"
                                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none">
                                    <option selected>State</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group pt-2 col-md-7">
                                <!-- <label for="">Ticket Price</label> -->
                                <input type="number" class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none" id="" placeholder="Ticket Price">
                            </div>
                            <div class="form-group pt-2 col-md-5">
                                <!-- <label for="">Ticket Limit</label> -->
                                <input type="number" class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none" id="" placeholder="Ticket Limit">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group pt-2 col-md-6">
                                <label for=""><small>Category:</small></label>
                                <select id="inputState" class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none">
                                    <option value="Exhibition">Exhibiton</option>
                                    <option value="Meetup">Meetups</option>
                                    <option value="Party">Parties</option>
                                    <option value="Religious">Religious</option>
                                    <option value="Seminar">Seminars</option>
                                    <option value="Show">Shows</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group pt-2 col-md-6">
                                <label for=""><small>Event Package:</small></label>
                                <select id="inputState" class="form-control rounded-0 border-top-0 border-right-0 border-left-0 bg-transparent shadow-none">
                                    <option value="Essentials Package">Essentials Package</option>
                                    <option value="Professional Package">Professional Package</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group pt-2">
                            <button type="submit" class="btn btn-purple mt-3">Create Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-purple py-5">
        <h2 class="text-center text-light">Find the package that's right for you</h2>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Pricing</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat sit, cumque alias ipsa odio cupiditate! 
                        Esse quos nam quasi nisi molestiae, earum nulla perspiciatis amet vitae excepturi tempore maxime consectetur distinctio qui.</p>
                </div>
            
                <div class="container">
                    <div class="card-deck mb-3 text-center">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Essentials</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">0% <small class="text-muted">/ ticket</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum.</li>
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <button type="button" class="btn btn-lg btn-block btn-outline-purple">Sign up for free</button>
                            </div>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Professional</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">3.5% <small class="text-muted">/ ticket</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum.</li>
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <button type="button" class="btn btn-lg btn-block btn-purple">Get started</button>
                            </div>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Premium</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">Custom <small class="text-muted"></small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum.</li>
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <button type="button" class="btn btn-lg btn-block btn-outline-purple">Contact us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center py-3">Have any questions? Visit our <a href="help.php">FAQ</a></p>
        </div>
    </section>

    <!--footer-->
    <?php require './footer.php' ?>

</body>

</html>