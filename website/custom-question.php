<?php session_start();
include("dbconnect.php");

# Recieves information sent through by ajax in the GET array
$id = $_GET['id'];
$array = $_GET['filter'];


if ($id == 'clear') {
  if(isset($_SESSION['levelID'])) {
    unset($_SESSION['levelID']);
  }
  if(isset($_SESSION['yearID'])) {
    unset($_SESSION['yearID']);
  }
  if(isset($_SESSION['tagID'])) {
     unset($_SESSION['tagID']);
  }
} elseif ($id == 'all') {
  if(isset($_SESSION[$array])) {
    unset($_SESSION[$array]);
  }
} else {
  include('session.php');
}

include('custom-question-display.php'); ?>
