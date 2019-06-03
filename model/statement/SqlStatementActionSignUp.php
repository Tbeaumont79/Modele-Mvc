<?php
  class SqlStatementActionSignUp extends SqlStatement {
    // linkToBdd est de type ConnectToBddMySql
    public function __construct($linkToBdd, $record) {
      parent::__construct($linkToBdd, $record);
      $this->sql = 'INSERT INTO user (username, password, email) VALUES (:username,:password,:email);';
      $this->succesMsg = 'Bravo vous êtes bien enregistré.';
    }

    public function bindParam() {
      $this->pdoStatement->bindParam(':username', $this->record->getUsername());
      $this->pdoStatement->bindParam(':password',$this->record->getHashPassword());
      $this->pdoStatement->bindParam(':email',$this->record->getEmail());
    }

    public function getSql() {
        return $this->sql;
    }
  }
 ?>
