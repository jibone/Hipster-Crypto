<?php
require __DIR__ .'/../vendor/autoload.php';

class HipsterCryptoTest extends PHPUnit_Framework_TestCase {

  private $secret_message = "Grumpy wizards make toxic brew for the evil Queen and Jack.";
  private $secret_key = "this is secret";

  private $encrypted_message = "vegan coffee Ray-Ban post-rock film art gluten-free bespoke film flannel craft synth cupcake film foodtrucks vegan cardigan Lomo bespoke synth vegan denim party wayfarers DIY typewriter gluten-free flannel 8-bit Pinterest flannel banjo film street foodtrucks tofu foodtrucks mixtape 90s eco mustache Pinterest ironic banjo film Pinterest post-punk wayfarers craft 70s craft Pitchfork mustache 70s plaid Vines mustache Lomo Helvetica hashtag foodtrucks film cupcake tofu 80s tofu Pinterest indie bespoke denim sustainable Portland craft denim Helvetica Pitchfork bespoke typewriter foodtrucks wayfarers 80s typewriter indie synth cardigan mustache 90s green foodtrucks 70s flannel post-rock bespoke mustache artisan banjo biodiesel banjo indie post-punk craft post-rock Helvetica punk craft Lomo coffee tofu vinyl banjo flannel tofu biodiesel tofu cupcake gluten-free hoodie bespoke . .";

  public function testEncrypt() {
    $hc = new \Jibone\HipsterCrypto();
    $result = $hc->encrypt($this->secret_key, $this->secret_message);
    $this->assertEquals($result, $this->encrypted_message);
  }
  
  public function testDecrypt() {
    $hc = new \Jibone\HipsterCrypto();
    $result = $hc->decrypt($this->secret_key, $this->encrypted_message);
    $this->assertEquals($result, $this->secret_message);
  }

}
