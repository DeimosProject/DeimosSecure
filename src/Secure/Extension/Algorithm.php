<?php

namespace Deimos\Secure\Extension;

trait Algorithm
{

    /**
     * Ref: http://www.php.net/manual/en/function.openssl-get-cipher-methods.php
     *
     * @var string
     */
    private $algorithm = 'AES-256-CTR';

    /**
     * @param string $value
     *
     * @return $this
     */
    protected function setAlgorithm($value)
    {
        $this->algorithm = $value;

        return $this;
    }

}