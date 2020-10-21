<?php
namespace Tests;

use geocoding\Locator;
use \InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class LocatorTest extends TestCase
{
    public function testSuccess():void
    {
        $locator = new Locator();
        $location = $locator->locate('Киев, Гарматная 57');

        self::assertNotNull($location);
        self::assertEquals('Украина', $location->getCountry());
        self::assertEquals('Киев', $location->getState());
        self::assertEquals('Киев', $location->getCity());
    }

    public function testNotFound():void
    {
        $locator = new Locator();
        $location = $locator->locate('Not found location');
        self::assertNull($location);
    }

    public function testEmpty():void
    {
        $locator = new Locator();
        $this->expectException(InvalidArgumentException::class);
        $locator->locate('');
    }



}