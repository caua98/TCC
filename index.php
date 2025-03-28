<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Usbwebserver</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head> 	
<body>
	<div id="container">
		<img id="header" src="images/header.png">
		<ul id="menu">
			<li>
				<div id="menuleft"></div>
				<a id="menua" href="http://www.usbwebserver.com">
					USBWebserver.com
				</a>
				<div id="menuright"></div>
			</li>
			<li>
				<div id="menuleft"></div>
				<a id="menua" href="http://www.border-it.nl">
					Border-IT
				</a>
				<div id="menuright"></div>
			</li>
		</ul>
		<div id="topcontent"></div>
		<div id="content">
			<div id="contentleft">

			<h1>USBWebserver V8.6</h1>
			<p>
				<ul>
					<li>14 different languages</li>
					<li>DPI bug fixed</li>
					<li>Php 5.4.17</li>
					<li>Httpd 2.4.6</li>
					<li>PhpMyAdmin 4.0.4.2</li>
					<li>MySQL 5.6.13</li>
				</ul>
			</p>
			<h1>PHP 5.4.17 info</h1>
			<?php
				ob_start();
				phpinfo();
				$i = ob_get_contents();
				ob_end_clean();
				
				echo ( str_replace ( "module_Zend Optimizer", "module_Zend_Optimizer", preg_replace ( '%^.*<body>(.*)</body>.*$%ms', '$1', $i ) ) ) ;

			?>
			
			</div>
			<a href="#" id="banner"></a>
			<br style="clear:both">
		