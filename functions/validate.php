<?php
  session_start();

  require_once 'functions.php';

  $errors = false;
  $insertCustom = false;

  $functions = new functions();


  if (isset($_POST['url']) && !$errors) {

    $orignalURL = $_POST['url'];

  	if (!$insertCustom) {
  		if ($uniqueCode = $functions->validateUrlAndReturnCode($orignalURL)) {
  			$_SESSION['success'] .= ($_SESSION['success'] == "") ? $functions->generateLinkForShortURL($uniqueCode) : "," . $functions->generateLinkForShortURL($uniqueCode);
  		} else {
  			$_SESSION['error'] = "There was a problem. Invalid URL, perhaps?";
  		}
  	} else {
  		if ($functions->returnCustomCode($orignalURL, $customCode)) {
  			$_SESSION['success'] = $functions->generateLinkForShortURL($customCode);
  		} else {
  			header("Location: ../index.php?error=inurl");
  			die();
  		}
  	}

  }

  header("Location: ../generated.php");

?>
