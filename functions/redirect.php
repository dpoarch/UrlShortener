<?php
	require_once 'functions.php';

  $functions = new functions();

  if (isset($_GET['secret']))
  {
  	$uniqueCode = $_GET['secret'];
    $addClicks = $functions->addClicks($uniqueCode);
  
  	$orignalUrl = $functions->getOrignalURL($uniqueCode);
  	header("Location: {$orignalUrl}");
  	die();
  }

  header("Location: index.php");
  die();
?>
