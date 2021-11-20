<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_emai()
    {
        $email = Validate::email('c@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('c@@gmail.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url = Validate::url('platzi.com');
        $this->assertFalse($url);
    }
}