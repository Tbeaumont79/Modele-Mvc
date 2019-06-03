<?php
  class CtrlSignIn extends Ctrl{

    private $content;
    private $actionLogin;

    public function __construct() {
      $this->content = '';
      $this->actionLogin = null;
    }

    public function start() {
      if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $this->actionLogin = new ActionSignIn($username,$password);
        $this->actionLogin->signIn();
        $this->content = $this->actionLogin->getMsg();
      } else {
        $form = new ViewLoginForm();
        $form->createView();
        $this->content = $form->getHtmlElement();
      }
      $this->view = new ViewSignIn($this->content);
      $this->setViewData('sign In', 'sign In');
      $this->view->buildPage();

    }
  }
 ?>
