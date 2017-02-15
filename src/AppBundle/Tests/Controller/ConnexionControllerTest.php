<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConnexionControllerTest extends WebTestCase
{
    public function testConnexion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Connexion');
    }

}
