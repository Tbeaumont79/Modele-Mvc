<?php
  class CtrlAccueil extends Ctrl{

    public function __construct() {

    }

    public function start() {
      $content = 'Ce site est une représentation de la mise en place du modele mvc';
      $this->view = new ViewIndex($content);
      $this->setViewData('Accueil','Bienvenu sur mon site');
      $this->view->buildPage();
    }
  }
 ?>
