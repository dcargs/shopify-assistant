<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'PUT':
    require_once "order.php";

    break;
  case 'POST':
    require_once "order.php";

    break;
  case 'GET':
    require_once "order.php";
    $imported_order = new Imported_Order;
    echo $imported_order->get_order('ALL');
    break;
  case 'DELETE':
    require_once "order.php";

    break;
  default:
    http_response_code(405);
    break;
}
?>
