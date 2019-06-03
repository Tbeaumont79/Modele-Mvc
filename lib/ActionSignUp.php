<?php
// ceci est la procedure pour enregistré un usagé.
  class ActionSignUp {

    private $linkToBdd;
    private $connectToBdd;
    private $sqlStatementActionRegister;
    private $sqlStatementActionCheckBeforeRegister;
    private $isActionSucces;
    private $msg;
    private $registerRecord;

    public function __construct($username, $password, $email) {
        $this->registerRecord = new RecordUserData($username, $password, $email);
        $this->linkToBdd = new ConnectToBdd();
        $this->linkToBdd->connectToBdd();
        $this->sqlStatementActionRegister = new SqlStatementActionSignUp($this->linkToBdd, $this->registerRecord);
        $this->sqlStatementActionCheckBeforeRegister = new SqlStatementActionCheckBeforeRegister($this->linkToBdd, $this->registerRecord);
        $this->isActionSucces = false;
        $this->msg = '';
    }

    public function getData() {
      return $this->data;
    }

    public function getMsg() {
      return $this->msg;
    }

    public function getActionResult() {
      return $this->isActionSucces;
    }

    public function signUp() {
        $this->sqlStatementActionCheckBeforeRegister->prepare();
        $this->sqlStatementActionCheckBeforeRegister->bindParam();
        $this->sqlStatementActionCheckBeforeRegister->execute();
        $this->sqlStatementActionCheckBeforeRegister->getExecuteSuccess();
        $this->rowCount = $this->sqlStatementActionCheckBeforeRegister->getRowCount();
        if ($this->rowCount == 0) {
          $this->sqlStatementActionRegister->prepare();
          $this->sqlStatementActionRegister->bindParam();
          $this->sqlStatementActionRegister->execute();
          $this->isActionSucces = $this->sqlStatementActionRegister->getExecuteSuccess();
          if ($this->isActionSucces) {
            $this->msg = $this->sqlStatementActionRegister->getSuccesMsg();
          }
          else {
            $this->msg = $this->sqlStatementActionRegister->getErrorMsg();
        }
      }
      else {
        $this->msg = "this username already existe you may use another one";
      }
    }
  }
?>
