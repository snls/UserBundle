<?php

namespace UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdministrationRoleControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/roles');
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/role/create');
    }

    public function testRead()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/role/read');
    }

    public function testUpdate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/role/update');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/role/delete');
    }

}
