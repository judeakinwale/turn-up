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

<body class="bg-light">

    <!-- HEADER NAVBAR-->
    <?php require('header.php') ?>

    <!-- SIGN UP -->
    <section>
        <div class="">
            <div class="container py-5">
                <div class="row">
                    <div class="col col-lg-6">
                        <form method="POST" action="./connections/process_sign_up.php">
                            <div class="form-row">
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
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                    </div>
                                    <input name="username" type="text" class="form-control" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
                                <input name="e_mail" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4">Password</label>
                                <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" aria-describedby="passwordHelpBlock">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special
                                    characters, or emoji.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4">Confirm password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm password">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input name="address" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <!-- <div class="form-group col-md-4">
                                <label for="inputState">Country</label>
                                <select name="state" id="inputState" class="form-control">
                                    <option selected>country</option>
                                    <option>...</option>
                                </select>
                            </div> -->
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select name="state" id="inputState" class="form-control">
                                    <option selected>State</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input name="city" type="text" class="form-control" id="inputCity">
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="Check1">
                                <label class="form-check-label" for="Check1"><small>Agree to <a href="">terms and conditions</small></a></label>
                            </div>

                            <button type="submit" class="btn bg-purple text-light">Sign Up</button>
                        </form>
                        <div class="mt-3 text-center">
                            <small class="">Already have an account <a href="sign in.html">Sign In</a></small>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <section>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </section>

    <section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </section>

</body>

</html>