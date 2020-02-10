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
    $data->params = [];
    $data->params[0]->mysql_type = '%s';
    $data->params[0]->mysql_column = 'Tracking_Number';
    $data->params[0]->mysql_param = '1234567';

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
