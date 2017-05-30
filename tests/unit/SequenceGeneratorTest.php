<?php

namespace SequenceGeneratorTest\Unit;

use PHPUnit\Framework\TestCase;
use SequenceGenerator\SequenceGenerator;

/**
 * Class SequenceGeneratorTest
 * @package SequenceGeneratorTest\Unit
 */
class SequenceGeneratorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldGenerateASequenceFromGivenNumbers()
    {
        $expected = '12Fizz4BuzzFizz78Fizz';

        $sequenceGenerator = new SequenceGenerator();

        $actual = $sequenceGenerator->generateSequence(9);

        $this->assertEquals($expected, $actual);
    }
}