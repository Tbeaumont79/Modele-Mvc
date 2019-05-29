<?php
  class CtrlSignIn extends Ctrl{

    public function __construct() {
//link  to action login
    }
    public function start() {
      $form = new ViewLoginForm();
      $form->createForm();


    }

  }
 ?>
