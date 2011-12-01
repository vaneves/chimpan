<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>	<title>Error 404 - Page Not Found</title>	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo charset ?>">	<style type="text/css">		body		{			font-family: arial;			font-size: 14px;			margin: 0;		}		p		{			margin: 0;			padding: 0;		}		h1 		{			margin: 0;			margin-bottom: 5px;			padding: 0;			font-size: 2em;			color: #8B7355;		}		h2		{			margin: 0;			font-size: 1em;		}		.header, .footer		{			background: #EEE8AA;			padding: 15px;			border-bottom: 5px solid #999;		}		.code		{			padding: 15px;			background: #EEE;		}		.footer		{			border-top: 5px solid #999;			border-bottom: 0;		}		.code pre, .code .pre		{			background: #FFF;			font-family: monospace;			font-size: 1.2em;			padding: 15px;			margin: 10px;			border: solid 1px #CCC;			-webkit-border-radius: 10px;			-moz-border-radius: 10px;			border-radius: 10px;		}	</style></head><body>	<div class="header">		<h1>Error 404 - Page Not Found</h1>		<p><b>Message:</b> <?php echo $error->getMessage() ?></p>	</div>	<div class="code">		<h2>Details:</h2>		<div class="pre"><?php echo $error->getDetails() ?>		</div>		<h2>File:</h2>		<pre><?php echo $error->getFile() ?>		</pre>		<h2>Trace:</h2>		<pre><?php echo $error->getTraceAsString() ?>		</pre>	</div>	<div class="footer">		<p>Trilado 2</p>	</div></body></html>