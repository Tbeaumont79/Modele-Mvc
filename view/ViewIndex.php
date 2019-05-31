<?php
  class ViewIndex extends View {

    private $content;
    private $baliseH1;

    public function __construct($content) {
      $this->initRecordViewData($content);
      $this->$baliseH1 = '';
    }

    public function setBaliseH1($baliseH1) {
      $this->$baliseH1 = $baliseH1;
    }

    public function buildContentPage() {
      $this->htmlElement .= '<h1>'.$this->$baliseTitle.'</h1>';
      $this->htmlElement .= '<section>';
      $this->htmlElement .= '<div id="content">';
      $this->htmlElement .= ' '.$this->content.'';
      $this->htmlElement .= '</div>';
      $this->htmlElement .= '</section>';
    }

    public function initRecordViewData($content) {
      $this->content = $content;
    }
  }
?>
