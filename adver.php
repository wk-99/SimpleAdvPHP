<?php
  include_once 'config/init.php';
  $template = new Template('templates/adver-view.php');
  $showAll = new Display();
  $template->showAll = $showAll->getAll();
  echo $template;
?>