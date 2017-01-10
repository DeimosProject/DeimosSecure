<?php

namespace Deimos\Secure;

use Deimos\Secure\Extension\Algorithm;
use Deimos\Secure\Extension\IV;
use Deimos\Secure\Extension\Secret;

class Secure
{

    use IV;
    use Secret;
    use Algorithm;

    /**
     * @param $value
     *
     * @return $this
     */
    public function algorithm($value)
    {
        return $this->setAlgorithm($value);
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function secret($value)
    {
        return $this->setSecret($value);
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function iv($value)
    {
        return $this->setIV($value);
    }

    /**
     * @param string $data
     *
     * @return string
     */
    public function encrypt($data)
    {
        return openssl_encrypt($data, $this->algorithm, $this->secret, 0, $this->iv);
    }

    /**
     * @param string $data
     *
     * @return string
     */
    public function decrypt($data)
    {
        return openssl_decrypt($data, $this->algorithm, $this->secret, 0, $this->iv);
    }

}