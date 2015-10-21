<?php

namespace AppBundle\Tests\Controller;

class RawDefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    private $app;
    
    protected function setUp()
    {
        $this->app = new \AppKernel('test', false);
        $this->app->boot();
    }
    
    public function testUrl($url)
    {
        $request = \Symfony\Component\HttpFoundation\Request::create($url, 'GET');
        $response = $this->app->handle($request);
        
        $this->assertTrue($response->isSuccessful());
    }
}
