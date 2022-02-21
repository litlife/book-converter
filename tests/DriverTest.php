<?php

namespace Litlife\BookConverter\Tests;

use Litlife\BookConverter\AbiwordDriver;
use Litlife\BookConverter\BookConverter;
use Litlife\BookConverter\CalibreDriver;
use Litlife\BookConverter\Driver;
use PHPUnit\Framework\TestCase;

class DriverTest extends TestCase
{
	public function testBinPath()
	{
		$driver = new Driver();
		$driver->setBinPath('my-bin-path');
		$this->assertEquals('my-bin-path', $driver->getBinPath());
	}

    public function testInputFormats()
    {
        $array = ['format'];

        $driver = new Driver();
        $driver->setInputFormats($array);
        $this->assertEquals($array, $driver->getInputFormats());
    }

    public function testOutputFormats()
    {
        $array = ['format'];

        $driver = new Driver();
        $driver->setOutputFormats($array);
        $this->assertEquals($array, $driver->getOutputFormats());
    }
}
