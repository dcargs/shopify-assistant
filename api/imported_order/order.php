<?php
require_once "../db.php";

/**
 * For touching the Imported_Order MySQL Database
 */
class Imported_Order extends db {
  public function get_order($data){
    if ($data == 'ALL') {
      $sql = "SELECT * FROM Imported_Order ORDER BY id DESC";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    } elseif(isset($data->params)) {
      return $data->params;
    } else {
      return 'not sure what you sent me Imported_Order->get_order($data);';
    }
  }
}
