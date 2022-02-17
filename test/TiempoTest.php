<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use Tiempo\Tiempo;

class Test01Test extends TestCase
{
    public function test1 () {
        $expected = 61000;
        $result = (new Tiempo())->toMilliseconds(0,1,1);
        $this->assertEquals($result, $expected );
    }

    public function test2 () {
        $expected = 0;
        $result = (new Tiempo())->toMilliseconds(0,0,0);
        $this->assertEquals($result, $expected );
    }

    public function test3 () {
        $expected = 3601000;
        $result = (new Tiempo())->toMilliseconds(1,0,1);
        $this->assertEquals($result, $expected );
    }

    public function test4 () {
        $expected = 3661000;
        $result = (new Tiempo())->toMilliseconds(1,1,1);
        $this->assertEquals($result, $expected );
    }

    public function test5 () {
        $expected = 3600000;
        $result = (new Tiempo())->toMilliseconds(1,0,0);
        $this->assertEquals($result, $expected );
    }

    public function test6 () {
        $expected = 60000;
        $result = (new Tiempo())->toMilliseconds(0,1,0);
        $this->assertEquals($result, $expected );
    }

    public function test7 () {
        $expected = 1000;
        $result = (new Tiempo())->toMilliseconds(0,0,1);
        $this->assertEquals($result, $expected );
    }

    public function test8 () {
        $expected = 86399000;
        $result = (new Tiempo())->toMilliseconds(23,59,59);
        $this->assertEquals($result, $expected );
    }

    public function test9 () {
        $expected = -1;
        $result = (new Tiempo())->toMilliseconds(24,10,10);
        $this->assertEquals($result, $expected );
    }

    public function test10 () {
        $expected = -1;
        $result = (new Tiempo())->toMilliseconds(1,60,0);
        $this->assertEquals($result, $expected );
    }

    public function test11 () {
        $expected = -1;
        $result = (new Tiempo())->toMilliseconds(0,0,60);
        $this->assertEquals($result, $expected );
    }

    public function test12 () {
        $expected = 55506000;
        $result = (new Tiempo())->toMilliseconds(15,25,6);
        $this->assertEquals($result, $expected );
    }

    public function test13 () {
        $expected = 85510000;
        $result = (new Tiempo())->toMilliseconds(23,45,10);
        $this->assertEquals($result, $expected );
    }

    public function test14 () {
        $expected = 37508000;
        $result = (new Tiempo())->toMilliseconds(10,25,8);
        $this->assertEquals($result, $expected );
    }

    public function test15 () {
        $expected = 2400000;
        $result = (new Tiempo())->toMilliseconds(0,40,0);
        $this->assertEquals($result, $expected );
    }

    public function test16 () {
        $expected = -1;
        $result = (new Tiempo())->toMilliseconds(-1,12,0);
        $this->assertEquals($result, $expected );
    }

    public function test17 () {
        $expected = -1;
        $result = (new Tiempo())->toMilliseconds(50,-1,16);
        $this->assertEquals($result, $expected );
    }

    public function test18 () {
        $expected = -1;
        $result = (new Tiempo())->toMilliseconds(39,45,-1);
        $this->assertEquals($result, $expected );
    }

    public function test19 () {
        $expected = 21966000;
        $result = (new Tiempo())->toMilliseconds(6,6,6);
        $this->assertEquals($result, $expected );
    }

    public function test20 () {
        $expected = -1;
        $result = (new Tiempo())->toMilliseconds(99,76,60);
        $this->assertEquals($result, $expected );
    }
}