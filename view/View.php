<?php

  class View {

    protected $htmlElement;

    public function __construct() {
      $this->htmlElement = '';
    }

    public function getHtmlElement() {
      return $this->htmlElement;
    }

  }

 ?>
