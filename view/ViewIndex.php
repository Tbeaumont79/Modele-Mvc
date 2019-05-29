<?php
  class ViewIndex extends View {

    private $content;

    public function __construct($content) {
      $this->content = $content;
    }

    public function buildContent() {
      $this->htmlElement .= '';
    }
  }

?>
