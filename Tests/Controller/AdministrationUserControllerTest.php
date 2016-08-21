<?php

namespace UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdministrationUserControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/users');
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/user/create');
    }

    public function testUpdate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/user/update');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/user/delete');
    }

    public function testRead()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/user/read');
    }

}
