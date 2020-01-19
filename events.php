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

<body id="bg-im">

    <!-- HEADER NAVBAR-->
    <?php require('header_slim.php') ?>
    <!-- SEARCH -->
    <section class="">
        <div class="container bg-white">

            <div class="input-group pt-3">
                <input type="search" class="form-control" aria-label="Search Input" placeholder="Search Events">
                <div class="input-group-append">
                    <button class="btn btn-outline-purple" type="submit">Search</button>

                </div>
            </div>
            <nav>

            </nav>
        </div>
    </section>

    <!-- EVENTS -->
    <section>
        <div class="album  ">
            <div class="container py-5 bg-white">
                <!-- <h2 class="pb-3">EVENTS</h2> -->
                <div class="row justify-content-between">
                    <?php
                    $select_events_SQL = "SELECT * FROM events";
                    if ($select_events_results = $conn->query($select_events_SQL)) {
                        if ($select_events_results->num_rows > 0) {
                            while ($rows = mysqli_fetch_assoc($select_events_results)) {
                                echo
                                    '<div class="col-md-4">'
                                        . '<div class="card mb-5 border-0 shadow-anim">'
                                        . '<a href="./single_event.php?event_name=' . $rows['event_name']
                                        . '&event_description=' . $rows['event_description']
                                        . '&event_image=' . $rows['event_image']
                                        . '&event_country=' . $rows['event_country']
                                        . '&event_state=' . $rows['event_state'] 
                                        . '&event_city=' . $rows['event_city'] 
                                        . '&event_location=' . $rows['event_location'] 
                                        . '&ticket_price=' . $rows['ticket_price']  
                                        . '&ticket_limit=' . $rows['ticket_limit']
                                        . '&event_category=' . $rows['event_category'] 
                                        . '&event_package=' . $rows['event_package'] 
                                        . '">'
                                        . '<img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/event_img/' . $rows['event_image'] . '" alt="' . $rows['event_name'] . ' image" focusable="false" role="img" aria-label="Placeholder: Thumbnail">'
                                        . '<div class="card-body">'
                                        . '<h5 class="card-title m-0 p-0"><a class="text-dark single-event-link" href="#">' . $rows['event_name'] . '</a></h5>'
                                        . '</div>'
                                        . '</a>'
                                        . '<div class="card-footer bg-transparent">'
                                        . '<div class="d-flex justify-content-between align-items-center">'
                                        . '<span class="text-muted"> </span>'
                                        . '<div class="btn-group">'
                                        . '<button type="button" class="btn btn-sm btn-outline-secondary">Add to Wishlist</button>'
                                        . '<button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>'
                                        . '</div>'
                                        . '</div>'
                                        . '</div>'
                                        . '</div>'
                                        . '</div>';
                                // echo $rows['event_image'];
                            }
                        } else {
                            echo '<h1>NO EVENT YET<h1>';
                        }
                    }
                    ?>










                    <div class="col-md-4">
                        <div class="card mb-5 border-0 shadow-anim">
                            <!-- <div> -->
                            <a href="single_event.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/02.png" alt="Placeholder" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></a>
                            <div class="card-body">
                                <h5 class="card-title m-0 p-0"><a class="text-dark" href="single_event.php">Card title Lorem, ipsum dolor.</a></h5>
                            </div>
                            <!-- </div> -->
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Free</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Wishlist</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="card mb-5 border-0 shadow-anim">
                            <a href="single_event.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/02.png" alt="Placeholder" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></a>
                            <div class="card-body">
                                <h5 class="card-title m-0 p-0"><a class="text-dark" href="single_event.php">Card title Lorem, ipsum dolor.</a></h5>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Free</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Wishlist</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-5 border-0 shadow-anim">
                            <a href="single_event.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/02.png" alt="Placeholder" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></a>
                            <div class="card-body">
                                <h5 class="card-title m-0 p-0"><a class="text-dark" href="single_event.php">Card title Lorem, ipsum dolor.</a></h5>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Free</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Wishlist</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-5 border-0 shadow-anim">
                            <a href="single_event.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/02.png" alt="Placeholder" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></a>
                            <div class="card-body">
                                <h5 class="card-title m-0 p-0"><a class="text-dark" href="single_event.php">Card title Lorem, ipsum dolor.</a></h5>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Free</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Wishlist</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-5 border-0 shadow-anim">
                            <a href="single_event.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/02.png" alt="Placeholder" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></a>
                            <div class="card-body">
                                <h5 class="card-title m-0 p-0"><a class="text-dark" href="single_event.php">Card title Lorem, ipsum dolor.</a></h5>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Free</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Wishlist</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-5 border-0 shadow-anim">
                            <a href="single_event.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/02.png" alt="Placeholder" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></a>
                            <div class="card-body">
                                <h5 class="card-title m-0 p-0"><a class="text-dark" href="single_event.php">Card title Lorem, ipsum dolor.</a></h5>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Free</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Wishlist</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>
            <!-- PAGINATION -->
            <section class=" bg-ligh">
                <div class="container pt-3">
                    <nav aria-label="Page navigation example text-dark">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link text-dark" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </section>

    <!-- FOOTER -->
    <?php require('footer.php'); ?>
    <section>
        <script src="js/main.js"></script>
    </section>
</body>

</html>