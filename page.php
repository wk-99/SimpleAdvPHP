<?php
  include_once 'config/init.php';
  $template = new Template('templates/page-view.php');
  $showByID = new Display();
  $template->showByID = $showByID->getByID($_GET['id']);
  echo $template;
?>