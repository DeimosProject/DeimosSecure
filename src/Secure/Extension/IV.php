<?php

namespace Deimos\Secure\Extension;

trait IV
{

    /**
     * Encrypt/Decrypt IV, only works if PHP version >= 5.3.3
     * Must be 16 bytes long
     *
     * @var string
     */
    private $iv = '_gPuZWJ/Tm^1!y4d';

    /**
     * @param string $value
     *
     * @return $this
     */
    protected function setIV($value)
    {
        $this->iv = $value;

        return $this;
    }

}