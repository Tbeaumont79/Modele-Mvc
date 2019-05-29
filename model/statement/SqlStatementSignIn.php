<?php
  class SqlStatementSignIn {

    public function __construct($linkToBdd, $record) {
      parent::__construct($linkToBdd,$record);
      $this->sql = 'SELECT username FROM user WHERE username = :username';
    }

    //bind param
  }


 ?>
