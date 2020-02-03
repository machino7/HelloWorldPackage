<?php

namespace Machine\Hello;

final class Hello
{
    public function to($name): string
    {
        return "Hello, {$name}!";
    }
}
