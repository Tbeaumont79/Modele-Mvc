<?php
  class Ctrl {

    public static function chooseCtrl() {
      switch ($_GET['page']) {
        case 'signIn':
          $ctrl = new CtrlSignIn();
          break;
        case 'signUp':
          $ctrl = new CtrlSignUp();
          break;
        default:
          $ctrl = new CtrlAccueil();
          break;
      }
      return $ctrl;
    }
    protected $view;

    public function __construct() {
      $this->view = null;
    }

    public function getView() {
      return $this->view->getHtmlElement();
    }

    public function setViewData($title, $baliseTitle = null) {
      $this->view->setTitle($title);
      if ($baliseTitle != null) {
        $this->view->setBaliseTitle($baliseTitle);
      }
    }
  }
 ?>
