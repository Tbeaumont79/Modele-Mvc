<?php
  class ViewIndex extends View {

    private $content;
    private $baliseTitle;

    public function __construct($content) {
      $this->content = $content;
      $this->$baliseTitle = '';
    }

    public function buildContent() {
      $this->htmlElement .= $this->$baliseTitle;
      $this->htmlElement .= '<section>';
      $this->htmlElement .= '<div id="content">';
      $this->htmlElement .= $this->content;
      $this->htmlElement .= '</div>';
      $this->htmlElement .= '</section>';
    }
  }

?>
