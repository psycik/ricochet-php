<?php

require __DIR__ . '/../src/bootstrap.php';

$aliceStr = "-----BEGIN PRIVATE KEY-----
MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBAMWSPesEAAjLAjFp
KFPiRIE0u04iLt0bIp3bw0xyTb0zuhYviSjY762U68IIG4/s6kPEKGuqe2rfK3vD
PEp8824/tTx9895frNs4I0nb9Nk1s2PP8Rm3uedMGn4hAZMXAvxY5aPI9gDr5QDI
URDTKRM8RpBGn1gr9vkEPQJw8tOHAgMBAAECgYARmXtmig6uudbSK/nprwhHMjlV
NnpSO+6TfVYiYzRFnGwBOe7P8rM3FUMDH9HEumgL7Vdkb+VamdK3zaZ7RDIzAcDD
R+OrO26Y1vyAa1eBX9w+k0EMFra8mKzsONEHYMIPJjjFmZhBsB+3mFD9qihWNpHH
lpPoHZLTX32/OBT3wQJBAPai4Jp1mgemDMDvaPlfqFPK8AWPlxAtSnmx3x7DulKe
75dns9Todip2olRgN3cr0fDRZ9hM3aWtPAt2ZXBm57cCQQDNEn0vwG6nwSjnZsVx
A0/03kKGQOoQlEXZGFXKJUgoODQInwIt2rTsV9eRHqFEkq6H4lbPKqG/9EaPqR1R
DFKxAkAIDbF/2a856LYp5qdq3TDF666Cv/mS0afI6YH7ozCGWiJAs2Yv4ZdaM52B
W9Lz1T55upzFd10Vd96qESemz/VpAkAI/9K2kb9JZVSiMwRfHUIZANfyhE7BQ4B9
MnAxWsl72luONUwnLv3ZkVFIcQuqsrUuCWS92qUWg2XFUCqVL/FBAkEA0v7qMq7f
oWmjVu7HYpVUCPI87t9fZzo/GZ+AAKPhFLpLEbnDpvS8yau0bVxM9Zk/p9/BTGUM
coLqkASQC28sJg==
-----END PRIVATE KEY-----";

$clientCookie = 'DEFADEFADEFADEFA';
$serverCookie = 'ABC1ABC1ABC1ABC1';

$private = new \Ricochet\Key\PrivateKey($aliceStr);
$public = $private->getPublicKey();

$clientHost = $public->getOnion();
$serverHost = 'bvs43bfavogohkqz';

$proof = hash_hmac('sha256', $clientHost . $serverHost, $clientCookie . $serverCookie, true);
echo "Proof: ".bin2hex($proof).PHP_EOL;
$pk = openssl_pkey_get_private($aliceStr);
$pub = openssl_pkey_get_details($pk)['key'];

$sigout = '';
$s1 = openssl_sign($proof, $sigout, $pk, OPENSSL_ALGO_SHA256);
echo "signature: ".bin2hex($sigout).PHP_EOL;

var_dump(openssl_verify($proof, $sigout, $pub, OPENSSL_ALGO_SHA256) == 1);