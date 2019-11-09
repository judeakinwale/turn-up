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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body class="bg-light">

    <!-- HEADER NAVBAR-->
    <?php require('header_slim.php'); ?>

    <!-- SIGN UP -->
    <!-- SIGN UP -->
    <section>
        <div class="">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo "<p class='text-danger'>" . @$_SESSION['db_create_profile_error'] . "</p>"; ?>
                        <form method="POST" action="./connections/process_sign_up.php" onsubmit="return validateSignUp()">
                            <div class="form-row" id="name_row">
                                <div class="form-group col-sm-6">
                                    <label for="InputFirstName">First name</label>
                                    <input name="first_name" type="text" class="form-control" placeholder="First name" id="InputFirstName">

                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="InputLastName">Last name</label>
                                    <input name="last_name" type="text" class="form-control" placeholder="Last name" id="InputLastName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validationServerUsername">Username</label>
                                <input name="username" type="text" class="form-control" id="validationServerUsername" placeholder="" aria-describedby="inputGroupPrepend3" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1">Email</label>
                                <input name="e_mail" type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <!-- <span class="input-group-text" id="basic-addon2">@example.com</span> -->
                                <label for="inputPhoneNo">Phone No.</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-left" id="basic-addon1">
                                            <span id="flag"></span>
                                        </span>
                                    </div>
                                    <input name="mobile_number" type="tel" class="form-control" id="inputPhoneNo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDoB">Date of Birth</label>
                                <input name="date_of_birth" type="date" class="form-control" id="inputDoB">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <div class="input-group">
                                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder=""
                                        aria-describedby="passwordHelpBlock">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default border border-left-0 rounded-right" type="button" onclick="showpass()">
                                            <i class="fa fa-eye-slash" id="show-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 8-20 characters long.
                                </small>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="inputAddress">Address</label>
                                    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">City</label>
                                    <input name="city" type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCountry">Country</label>
                                    <select name="country" id="inputCountry" class="form-control">
                                        <option selected>Choose...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">State</label>
                                    <select name="state" id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="Check1">
                                <label class="form-check-label" for="Check1"><small>Agree to the <a href="">terms and conditions</small></a></label>
                            </div>

                            <button type="submit" class="btn bg-purple text-light">Sign Up</button>
                        </form>
                        <div class="my-3 text-center">
                            <small class="">Have an account? <a href="sign in.html">Sign In</a></small>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="text-center">
                                <h5>OR</h5>
                                <div class="row py-3 justify-content-center">
                                    <div class="btn-group col-12 col-sm-10 col-xl-6" role="group">
                                        <button type="button" class="btn btn-lg btn-primary">
                                            <img src="img/facebook-white-2.png" class="" height="20px" alt="">
                                        </button>
                                        <button type="button" class="btn btn-primary w-100">
                                            Sign Up Using Facebook
                                        </button>
                                    </div>
                                </div>
                                <div class="row py-3 justify-content-center">
                                    <div class="btn-group col-12 col-sm-10 col-xl-6" role="group">
                                        <button type="button" class="btn btn-lg btn-danger">
                                            <img src="img/google-white.png" class="" height="20px" alt="">
                                        </button>
                                        <button type="button" class="btn btn-danger w-100">
                                            Sign Up Using Google
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <section>

        <script src="https://kit.fontawesome.com/baf1bb5cb9.js" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <script src="./js/countries.js"></script>
        <script src="./js/validation.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </section>
</body>

</html>
<?php session_destroy() ?>