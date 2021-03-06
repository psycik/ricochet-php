<?php

namespace Ricochet\Key;


use Base32\Base32;

class PublicKey
{
    /**
     * @var resource
     */
    private $public;

    /**
     * @var string
     */
    private $pem;

    /**
     * PublicKey constructor.
     * @param $key - X509 cert. resource, file path to key, or PEM formatted public key.
     */
    public function __construct($key)
    {
        if (is_resource($key)) {
            if (get_resource_type($key) !== '') {
                throw new \RuntimeException();
            }
            $pem = openssl_x509_parse($key);
            $subjectKey = $key;
        } else if (is_string($key)) {
            if (file_exists($key) && is_file($key)) {
                $pem = $subjectKey = file_get_contents($key);
            } else {
                $pem = $subjectKey = $key;
            }
        } else {
            throw new \RuntimeException('No remaining options for parsing public key');
        }

        $public = openssl_pkey_get_public($subjectKey);
        if (false === $public || !is_resource($public)) {
            throw new \RuntimeException('Unable to parse publicc key');
        }

        $this->pem = $pem;
        echo "public key has str: ".$pem.PHP_EOL;
        $this->public = $public;

    }

    /**
     * @param string $data
     * @param string $signature
     * @return int
     */
    public function verifyData($data, $signature)
    {
        return $this->verifySha256(hash('sha256', $data, true), $signature);
    }

    /**
     * @param string $data
     * @param string $signature
     * @return int
     */
    public function verifySha256($data, $signature)
    {
        return openssl_verify($data, $signature, $this->public, OPENSSL_ALGO_SHA256) === 1;
    }

    /**
     * @return string
     */
    public function getPemFormatted()
    {
        return $this->pem;
    }

    /**
     * @return string
     */
    public function getDerFormatted()
    {
        $der= $this->pem2der($this->getPemFormatted());;
        return substr($der, 22);
    }

    /**
     * @param string $pem_data
     * @return string
     */
    private function pem2der($pem_data)
    {
        $begin = "PUBLIC KEY-----";
        $end   = "-----END";
        $pem_data = substr($pem_data, strpos($pem_data, $begin)+strlen($begin));
        $pem_data = substr($pem_data, 0, strpos($pem_data, $end));
        $der = base64_decode($pem_data);
        return $der;
    }

    /**
     * @return string
     */
    public function getOnion()
    {
        $pem = $this->getPemFormatted();
        $der = $this->pem2der($pem);
        $substr = substr($der, 22);
        $hash = substr(hash('sha1', $substr, true), 0, 10);
        return strtolower(Base32::encode($hash));
    }
}