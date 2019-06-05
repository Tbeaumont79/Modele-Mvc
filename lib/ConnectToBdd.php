<?php

  class ConnectToBdd {


    public function __construct() {
    }

    public function getPdo() {
      return $this->pdo;
    }

    public function connectToBdd() {
      try {
        $this->pdo = new PDO("mysql:dbname=login;port=8889;host=127.0.0.1",'root','root');
      } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
    }
  }
 ?>
