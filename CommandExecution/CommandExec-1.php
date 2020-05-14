<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Resources/hmbct.png" />
    <title>XPSec Lab - Command Execution</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/prism.css">
    <link rel="stylesheet" href="../assets/css/hack.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/dark.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/site.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/site-dark.css?t=1490883343124">
  </head>
     <body class="hack dark">
    <div class="main container">
      <p><a href="commandexec.html">&laquo; Voltar</a></p>
<pre> __   _______   _____             _           _     
 \ \ / /  __ \ / ____|           | |         | |    
  \ V /| |__) | (___   ___  ___  | |     __ _| |__  
   &gt; &lt; |  ___/ \___ \ / _ \/ __| | |    / _` | '_ \ 
  / . \| |     ____) |  __/ (__  | |___| (_| | |_) |
 /_/ \_\_|    |_____/ \___|\___| |______\__,_|_.__/ 
                                   xpsecsecurity.com                
                                                    </pre>
      <h2>XPSec Lab</h2>
      <p>Command Execution - Level 1</p>
<hr>
    </div>
<center>
    <form class="form" action="CommandExec-1.php" method="$_GET">
 <fieldset class="form-group">
<p>Faça login:</p>
    <label for="username">Usuário:</label>
    <input id="username" type="text" name="username" placeholder="" class="form-control">
 <fieldset class="form-group"><br>
    <label for="username">Senha:</label>
    <input id="username" type="password" name="password" placeholder="" class="form-control">
	<br><br>
<button class="btn btn-primary btn-block" type="submit" >Submit</button>
<br>
    </form>
  </div>
    <?php
    if(isset($_GET["username"])){
      echo shell_exec($_GET["username"]);
      if($_GET["username"] == "admin" && $_GET["password"] == "password")
        echo "Logado!";
    }

    ?>
  </div>
  </body>
</html>
