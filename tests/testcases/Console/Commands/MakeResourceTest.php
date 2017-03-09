<?php

namespace Testcases\Console\Commands;

use Artisan;
use Tests\TestCase;

class MakeResourceTest extends TestCase
{
    public function testRunCommand()
    {
        $exitCode = Artisan::call('make:resource');
        $this->assertEquals(0, $exitCode);
    }
}
