<?php

namespace Jibone;

class HipsterCrypto {

  private $dictonary = array(
    "a" => "vinyl",       "b" => "lo-fi",       "c" => "cupcake",
    "d" => "foodtrucks",  "e" => "8-bit",       "f" => "YOLO",
    "g" => "artisan",     "h" => "hashtag",     "i" => "Pitchfork",
    "j" => "Tumblr",      "k" => "flannel",     "l" => "plaid",
    "m" => "art",         "n" => "punk",        "o" => "party",
    "p" => "sustainable", "q" => "eco",         "r" => "synth",
    "s" => "green",       "t" => "Portland",    "u" => "polaroid",
    "v" => "Instagram",   "w" => "Vines",       "x" => "Ray-Ban",
    "y" => "wayfarers",   "z" => "post-rock",
    
    "A" => "ironic",      "B" => "post-punk",   "C" => "post-modern",
    "D" => "chic",        "E" => "coffee",      "F" => "indie",
    "G" => "mixtape",     "H" => "Lomo",        "I" => "analog",
    "J" => "retro",       "K" => "biodiesel",   "L" => "organic",
    "M" => "vegan",       "N" => "craft",       "O" => "cardigan",
    "P" => "hoodie",      "Q" => "bespoke",     "R" => "Helvetica",
    "S" => "DIY",         "T" => "mustache",    "U" => "film",
    "V" => "Pinterest",   "W" => "typewriter",  "X" => "70s",
    "Y" => "80s",         "Z" => "90s",

    "1" => "street",      "2" => "tofu",        "3" => "banjo",
    "4" => "ukulele",     "5" => "VHS",         "6" => "swag",
    "7" => "fixie",       "8" => "bike",        "9" => "gluten-free",
    "0" => "denim",       "+" => "XX",          "/" => "occupy",
    "=" => "."
  );

  // XX, occupy

  private $method = "AES-256-CBC";
  private $key = "";
  private $iv = "";

  public function __construct() {
  
  }

  public function encrypt($key, $string) {
    $this->key = hash('sha256', $key);
    $this->iv = substr($this->_hex2bin(md5($key)), 0, 16);

    $result = openssl_encrypt($string, $this->method, $this->key, 0, $this->iv);
    $result = base64_encode($result);
    
    // hipsterlize output string
    $result_split = str_split($result);
    $c = count($result_split);
    $output = "";
    for($i = 0; $i < $c; $i++) {
      if($i != 0) {
        $output = $output . " ";
      }
      $output = $output . $this->dictonary[$result_split[$i]];
    }

    return $output;
  }

  public function decrypt($key, $string) {

    // unhipsterize string
    $string_array = explode(" ", $string);
    $c = count($string_array);
    $base64 = "";
    for($i = 0; $i < $c; $i++) {
      $base64 = $base64 . array_search($string_array[$i], $this->dictonary);
    }

    $this->key = hash('sha256', $key);
    $this->iv = substr($this->_hex2bin(md5($key)), 0, 16);
    $output = openssl_decrypt(base64_decode($base64), $this->method, $this->key, 0, $this->iv);
    
    return $output;
  }

  private function _hex2bin($hexdata) { 
    $bindata=""; 

    for ($i=0;$i<strlen($hexdata);$i+=2) { 
      $bindata.=chr(hexdec(substr($hexdata,$i,2))); 
    } 
    return $bindata; 
  }

}
