<?php
require('./db_connect.php');
$event_name = $_REQUEST['event-name'];
$event_description = $_REQUEST['event-description'];
$isImage = getimagesize($_FILES['event-image']['tmp_name']);
$imageType = strtolower(pathinfo($_FILES['event-image']['name'], PATHINFO_EXTENSION));
$event_image = strtolower(str_replace(' ', '_', $event_name . date('YmdHis') . '.' . $imageType));
$event_location = $_REQUEST['event-location'];
$event_city = $_REQUEST['event-city'];
$event_state = $_REQUEST['event-state'];
$event_country = $_REQUEST['event-country'];
$ticket_price = $_REQUEST['ticket-price'];
$ticket_limit = $_REQUEST['ticket-limit'];
$evet_category = $_REQUEST['event-category'];
$evet_package = $_REQUEST['event-package'];
$isUploaded = false;
// print_r($isImage);
if ($isImage) {
    if ($_FILES['event-image']['size'] < 1000 * 1000) {
        $image_dir_name = '../img/event_img/' . $event_image;
        if (!file_exists($image_dir_name)) {
            move_uploaded_file($_FILES['event-image']['tmp_name'], $image_dir_name) or die('<p>unable to move file');
            $isUploaded = true;
        }
    }
}
if (!$isUploaded) {
    header('Location: ../create_event.php');
} else {
    $create_event_SQL = "INSERT INTO events(
    `event_name`,
    `event_description`,
    `event_image`,
    `event_country`,
    `event_state`,
    `event_location`,
    `event_city`,
    `ticket_price`,
    `ticket_limit`,
    `event_category`,
    `event_package`) 
    VALUES(
    '$event_name',
    '$event_description',
    '$event_image',
    '$event_location',
    '$event_city',
    '$event_state',
    '$event_country',
    '$ticket_price',
    '$ticket_limit',
    '$evet_category',
    '$evet_package'
    )";
    if ($conn->query($create_event_SQL)) {
        header('Location: ../events.php');
    } else {
        unlink($image_dir_name);
        header('Location: ../create_event.php');
    }
}
