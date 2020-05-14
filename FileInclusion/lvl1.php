<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Resources/hmbct.png" />
    <title>XPSec Lab - File Inclusion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/prism.css">
    <link rel="stylesheet" href="../assets/css/hack.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/dark.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/site.css?t=1490883343124">
    <link rel="stylesheet" href="../assets/css/site-dark.css?t=1490883343124">
  </head>
     <body class="hack dark">
    <div class="main container">
      <p><a href="fileinc.html">&laquo; Voltar</a></p>
<pre> __   _______   _____             _           _     
 \ \ / /  __ \ / ____|           | |         | |    
  \ V /| |__) | (___   ___  ___  | |     __ _| |__  
   &gt; &lt; |  ___/ \___ \ / _ \/ __| | |    / _` | '_ \ 
  / . \| |     ____) |  __/ (__  | |___| (_| | |_) |
 /_/ \_\_|    |_____/ \___|\___| |______\__,_|_.__/ 
                                   xpsecsecurity.com                
                                                    </pre>
      <h2>XPSec Lab</h2>
      <p>File Inclusion - Level 1</p>
<hr>
    </div>
<center>
      <a href=lvl1.php?file=1.php><button class="btn btn-primary">Registro</button></a>
      <a href=lvl1.php?file=2.php><button class="btn btn-primary">Cursos</button></a>
      </div>
      
      <?php
        echo "<br><br>";
        
        if (isset( $_GET[ 'file' ]))        
        {
          @include($_GET[ 'file' ]);
          echo"<div align='center'>".$_GET[ 'file' ]."</div> ";       
        }
      ?>
   </body>
</html>

