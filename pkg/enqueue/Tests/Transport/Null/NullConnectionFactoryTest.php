<?php

namespace Enqueue\Tests\Transport\Null;

use Enqueue\Psr\PsrConnectionFactory;
use Enqueue\Test\ClassExtensionTrait;
use Enqueue\Transport\Null\NullConnectionFactory;
use Enqueue\Transport\Null\NullContext;
use PHPUnit\Framework\TestCase;

class NullConnectionFactoryTest extends TestCase
{
    use ClassExtensionTrait;

    public function testShouldImplementConnectionFactoryInterface()
    {
        $this->assertClassImplements(PsrConnectionFactory::class, NullConnectionFactory::class);
    }

    public function testCouldBeConstructedWithoutAnyArguments()
    {
        new NullConnectionFactory();
    }

    public function testShouldReturnNullContextOnCreateContextCall()
    {
        $factory = new NullConnectionFactory();

        $context = $factory->createContext();

        $this->assertInstanceOf(NullContext::class, $context);
    }
}
