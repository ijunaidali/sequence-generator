<?php

namespace SequenceGeneratorTest\Unit;

use PHPUnit\Framework\TestCase;
use SequenceGenerator\SequenceGenerator;

class SequenceGeneratorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldGenerateASequenceFromGivenNumbers()
    {
        $expected = '12Fizz4BuzzFizz78Fizz';

        $sequenceGenerator = new SequenceGenerator(9);

        $actual = $sequenceGenerator->generateSequence();

        $this->assertEquals($expected, $actual);
    }
}