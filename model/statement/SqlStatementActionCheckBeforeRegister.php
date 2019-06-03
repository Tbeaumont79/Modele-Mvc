<?php
  class SqlStatementActionCheckBeforeRegister extends SqlStatement {

    public function __construct($linkToBdd, $record) {
      parent::__construct($linkToBdd, $record);
      $this->sql = 'SELECT username FROM user WHERE username = :username';
    }

    public function bindParam() {
      $this->pdoStatement->bindParam(':username', $this->record->getUsername());
    }

    public function getSql() {
      return $this->sql;
    }
  }
 ?>
