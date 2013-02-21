
<?php
    $titles = array(
       'contact' => 'Contact me',
       'home' => 'Welcome to my page',
       '404' => 'Where are you going?'
     );

?>
<!doctype html>
<html >

    <head>
       <title>?php echo $titles[$page]; ?></title>
       <link href="css/main.css" rel='stylesheet'>
       <link href="css/<?php echo $page; ?>.css" rel='stylesheet'/>

    </head>

    <body>