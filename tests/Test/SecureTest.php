<?php

namespace Test;

use Deimos\Secure\Secure;

class SecureTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Secure
     */
    protected $secure;

    /**
     * @var string
     */
    protected $text = 'Те́кстовые да́нные (также те́кстовый форма́т) — представление информации строкового типа...';

    public function setUp()
    {
        $this->secure = new Secure();

        $this->secure->iv('_gPuZWJ/Tm^1!y4d');
        $this->secure->algorithm('AES-256-CFB1');
        $this->secure->secret('MTNE]8Gpz&B709%yXDQ1[4.k!#\';n}Pu-hvU&mK{?dlSoxg:s/qab"C@FV6HR,*t');
    }

    public function testSecure()
    {
        $storage = $this->secure->encrypt($this->text);

        $this->assertNotFalse($storage);
        $this->assertEquals($this->text, $this->secure->decrypt($storage));
    }

}