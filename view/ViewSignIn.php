<?php
  class ViewSignIn extends View {

    private $content;
    private $baliseTitle;

    public function __construct($content) {
      $this->initRecordViewData($content);
    }

    public function setBaliseTitle($baliseTitle) {
      $this->baliseTitle = $baliseTitle;
    }

    public function buildContentPage() {
      $this->htmlElement .= '<div id="page">';
      $this->htmlElement .= '<h1>'.$this->baliseTitle.'</h1>';
      $this->htmlElement .= ''.$this->content.'';
      $this->htmlElement .= '</div>';
    }
    public function initRecordViewData($content) {
      $this->content = $content;
      $this->baliseTitle = '';
    }
  }
 ?>
