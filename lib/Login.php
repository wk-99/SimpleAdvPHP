<?php

class Login {

    private $username;
    private $password;
    private $db;

    function __construct($username, $password) {
        $this->setData($username, $password);
        $this->connectToDb();
        $this->getData();
    }

    private function setData($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    private function connectToDb(){
		$this->db = new Database();
    }


    function getData() {

        $query = $this->db->row("SELECT * FROM users WHERE username = :username", array('username'=>$this->username));


	    if ($this->db->rowCount() > 0) {

			if (password_verify($this->password , $query['password'])) {

				session_start();

                $_SESSION['username'] = $query['username'];

                header('Location: add.php');

				return true;

			} else {

				$_SESSION['username'] = false;

                @session_regenerate_id();

                header('Location: login.php?error=1');

				return false;
			}
	    }
    }


    public function is_loggedin() {

        if(isset($_SESSION['username'])){
           return true;
        }
     }
}

?>
