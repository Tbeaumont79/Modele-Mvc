<?php
  class ViewIndex extends View {

    public function __construct($content) {
      $this->initRecordViewData($content);
    }

    public function buildContentPage() {
      $this->htmlElement .= '<h1>'.$this->baliseTitle.'</h1>';
      $this->htmlElement .= '<section>';
      $this->htmlElement .= '<div id="content">';
      $this->htmlElement .= ' '.$this->content.'';
      $this->htmlElement .= '</div>';
      $this->htmlElement .= '</section>';
    }
  }
?>
