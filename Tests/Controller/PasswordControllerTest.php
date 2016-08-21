<?php

namespace UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PasswordControllerTest extends WebTestCase
{
    public function testEmailreset()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/password/reset');
    }

    public function testSmsreset()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/password/reset/sms');
    }

}
