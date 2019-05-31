<?php
  class Ctrl {

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
        $this->view->setBaliseH1($baliseTitle);
      }
    }
  }
 ?>
