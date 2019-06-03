<?php
/**
 * Cette class initie la vue récupère les données de la vue et lance l'action
 * register et qui selon l'action affiche une autre vue
 **/

 class CtrlSignUp extends Ctrl {

   private $actionRegister;
   private $content;

   public function __construct() {
     $this->actionRegister = null;
     $this->content = '';
   }

   public function start() {
     // vérifié si formulaire rempli ou non ?
     if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
       // si formulaire rempli : filter data
       $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
       $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
       $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
       // and call ActionRegister avec valeur de formulaire.
       $this->actionRegister = new ActionSignUp($username, $password, $email);
       $this->actionRegister->signUp();
       $this->content = $this->actionRegister->getMsg();
     } else {
      // si form non rempli affiche formulaire
       $form = new ViewFormSignUp();
       $form->createView();
       $this->content = $form->getHtmlElement();
     }
     $this->view = new ViewSignUp($this->content);
     $this->setViewData('sign Up','Sign Up !');
     $this->view->buildPage();
   }
}
?>
