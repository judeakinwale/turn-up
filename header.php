<section class="bg-purple">

    <nav class="navbar navbar-expand-lg navbar-light text-light px-3">
        <!-- LOGO AND BRAND -->
        <a class="navbar-brand text-light" href="index.php">
            <img src="img/tu Logo 2.png" class="logo" alt="LOGO"> TURN UP <?php  ?>
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
                    <a class="nav-link text-light" href="organize.php">ORGANIZE</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-light" href="help.php">HELP</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-light" href="create_event.php">CREATE EVENT</a>
                </li>
                <li class="nav-item pl-3">
                    <?php
                    if (isset($_SESSION['db_username'])) {
                        echo '<a class="nav-link text-light" href="./connections/sign_out.php"><span><img src="./img/profile.png" alt="profile" width="30" height="30"> ' . $_SESSION['db_username'] . '</span></a>';
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