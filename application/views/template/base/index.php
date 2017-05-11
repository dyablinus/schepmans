<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

 <link rel="stylesheet" media="screen" href="<?= base_url ("/node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Alegreya">
    <link rel="stylesheet" href="<?= base_url("node_modules/font-awesome/css/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url ("assets/css/navbar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/contact.css") ?>">
    <link rel="stylesheet"  href="<?= base_url("/assets/css/about.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/twitter.css")?>">
    <link rel="stylesheet" href="<?= base_url ("assets/css/homepage.css") ?>">
    
  <title>Appland - One Page Parallax</title>
 
</head>
<body>
     <header>   
<?php  $this->load->view('template/base/nav'); ?> 
   </header>

<?= $view_content ?> 
  
  
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


 <script src="<?= base_url ("/node_modules/jquery/dist/jquery.js") ?>"></script>
 <script src="<?= base_url ("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
  <script src="<?= base_url ("/node_modules/bootstrap/js/carousel.js") ?>"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</body>
</html>
       
