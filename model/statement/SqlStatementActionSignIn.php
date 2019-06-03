<?php
  class SqlStatementSignIn extends SqlStatement {

    public function __construct($linkToBdd, $record) {
      parent::__construct($linkToBdd,$record);
      $this->sql = 'SELECT username, password FROM user WHERE username = :username';
      $this->succesMsg = 'You are logged';
    }

    public function bindParam() {
      $this->pdoStatement->bindParam(':username',$this->record->getUsername());
    }
    public function getSql() {
      return $this->sql;
    }
  }


 ?>
