<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  die();
}
include_once 'config/init.php';


$template = new Template('templates/add-view.php');
$template->session = '<i class="fa fa-user"></i> '.$_SESSION['username'];
$edit = new Display();
$template->getenum = $edit->get_enum_values();


if (isset($_POST['submit'])) {
  
  $adver['name']  = trim(strip_tags($_POST['name']));
  $adver['title'] = trim(strip_tags($_POST['title']));
  $adver['category'] = $_POST['category'];
  $adver['price'] = trim(strip_tags($_POST['price']));
  $adver['body']  = trim(strip_tags($_POST['body']));
  $adver['foto']  = $_FILES['upload']['name'][0];
  $adver['data']  = $_POST['date'];
  $adver['data_end']  = $_POST['date_end'];
  $adver['email'] = trim(strip_tags($_POST['email']));
  $adver['phone'] = trim(strip_tags($_POST['tel']));

  try {
    $add = new Adver($adver);
    $upload = new Image();
  } catch (Exception $exc) {
      echo $exc->getMessage();
  }
}
echo $template;
?>