<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php 
			if(!isset($TITLE)){
				echo "Default Title";
			}
			else{
				echo $TITLE; 
			}
		?></title>

		<base href="http://nova.it.rit.edu/~mjl7592/539/project3/A/">
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/text.css" />
		<link rel="stylesheet" href="css/960.css" />
		<link rel="stylesheet" href="css/chosen.css" />
		<link href="js/jquery.shadow/jquery.shadow.css" rel="stylesheet">

		<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container_12">