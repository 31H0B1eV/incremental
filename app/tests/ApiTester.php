<?php

use Faker\Factory as Faker;

/**
 * Class ApiTester
 */
class ApiTester extends TestCase {

    /**
     * @var
     */
    protected $fake;

    /**
     * @var int
     */
    protected $times = 1;

    /**
     *
     */
    function __construct()
    {
        $this->faker = Faker::create();
    }

    /**
     * Setup database for each test
     */
//    public function setUp()
//    {
//        parent::setUp();
//
//        $this->app['artisan']->call('migrate');
//    }

    /**
     * @param $count
     * @return $this
     */
    protected function times($count)
    {
        $this->times = $count;

        return $this;
    }

    /**
     * @param $uri
     * @return string
     */
    protected function getJson($uri)
    {
        return json_encode($this->call('GET', $uri)->getContent());
    }
} 