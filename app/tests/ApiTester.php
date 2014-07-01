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
     * @param $count
     */
    protected function times($count)
    {
        $this->times = $count;
    }
} 