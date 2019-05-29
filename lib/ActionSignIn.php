<?php
  class ActionSignIn {

    private $linkToBdd;
    private $record;

    public function __construct() {
      $this->linkToBdd = new ConnectToBdd();
      $this->linkToBdd->pdoConnection();
    }

    public function signIn() {
        //sql 
    }
  }

 ?>
