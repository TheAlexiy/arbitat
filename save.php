<?php

require_once __DIR__ . '/boot.php';

$stmt = pdo()->prepare(
    "INSERT INTO `auction` (`bid_id`, `lot_id`, `lot_link`, `starting_price`, `event_date`, `status` ) 
VALUES (:bit_id, :lot_id, :lot_link, :starting_price, :event_date, :status)"
);
$stmt->execute([
    'bit_id' => "",
    'lot_id' => "",
    'lot_link' => "",
    'starting_price' => "",
    'event_date' => "",
    'status' => "",
]);