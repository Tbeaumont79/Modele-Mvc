<?php

  class ConnectToBdd {

    private $dsn;
    private $username;
    private $password;
    private $pdo;

    public function __construct() {
      $this->initConnectionDataBdd("mysql:dbname=login;port=8889;host=127.0.0.1",'root','root');
    }

    public function setDsn($dsn) {
      $this->dsn = $dsn;
    }

    public function setUsername($username) {
      $this->username = $username;
    }

    public function getPdo() {
      return $this->pdo;
    }

    public function pdoConnection() {
      try {
        $this->pdo = new PDO($dsn, $user, $password);
      } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function initConnectionDataBdd($dsn, $username, $password) {
      $this->setDsn($dsn);
      $this->setUsername($username);
      $this->setPassword($password);
    }

  }

 ?>
