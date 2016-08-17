<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class DefaultControllerTest extends WebTestCase
{
//    public function testIndex()
//    {
//        $client = static::createClient();
//        $this->assertEquals(200, $client->getResponse()->getStatusCode());
//    }

    public function testShow()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/show');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Products List")')->count()
        );
    }
}
