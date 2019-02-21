<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    die();
  }
  include_once 'config/init.php';

  $template = new Template('templates/your-view.php');
  $template->session = '<i class="fa fa-user"></i> '.$_SESSION['username'];
  $showAll = new Display();
  $template->showAll = $showAll->getByName();

  if (isset($_GET['id'])) {
    $showAll->delete($_GET['id']);
    header('Location: your.php');
  }
  echo $template;
?>