<?php

use Mockery as m;
use Recca0120\Library\Str;
use Recca0120\Library\String\Extensions\FullCase;

class FullCaseTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function test_full_case()
    {
        /*
        |------------------------------------------------------------
        | Arrange
        |------------------------------------------------------------
        */

        $map = FullCase::$fullCaseMap;

        /*
        |------------------------------------------------------------
        | Act
        |------------------------------------------------------------
        */

        /*
        |------------------------------------------------------------
        | Assert
        |------------------------------------------------------------
        */

        foreach ($map as $full => $half) {
            $this->assertSame($full, (string) (new Str($half))->toFullCase());
        }
    }

    public function test_half_case()
    {
        /*
        |------------------------------------------------------------
        | Arrange
        |------------------------------------------------------------
        */

        $map = FullCase::$fullCaseMap;

        /*
        |------------------------------------------------------------
        | Act
        |------------------------------------------------------------
        */

        /*
        |------------------------------------------------------------
        | Assert
        |------------------------------------------------------------
        */

        foreach ($map as $full => $half) {
            $this->assertSame($half, (string) (new Str($full))->toHalfCase());
        }
    }
}
