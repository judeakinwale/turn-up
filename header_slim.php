<section class="bg-purple">

    <nav class="navbar navbar-expand-lg navbar-light text-light px-3">
        <!-- LOGO AND BRAND -->
        <a class="navbar-brand text-light" href="index.php">
            <img src="img/tu Logo 2.png" class="" height="36px" alt="LOGO"> TURN UP <?php  ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <img src="img/menu.svg" class="py-2" width="30px" alt="">
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-3">
                    <a class="nav-link text-light" href="events.php">BROWSE EVENT</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-light" href="help.php">HELP</a>
                </li>
                <?php
                    if (isset($_SESSION['db_username'])) {
                        echo '
                <li class="nav-item px-3">
                    
                    <!-- Button trigger modal -->
                    <a class="nav-link text-light" href="" data-toggle="modal" data-target="#exampleModalScrollable">CREATE EVENT</a>
                    
                    <!-- Modal -->
                    <div class="modal fade text-dark" id="exampleModalScrollable" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Create Event</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <section>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="">Event Name</label>
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Description</label>
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="imageUpload">Event Image</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="imageUpload" accept="image/*"
                                                                        aria-describedby="inputGroupFileAddon04">
                                                                    <label class="custom-file-label" for="imageUpload">Choose image</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-purple" type="button"
                                                                        id="imageUploadButton">Upload</button>
                                                                </div>
                                                            </div>
                                                            <small id="imageUpload" class="form-text text-muted">
                                                                Preferably with a 16 x 9 aspect ratio.
                                                            </small>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-8">
                                                                <label for="inputAddress">Location</label>
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
                                                        <div class="form-row">
                                                            <div class="form-group col-md-7">
                                                                <label for="">Ticket Price</label>
                                                                <input type="number" class="form-control" id="" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label for="">Ticket Limit</label>
                                                                <input type="number" class="form-control" id="" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Category</label>
                                                                <select id="inputState" class="form-control">
                                                                    <option value="Exhibition">Exhibiton</option>
                                                                    <option value="Meetup">Meetups</option>
                                                                    <option value="Party">Parties</option>
                                                                    <option value="Religious">Religious</option>
                                                                    <option value="Seminar">Seminars</option>
                                                                    <option value="Show">Shows</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Event Package</label>
                                                                <select id="inputState" class="form-control">
                                                                    <option selected>Essentials Package</option>
                                                                    <option>Professional Package</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" class="btn bg-purple text-light w-75">Create Event</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>';
                }
                ?>
                <li class="nav-item pl-3">
                    <?php
                    if (isset($_SESSION['db_username'])) {
                        echo '<div class="dropdown" style="top: 14%; cursor: pointer;">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span><img src="./img/profile.png" alt="profile" width="30" height="30">' . $_SESSION['db_username'] . '<span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="#">Profile</a>
                           <a class="dropdown-item" href="#">Something</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="./connections/sign_out.php">Logout</a>
                         </div>';
                    } else {
                        echo '<a class="nav-link text-light" href="sign_in.php">SIGN IN</a>';
                    }
                    // function signOUt()
                    // {
                    //     echo "im out";
                    // }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
</section>