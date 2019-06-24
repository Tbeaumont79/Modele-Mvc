<?php
  class ViewSignIn extends View {

    public function __construct($content) {
      $this->initRecordViewData($content);
    }

    public function buildContentPage() {
      $this->htmlElement .= '<div id="page">';
      $this->htmlElement .= '<h1>'.$this->baliseTitle.'</h1>';
      $this->htmlElement .= ''.$this->content.'';
      $this->htmlElement .= '</div>';
    }
  }
 ?>
