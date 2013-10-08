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
        <form class="" method="post" role="form">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <textarea class="form-control input-lg" name="string" rows="6" placeholder="Your message"><?php echo $message; ?></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-8">
              <input type="text" class="form-control input-lg" name="passphrase" id="passphraseInput" placeholder="Enter Passphrase" class="">
            </div>
            <div class="col-xs-6 col-md-2">
              <button type="submit" name="encrypt" value="encrypt" class="btn btn-success btn-lg btn-block">Encrypt</button>
            </div>
            <div class="col-xs-6 col-md-2">
              <button type="submit" name="decrypt" value="decrypt" class="btn btn-danger btn-lg btn-block">Decrypt</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- body container ends -->

    <!-- writeup container start -->
    <div class="writeup-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-7">
          
            <?php require '../views/writeup/what_is_this.php'; ?>
          
          </div>
          <div class="col-xs-12 col-sm-4 col-md-5">
          
            <?php require '../views/writeup/how_do_i_use_this.php'; ?>
          
          </div>
        </div>
      </div>
    </div><!-- writeup container ends -->

    <?php require '../views/partials/footer_partial.php' ?>

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-26351347-2', 'jshamsul.com');
      ga('send', 'pageview');
    </script>

  </body>
</html>
