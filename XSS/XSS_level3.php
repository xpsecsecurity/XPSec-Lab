<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Resources/hmbct.png" />
    <title>XPSec Lab - Cross-Site Scripting</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/prism.css">
    <link rel="stylesheet" href="../assets/css/hack.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/dark.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/site.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/site-dark.css?t=1490883343124">
  </head>
     <body class="hack dark">
    <div class="main container">
      <p><a href="xssmainpage.html">&laquo; Voltar</a></p>
<pre> __   _______   _____             _           _     
 \ \ / /  __ \ / ____|           | |         | |    
  \ V /| |__) | (___   ___  ___  | |     __ _| |__  
   &gt; &lt; |  ___/ \___ \ / _ \/ __| | |    / _` | '_ \ 
  / . \| |     ____) |  __/ (__  | |___| (_| | |_) |
 /_/ \_\_|    |_____/ \___|\___| |______\__,_|_.__/ 
                                   xpsecsecurity.com                
                                                    </pre>
      <h2>XPSec Lab</h2>
      <p>Cross-Site Scripting - Level 3</p>
<hr>
    </div>
<center>
   <form class="form" method="GET" action="" name="form">
    <label for="username">Seu Nome:</label>
    <input id="username" type="text" name="username" placeholder="" class="form-control">
<br><br>
		<input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit">
<br>
	</form>
	</div>
<?php 
if (isset($_GET["username"])) {
	$user = preg_replace("/<(.*)[S,s](.*)[C,c](.*)[R,r](.*)[I,i](.*)[P,p](.*)[T,t]>/i", "", $_GET["username"]);
	echo "Seu nome é "."$user";
}
 ?>


</body>
</html>
