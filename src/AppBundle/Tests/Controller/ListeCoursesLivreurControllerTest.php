<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ListeCoursesLivreurControllerTest extends WebTestCase
{
    public function testListecourseslivreur()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListeCoursesLivreur');
    }

}
