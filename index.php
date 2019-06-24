<?php
  require_once('view/View.php');
  require_once('view/ViewIndex.php');
  require_once('ctrl/Ctrl.php');
  require_once('ctrl/CtrlAccueil.php');
  require_once('lib/ConnectToBdd.php');
  require_once('lib/ActionSignIn.php');
  require_once('model/RecordUserData.php');
  require_once('view/ViewSignIn.php');
  require_once('view/ViewLoginForm.php');
  require_once('model/statement/Sqlstatement.php');
  require_once('model/statement/SqlStatementActionSignIn.php');
  require_once('ctrl/CtrlSignIn.php');
  require_once('lib/ActionSignUp.php');
  require_once('view/ViewSignUp.php');
  require_once('view/ViewFormSignUp.php');
  require_once('model/RecordUserData.php');
  require_once('model/statement/SqlStatementActionCheckBeforeRegister.php');
  require_once('model/statement/SqlStatementActionSignUp.php');
  require_once('ctrl/CtrlSignUp.php');
  require_once('view/ViewAbout.php');
  require_once('ctrl/CtrlAbout.php');

  $ctrl = Ctrl::chooseCtrl();
  $ctrl->start();
  echo $ctrl->getView();
 ?>
