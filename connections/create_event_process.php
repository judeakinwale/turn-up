<?php
// echo '<p>' . $event_name = $_REQUEST['event-name'];
// echo '<p>' . $event_description = $_REQUEST['event-description'];
$isImage = getimagesize($_FILES['event-image']['tmp_name']);
$imageType = strtolower(pathinfo($_FILES['event-image']['name'], PATHINFO_EXTENSION));
// print_r($isImage);
if ($isImage) {
    if ($_FILES['event-image']['size'] < 1000 * 1000) {
        echo '<p>' . $image_dir_name = '../img/event_img/' . $event_name . date('Ymd') . '.' . $imageType;
        move_uploaded_file($_FILES['event-image']['tmp_name'], $image_dir_name) or die('<p>unable to move file');
    } else {
        echo 'image too large';
    }
} else {
    echo 'not an image';
}
// echo '<p>' . $_FILES['event-image']['name'];
// echo '<p>' . $_FILES['event-image']['tmp_name']['mine'];
// echo '<p>' . $_FILES['event-image']['size'];
// echo '<p>' . $_FILES['event-image']['type'];
// echo '<p>' . date('Ymd');
// echo '<p>' . $event_location = $_REQUEST['event-location'];
// echo '<p>' . $event_city = $_REQUEST['event-city'];
// echo '<p>' . $event_state = $_REQUEST['event-state'];
// echo '<p>' . $event_country = $_REQUEST['event-country'];
// echo '<p>' . $ticket_price = $_REQUEST['ticket-price'];
// echo '<p>' . $ticket_limit = $_REQUEST['ticket-limit'];
// echo '<p>' . $evet_category = $_REQUEST['event-category'];
// echo '<p>' . $evet_package = $_REQUEST['event-package'];
