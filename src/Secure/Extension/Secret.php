<?php

namespace Deimos\Secure\Extension;

trait Secret
{

    /**
     * Server secret key
     *
     * @var string
     */
    private $secret;

    /**
     * @param string $value
     *
     * @return $this
     */
    protected function setSecret($value)
    {
        $this->secret = $value;

        return $this;
    }

}