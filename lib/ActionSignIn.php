<?php
  class ActionSignIn {

    private $linkToBdd;
    private $succesMsg;
    private $errorMsg;
    private $record;
    private $sqlStatementLogin;
    private $dataArray;
    private $executeSuccess;
    private $rowCount;
    private $msg;

    public function __construct($username, $password) {
      //record new RecordUserData ect ..
      $this->record = new RecordUserData($username, $password);
      $this->linkToBdd = new ConnectToBdd();
      $this->linkToBdd->connectToBdd();
      $this->sqlStatementLogin = new SqlStatementActionSignIn($this->linkToBdd, $this->record);
      $this->succesMsg = '';
      $this->errorMsg = '';
      $this->msg = '';
    }

    public function getMsg() {
      return $this->msg;
    }

    public function getSuccesMsg() {
      return $this->succesMsg;
    }

    public function getErrorMsg() {
      return $this->errorMsg;
    }

    public function signIn() {

        $this->sqlStatementLogin->prepare();
        $this->sqlStatementLogin->bindparam();
        $this->sqlStatementLogin->execute();
        $this->rowCount = $this->sqlStatementLogin->getRowCount();
        $this->isSucces = $this->sqlStatementLogin->getExecuteSuccess();

        if ($this->isSucces && $this->rowCount > 0) {
          $this->msg = "you are logged";
        }
        else {
          $this->msg = "Invalid password or username";
        }
    }
  }

 ?>
