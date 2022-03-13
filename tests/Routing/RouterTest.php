<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Routing\Router;

class RouterTest extends TestCase {
    /** @test */
    function it_loads_a_routing_file() {
        Router::load(__DIR__ . '/stubs/router/routes.json');
    }
}
