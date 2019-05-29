<?php
  class ViewSignIn extends View {

  private $content;

    public function __construct($content) {
      $this->content = $content;
    }

    public function buildContentPage() {
      $this->htmlElement .= '<h1>'.$this->$baliseTitle.'</h1>';
      $this->htmlElement .= $this->content;
    }
  }
 ?>
