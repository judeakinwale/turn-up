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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body id="bg-img">

    <!-- HEADER NAVBAR-->
    <?php require('header_slim.php') ?>
    <!-- SIGN IN -->
    <section>
        <div class="full-height">
            <div class="container py-5 text-transparent-70">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="POST" action="./connections/process_sign_in.php" onsubmit="return validateSignIn()">
                            <?php echo @$_SESSION['login_error'] ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input name="e_mail" type="email" class="form-control" id="emailHelp" aria-describedby="emailHelp" placeholder="">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <div class="input-group">
                                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="" />
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default border border-left-0 rounded-right text-light" type="button" onclick="showpass()">
                                            <i class="fa fa-eye-slash" id="show-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input name="remember_me" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="btn bg-purple text-light">Sign In</button>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <form action="">
                            <div class="py-3 py-md-0 text-center">
                                <h5>OR</h5>
                                <div class="row py-3 justify-content-center">
                                    <div class="btn-group col-12 col-sm-10 col-xl-6" role="group">
                                        <button type="button" class="btn btn-lg btn-primary">
                                            <img src="img/facebook-white-2.png" class="" height="20px" alt="">
                                        </button>
                                        <button type="button" class="btn btn-primary w-100">
                                            Sign In Using Facebook
                                        </button>
                                    </div>
                                </div>
                                <div class="row py-3 justify-content-center">
                                    <div class="btn-group col-12 col-sm-10 col-xl-6" role="group">
                                        <button type="button" class="btn btn-lg btn-danger">
                                            <img src="img/google-white.png" class="" height="20px" alt="">
                                        </button>
                                        <button type="button" class="btn btn-danger w-100">
                                            Sign In Using Google
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mt-3">
                        <small><a href="">Forgot Password?</a></small>
                        <br>
                        <small class="">Don't have an account? <a href="sign_up.php">Sign Up</a></small>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <section>
        <script src="https://kit.fontawesome.com/baf1bb5cb9.js" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <script src="./js/validation.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </section>
</body>

</html>
<?php session_destroy() ?>