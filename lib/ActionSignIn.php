<?php
  class ActionSignIn {

    private $registerRecord;
    private $connectToBdd;
    private $sqlStatementActionLogin;
    private $isActionSucces;
    private $msg;
    private $rowCount;
    private $data;

    public function __construct($username, $password) {
        $this->registerRecord = new RecordUserData($username, $password);
        $this->connectToBdd = new ConnectToBdd();
        $this->connectToBdd->connectToBdd();
        $this->sqlStatementActionLogin = new SqlStatementActionSignIn($this->connectToBdd, $this->registerRecord);
        $this->isActionSucces = false;
        $this->msg = '';
        $this->rowCount = null;
        $this->data = [];
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

    public function signIn() {
        $this->sqlStatementActionLogin->prepare();
        $this->sqlStatementActionLogin->bindParam();
        $this->sqlStatementActionLogin->execute();
        $this->rowCount = $this->sqlStatementActionLogin->getRowCount();
        $this->isActionSucces = $this->sqlStatementActionLogin->getExecuteSuccess();        // 6: si !ok msgErr
        if ($this->isActionSucces &&  $this->rowCount > 0) {
          $this->sqlStatementActionLogin->fetch();
          $data = $this->sqlStatementActionLogin->getDataArray();
          $passOk = password_verify($this->registerRecord->getPassword(), $data['password']);
          if ($passOk){
              $this->msg = $this->sqlStatementActionLogin->getSuccesMsg();
            } else if (!$passOk) {
              $this->msg = 'invalide username or password';
            }
          } else {
            $this->msg = 'invalide username or password';
        }
    }
  }
?>
