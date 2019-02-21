<?php

class Adver{

  private $data;

  public function __construct($data) {
    $this->data = $data;
    $this->connectToDb();
    $this->AddData($this->data);
  }

  private function connectToDb() {
    $this->db = new Database();
  }


  function AddData($data) {

    foreach ($data as $key => $value) {
      $keys[] = $key;
      $values[] = $value;
    }

    $tblKeys = implode($keys, ",");
    $keyss = ':' . implode($keys, ",:");

    $insert = $this->db->pdo->prepare("INSERT INTO adver($tblKeys) VALUES($keyss)");

    foreach ($keys as $key) {
      $insert->bindParam(":$key", $data[$key]);
    }

    if ($insert->execute()) {
        return TRUE;
    } else {
      throw new Exception("Error");
      return FALSE;
    }
  }
}
?>


