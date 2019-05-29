<?php
  class ActionSignIn {

    private $linkToBdd;
    private $record;

    public function __construct($username, $password) {
      //record new RecordUserData ect .. 
      $this->linkToBdd = new ConnectToBdd();
      $this->linkToBdd->pdoConnection();
    }

    public function signIn() {
        //sql prepare
        //sql bindparam
        //sql exec
        //sql fetch
        //sql rowcount
    }
  }

 ?>
