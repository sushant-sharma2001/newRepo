<?php
// namespace Tests\Feature;
use Tests\Testcase;

class ExampleTest extends Testcase
{
    public function testStringContains()
    {
        $string = "Hello, World!";
        $this->assertStringContainsString('World', $string, 'The string does not contain the expected substring.');
    }
}
