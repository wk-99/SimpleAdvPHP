<?php

class Database {

	private $host = "";
	private $user = "";
	private $password = "";
	private $database = "";
	public $pdo;
	private $sQuery;
	private $settings;
	private $bConnected = false;
	private $parameters;

  function __construct() {
    $this->connect();
  }

  private function connect() {

	try {

		$this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
		$this->bConnected = true;

	} catch (PDOException $e) {
			echo "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}

	public function CloseConnection() {
	 	$this->pdo = null;
	}

	private function Init($query,$parameters = "") {

		if (!$this->bConnected) { $this->Connect(); }

		try {

			$this->sQuery = $this->pdo->prepare($query);
			$this->bindMore($parameters);

			if (!empty($this->parameters)) {

				foreach($this->parameters as $param) {
					$parameters = explode("\x7F",$param);
					$this->sQuery->bindParam($parameters[0],$parameters[1]);
				}
			}

			$this->success = $this->sQuery->execute();

			} catch(PDOException $e) {
				$this->ExceptionLog($e->getMessage(), $query );
			}

			$this->parameters = array();
	}


	public function bind($para, $value) {
		$this->parameters[sizeof(str_split($this->parameters))] = ":" . $para . "\x7F" . utf8_encode($value);
	}

	public function bindMore($parray) {
		if (empty($this->parameters) && is_array($parray)) {
			$columns = array_keys($parray);

			foreach ($columns as $i => &$column)	{
				$this->bind($column, $parray[$column]);
			}
		}
	}

	public function query($query,$params = null, $fetchmode = PDO::FETCH_ASSOC) {

		$query = trim($query);
		$this->Init($query,$params);
		$rawStatement = explode(" ", $query);

		$statement = strtolower($rawStatement[0]);

		if ($statement === 'select' || $statement === 'show') {

			return $this->sQuery->fetchAll($fetchmode);

		} elseif ($statement === 'insert' ||  $statement === 'update' || $statement === 'delete') {
				return $this->sQuery->rowCount();
		} else {
				return NULL;
		}
	}

	public function lastInsertId() {
		return $this->pdo->lastInsertId();
	}

	public function column($query,$params = null) {

		$this->Init($query,$params);
		$Columns = $this->sQuery->fetchAll(PDO::FETCH_NUM);

		$column = null;

		foreach ($Columns as $cells) {
			$column[] = $cells[0];
		}
		return $column;
	}

	public function row($query,$params = null,$fetchmode = PDO::FETCH_ASSOC) {
		$this->Init($query,$params);
		return $this->sQuery->fetch($fetchmode);
	}

	public function single($query,$params = null) {
		$this->Init($query,$params);
		return $this->sQuery->fetchColumn();
	}

	public function rowCount() {
		return $this->sQuery->rowCount();
	}
}

?>

