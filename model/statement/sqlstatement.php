<?php

   class SqlStatement
   {
     protected $connectToBdd;
     protected $sql;
     protected $succesMsg;
     protected $errorMsg;
     protected $record;
     protected $pdoStatement;
     protected $dataArray;
     protected $executeSuccess;
     protected $rowCount;

     public function __construct($linkToBdd, $record) {
       $this->linkToBdd = $linkToBdd;
       $this->record = $record;
       $this->pdo = $this->linkToBdd->getPdo();
       $this->pdoStatement = null;
       $this->sql = null;
       $this->dataArray = [];
       $this->executeSuccess = null;
       $this->errorMsg = '';
       $this->succesMsg = '';
       $this->rowCount = null;
     }

     public function prepare() {
       $this->pdoStatement = $this->pdo->prepare($this->sql);
     }

     public function execute() {
       $this->executeSuccess = $this->pdoStatement->execute();
       $this->rowCount = $this->pdoStatement->rowCount();
       $this->errorMsg = '';
       $errorInfo = $this->pdoStatement->errorInfo();
       $this->errorMsg .= 'Error Info : '.$errorInfo[2];
       $this->errorMsg .= ' Error code : '.$this->pdoStatement->errorCode();
     }

     public function getRowCount() {
         return $this->rowCount;
     }

     public function getExecuteSuccess() {
       return $this->executeSuccess;
     }

     public function fetch() {
       $this->dataArray = $this->pdoStatement->fetch(PDO::FETCH_ASSOC);
     }

     public function pdoPrepare() {
       $this->pdo->prepare($this->sql);
     }

     public function getErrorMsg($errorMsg) {
       return $this->errorMsg;
     }

     public function getSql() {
       return $this->sql;
     }

     public function getSuccesMsg($succesMsg) {
       return $this->succesMsg;
     }
   }
 ?>
