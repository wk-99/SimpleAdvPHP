<?php
  include_once 'config/init.php';
  $template = new Template('templates/home.php');
  $last = new Display();
  $template->last = $last->last();
  echo $template;
?>