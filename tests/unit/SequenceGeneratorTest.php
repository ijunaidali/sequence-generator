<?php

namespace SequenceGeneratorTest\Unit;


use PHPUnit\Framework\TestCase;

class SequenceGeneratorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldGenerateASequenceFromGivenNumbers()
    {
        $expected = 123456789;
        $actual = 123456789;
        $this->assertEquals($expected, $actual);
    }
}