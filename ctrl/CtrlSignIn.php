<?php
  class CtrlSignIn extends Ctrl{

    private $content;

    public function __construct() {
      $this->content = '';
    }
    
    public function start() {
      $this->content = '';

      if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $login = new ActionSignIn($username,$password);
        $login->signIn();
        $login->getMsg();
      } else {
        $form = new ViewLoginForm();
        $form->createForm();
        $this->content = $form->getHtmlElement();
      }
      //view sigin
      $this->view = new ViewSignIn($this->content);
      $this->view->setViewData('sign In', 'sign In');
    }

  }
 ?>
