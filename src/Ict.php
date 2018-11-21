<?php
namespace Ict;


class Ict
{
    private $key;

    private $environment;

    public function __construct()
    {
    }

    public function check($boot = NULL)
    {

    }

    public function checkKey()
    {
        if (isset($this->boot['infinity_key'])) {
            if (empty($this->boot['infinity_key'])) {
                $this->checkEnvironment();
            } else {
                ddd('detecara dominio');
            }
        } else {
            $this->checkEnvironment();
        }
    }

    public function checkEnvironment()
    {
        if ($this->boot['environment'] == 'dev') {
            return true;
        } else {
            eval(base64_decode("ZGllKCdJdCBjYW4gb25seSBiZSBleGVjdXRlZCBpbiBsb2NhbGhvc3QgYW5kIGRldiBlbnZpcm9ubWVudCcpOw=="));
        }
    }
}