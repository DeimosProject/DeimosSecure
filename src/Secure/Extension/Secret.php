<?php

namespace Deimos\Secure\Extension;

trait Secret
{

    /**
     * Server secret key
     *
     * @var string
     */
    private $secret = 'MTNE]8Gpz&B709%yXDQ1[4.k!#\';n}Pu-hvU&mK{?dlSoxg:s/qab"C@FV6HR,*t';

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