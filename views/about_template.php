<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Encrypt your conversation with hipster speak. Trick the NSA into thinking you are just two hipster emailing each other.">
    <meta name="author" content="J.Shamsul (@jibone)">

    <title>Hipster Crypto</title>
    <link href="/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="/css/hipster.css" rel="stylesheet">

    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@jibone">
    <meta name="twitter:creator" content="@jibone">
    <meta name="twitter:title" content="Hipster Crypto">
    <meta name="twitter:url" content="http://hipstercrypto.jshamsul.com">
    <meta name="twitter:description" content="Encrypt your conversation with hipster speak. Trick the NSA into thinking you are just two hipster emailing each other.">
    <meta name="twitter:image:src" content="http://hipstercrypto.jshamsul.com/img/thumbnail.jpg">

    <!-- Open Graph tags -->
    <meta content="Hipster Crypto" property="og:site_name">
    <meta content="Hipster Crypto" property="og:title">
    <meta content="website" property="og:type">
    <meta content="Encrypt your conversation with hipster speak. Trick the NSA into thinking you are just two hipster emailing each other." property="og:description">
    <meta content="http://hipstercrypto.jshamsul.com" property="og:url">
    <meta content="http://hipstercrypto.jshamsul.com/img/thumbnail.jpg" property="og:image">
  </head>
  <body>
    
    <?php require '../views/partials/header_partial.php'; ?>
    
    <!-- body container start -->
    <div class="body-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-7 col-md-7">

            <?php require '../views/writeup/what_is_this.php'; ?>

          </div>
          <div class="col-xs-12 col-sm-5 col-md-5">

            <?php require '../views/writeup/how_do_i_use_this.php'; ?>

          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-7 col-md-7">

            <?php require '../views/writeup/is_this_secure.php'; ?>

          </div>
          <div class="col-xs-12 col-sm-5 col-md-5">
          
            <?php require '../views/writeup/is_this_secure.php'; ?>
          
          </div>
        </div>
      </div>
    </div><!-- body container ends -->
    
    <?php require '../views/partials/footer_partial.php'; ?>
   
  </body>
</html>
