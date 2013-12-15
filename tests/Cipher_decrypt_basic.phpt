--TEST--
Crypto\Cipher::decrypt basic usage.
--FILE--
<?php
$key = str_repeat('x', 32);
$iv = str_repeat('i', 16);

$ciphertext = pack("H*", '8f8853a1685607133cb9ee0fc7a5b8a57103935cbc39ea680def0db0767e954e');

$cipher = new Crypto\Cipher('aes-256-cbc');

// init first
echo $cipher->decrypt($ciphertext, $key, $iv) . "\n";

?>
--EXPECT--
aaaaaaaaaaaaaaaa
