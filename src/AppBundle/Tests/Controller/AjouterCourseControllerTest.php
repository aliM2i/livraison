<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AjouterCourseControllerTest extends WebTestCase
{
    public function testAjoutercourse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AjouterCourse');
    }

}
