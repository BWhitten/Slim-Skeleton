<?php

namespace Tests\Functional;

class ChickenTest extends BaseTestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     */
    public function testGetChicken()
    {
        $response = $this->runApp('GET', '/chicken');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('Marran', (string)$response->getBody());
    }
}
