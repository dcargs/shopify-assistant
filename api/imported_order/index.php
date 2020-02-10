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
    $data = new stdClass;
    $data->params->mysql_types = ['%s'];
    $data->params->mysql_columns = ['Tracking_Number'];
    $data->params->mysql_params = ['1234567'];

    // var_dump($imported_order->get_order('ALL'));
    var_dump($imported_order->get_order($data));
    break;
  case 'DELETE':
    require_once "order.php";

    break;
  default:
    http_response_code(405);
    break;
}
?>
