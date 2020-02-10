<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'PUT':

    break;
  case 'POST':

    break;
  case 'GET':

    break;
  case 'DELETE':
    // code...
    break;
  default:
    http_response_code(405);
    break;
}
?>
