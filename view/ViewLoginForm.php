<?php

  class ViewLoginForm {

    private $htmlElement;

    public function __construct() {
      $this->htmlElement = '';
    }

    public function getHtmlElement() {
      return $this->htmlElement;
    }

    public function createForm() {
      $this->htmlElement .= '<form class="formulaire" action="#" method="POST">';
      $this->htmlElement .= '<p>username</p><input type="text" name="username" value="">';
      $this->htmlElement .= '<p>password</p><input type="password" name="password" value="">';
      $this->htmlElement .= '<button type="submit" name="button">submit</button></form>';
    }
  }
 ?>
