<?php
  require_once('lib/ConnectToBdd.php');
  require_once('lib/ActionSignUp.php');
  require_once('view/View.php');
  require_once('view/ViewSignUp.php');
  require_once('view/ViewFormSignUp.php');
  require_once('model/statement/Sqlstatement.php');
  require_once('model/statement/SqlStatementActionCheckBeforeRegister.php');
  require_once('model/statement/SqlStatementActionSignUp.php');
  require_once('ctrl/Ctrl.php');
  require_once('ctrl/CtrlSignUp.php');

  $ctrl = new CtrlSignUp();
  $ctrl->start();
  echo $ctrl->getView();
 ?>
