<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  die();
}
include_once 'config/init.php';


$template = new Template('templates/edit-view.php');
$edit = new Display();
$template->session = '<i class="fa fa-user"></i> '.$_SESSION['username'];
$template->edit = $edit->getByID($_GET['id']);
$template->getenum = $edit->get_enum_values();


if(isset($_POST['submit']) AND $_POST['submit'] == "edit" ){

  $adver['id']  = $_GET['id'];
  $adver['name']  = trim(strip_tags($_POST['name']));
  $adver['title'] = trim(strip_tags($_POST['title']));
  $adver['category'] = $_POST['category'];
  $adver['price'] = trim(strip_tags($_POST['price']));
  $adver['foto']  = $_POST["foto"] ? $_POST["foto"] : $_FILES['upload']['name'][0];
  $adver['body']  = trim(strip_tags($_POST['body']));
  $adver['data']  = $_POST['date'];
  $adver['data_end']  = $_POST['date_end'];
  $adver['email'] = trim(strip_tags($_POST['email']));
  $adver['phone'] = trim(strip_tags($_POST['tel']));

  if (!file_exists('uploads/'.$adver["foto"])) {
    $upload = new Image();
  }
  $edit->update($adver);
}


if (isset($_POST['submit']) AND $_POST['submit'] == "delete" ) {

  $filePath  = 'uploads/'.$_POST["foto"];

  if (file_exists($filePath)) {
    unlink($filePath);
    $edit->deleteImg($_GET['id']);
    header('Location: edit?id='.$_GET['id']);
 }
}
echo $template;
?>