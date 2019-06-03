<?php
  require_once('lib/ConnectToBdd.php');
  require_once('lib/ActionSignIn.php');
  require_once('view/View.php');
  require_once('view/ViewSignIn.php');
  require_once('view/ViewLoginForm.php');
  require_once('model/statement/Sqlstatement.php');
  require_once('model/statement/SqlStatementActionSignIn.php');
  require_once('ctrl/Ctrl.php');
  require_once('ctrl/CtrlSignIn.php');

  $ctrl = new CtrlSignIn();
  $ctrl->start();
  echo $ctrl->getView();
 ?>
