<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
  'templates.path' => '../views'
));

$app->get('/', function() use($app) {
  
  $data = array("message" => "");
  $app->render('index_template.php', $data);

});

$app->post('/', function() use($app) {
  
  $param_encrypt = $app->request()->post('encrypt');
  $param_decrypt = $app->request()->post('decrypt');
  $param_passphrase = $app->request()->post('passphrase');
  $param_string = $app->request()->post('string');
  
  $hc = new \Jibone\HipsterCrypto();  
  
  if($param_encrypt)
    $result = $hc->encrypt($param_passphrase, $param_string);
  
  if($param_decrypt) 
    $result = $hc->decrypt($param_passphrase, $param_string);

  $data = array("message" => $result);
  $app->render('index_template.php', $data);

});

$app->get('/about/', function() use($app) {
  $app->render('about_template.php');
});

$app->run();
