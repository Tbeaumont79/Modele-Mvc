<?php
  class ViewSignUp extends View {

    private $content;
    private $baliseH1;

    public function __construct($content) {
      $this->content = $content;
      $this->baliseH1 = '';
    }

    public function setBaliseH1($baliseH1) {
      $this->baliseH1 = $baliseH1;
    }

    public function buildContentPage() {
      $this->htmlElement .= '<div id="page">';
      $this->htmlElement .= '<h1>'.$this->baliseH1.'</h1>';
      $this->htmlElement .= ''.$this->content.'';
      $this->htmlElement .= '</div>';
    }
  }
 ?>
