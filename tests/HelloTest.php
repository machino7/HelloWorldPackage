<?php

namespace Machine\Hello;

use Machine\Hello\TestCase;

final class HelloTest extends TestCase
{
    public function test()
    {
        $subject = new Hello();

        $this->assertSame('Hello, World!', $subject->to('World'));
        $this->assertSame('Hello, Test!', $subject->to('Test'));
    }
}
