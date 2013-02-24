<?php
  $page = $_GET['page'];
  //echo $page;
  $path = "pages/" .$page . '.php';

  if (!file_exists ($path) ) {
  	$page = '404';
  	$path = 'pages/404.php';


  }

  
  include 'include/header.php';
  include $path;
  include 'include/footer.php';

?>