<?php

class Display {

  function __construct() {
    $this->connectToDb();
  }

  private function connectToDb() {
    $this->db = new Database();
  }

  function getAll() {
    return $this->db->query("SELECT * FROM adver");
  }

  function getByID($id) {
    return $this->db->row("SELECT * FROM adver WHERE id = :id", array("id"=>$id));
  }

  function getByName() {
    return $this->db->query("SELECT id, name, data_end, data FROM adver");
  }

  function delete($id) {
    return $this->db->query("DELETE FROM adver WHERE id = :id", array("id"=>$id));
  }

  function get_enum_values() {

    $sql = "SHOW COLUMNS FROM adver WHERE field='category'";

    $row = $this->db->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    foreach (explode("','",substr($row['Type'],6,-2)) as $option) {
      $arr[] = $option;
    }
    return $arr;
  }

  function update($adver) {

    $id = intval($adver['id']);
    $sql = "UPDATE adver SET ";

    foreach ($adver as $key => $value) {
        $sql .= "`" . $key . "` = :" . $key . ", ";
    }

    $pat = "+-0*/";
    $sql .= $pat;
    $sql = str_replace(", " . $pat, " ", $sql);
    $sql .= " WHERE `id` = $id";

    $query = $this->db->pdo->prepare($sql);

    foreach ($adver as $key => $value) {
        $query->bindParam(":$key", $adver[$key]);
    }

    if ($query->execute()) {
      return TRUE;
    } else {
        throw new Exception("Error: Can not excute the query.");
        return FALSE;
    }
  }

  function deleteImg($id) {

    $data = [
      'foto' => '',
      'id' => $id,
    ];

    $this->db->pdo->prepare("UPDATE adver SET foto=:foto WHERE id=:id")->execute($data);
  }


  function last() {
    return $this->db->query("SELECT * FROM adver ORDER BY id DESC LIMIT 3");
  }
}
?>