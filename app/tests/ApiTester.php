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
        return json_decode($this->call('GET', $uri)->getContent());
    }

    protected function assertObjectHasAttributes()
    {
        $args = func_get_args();
        $object = array_shift($args);

        foreach ($args as $attribute)
        {
            $this->assertObjectHasAttribute($attribute, $object);
        }
    }
} 