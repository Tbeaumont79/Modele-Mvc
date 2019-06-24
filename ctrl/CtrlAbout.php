<?php
  class CtrlAbout extends Ctrl{

    public function __construct() {

    }

    public function start() {
      $content = 'Je suis Thibault un développeur web junior étudiant en BTS SNIR';
      $this->view = new ViewAbout($content);
      $this->setViewData('About','About');
      $this->view->buildPage();
    }
  }
 ?>
