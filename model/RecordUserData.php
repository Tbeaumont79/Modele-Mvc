  <?php
//record pour la table register
  class RecordUserData {
    const USERNAME = 'USERNAME';
    const PASSWORD = 'PASSWORD';
    const EMAIL = 'EMAIL';

    private $id;
    private $username;
    private $password;
    private $email;

    public function __construct($username = null, $password = null, $email = null) {
      $this->id = null;
      $this->initRecord($username, $password, $email);
    }

    public function getId() {
      return $this->id;
    }

    public function setUsername($username) {
      $this->username = $username;
    }

    public function getUsername() {
      return $this->username;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function getPassword() {
      return $this->password;
    }

    public function getHashPassword() {
      return password_hash($this->getPassword(), PASSWORD_BCRYPT);
    }

    public function getEmail() {
      return $this->email;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function checkPassword($passWordToVerify, $hashedPassword) {
      if (password_verify($passWordToVerify, $hashedPassword)) {
        return true;
      } else {
        return false;
      }
    }

    public function initRecord($username, $password, $email) {
      $this->setUsername($username);
      $this->setPassword($password);
      $this->setEmail($email);
    }

    public function initRecordFromArray(array $registerRecord) {
        $this->initRecord(
          $registerRecord[self::USERNAME],
          $registerRecord[self::PASSWORD],
          $registerRecord[self::EMAIL]
        );
    }
  }
 ?>
