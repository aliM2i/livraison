<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ListeCoursesClientControllerTest extends WebTestCase
{
    public function testListecoursesclients()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListeCoursesClients');
    }

}
