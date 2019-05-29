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
      $this->htmlElement .= '<form class="" action="#" method="post">';
      $this->htmlElement .= '<input type="text" name="username" value="">';
      $this->htmlElement .= '<input type="password" name="password" value="">';
      $this->htmlElement .= '<input type="text" name="email" value="">';
      $this->htmlElement .= '<button type="submit" name="button"></button>';
      $this->htmlElement .= '</form>';
    }
  }
 ?>
