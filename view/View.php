<?php

  class View {

    protected $htmlElement;
    private $title;
    private $baliseTitle;

    public function __construct() {
      $this->htmlElement = '';
      $this->title = '';
      $this->baliseTitle = '';
    }

    public function getBaliseTitle() {
      return $this->baliseTitle;
    }

    public function setBaliseTitle($baliseTitle) {
      $this->baliseTitle = $baliseTitle;
    }

    public function setTitle($title) {
      $this->title = $title;
    }

    public function getTitle() {
      return $this->title;
    }

    public function getHtmlElement() {
      return $this->htmlElement;
    }

    public function buildHeaderPage() {
      $this->htmlElement = '<!DOCTYPE html>';
      $this->htmlElement .= '<html lang="en" dir="ltr">';
      $this->htmlElement .= '<head><meta charset="utf-8">';
      $this->htmlElement .= '<title>'.$this->title.'</title>';
      $this->htmlElement .= '</head><body>';
    }
    public function buildContentPage() {
      $this->htmlElement .= '';
    }

    public function buildFooterPage() {
      $this->htmlElement .= '</body></html>';
    }

    public function buildMenuPage() {
      $menuArray = [
        'index.php?page=index' => 'Accueil',
        'index.php?page=signIn' => 'Sign In',
        'index.php?page=signUp' => 'Sign Up'
      ];
      $this->htmlElement .= '<nav>';
      $this->htmlElement .= '<ul>';
      foreach ($menuArray as $key => $value) {
        $this->htmlElement .= '<li><a href='.$key.'>'.$value.'</a></li>';
      }
      $this->htmlElement .= '</ul>';
      $this->htmlElement .= '</nav>';
    }

    public function buildPage() {
      $this->buildHeaderPage();
      $this->buildMenuPage();
      $this->buildContentPage();
      $this->buildFooterPage();
    }
  }
 ?>
