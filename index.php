<?php
  require_once('view/View.php');
  require_once('view/ViewIndex.php');
  require_once('ctrl/Ctrl.php');
  require_once('ctrl/CtrlAccueil.php');

  $ctrl = new CtrlAccueil();
  $ctrl->start();
  echo $ctrl->getView();

 ?>
