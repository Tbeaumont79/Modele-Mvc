<?php
  class RecordUserData {

    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email = null) {
      $this->initRecordUserData($username, $password, $email);
    }

    public function setUsername($username) {
      $this->username = $username;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function initRecordUserData($username, $password, $email = null) {
      $this->setUsername($username);
      $this->setPassword($password);
      $this->setEmail($email);
    }
  }
 ?>
