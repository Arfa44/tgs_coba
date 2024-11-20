<?php
require_once 'app/controllers/ReservationController.php';

$controller = new ReservationController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/reservasi/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/reservasi/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/reservasi/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/reservasi\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $reservation_id = $matches[1];
    $controller->edit($reservation_id);
} elseif (preg_match('/\/reservasi\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $reservation_id = $matches[1];
    $controller->update($reservation_id);
} elseif (preg_match('/\/reservasi\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $reservation_id = $matches[1];
    $controller->delete($reservation_id);
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>