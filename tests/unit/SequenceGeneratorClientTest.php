<?php

namespace SequenceGeneratorTest\Unit;

use PHPUnit\Framework\TestCase;
use SequenceGenerator\SequenceGenerator;
use SequenceGenerator\SequenceGeneratorClient;

class ClientTest extends TestCase
{


    /**
     * @test
     */
    public function sequenceGeneratorClientShouldUseSequenceGenerator()
    {
        $expected = '12Fizz4BuzzFizz78Fizz';

        $sequenceGeneratorClient = new SequenceGeneratorClient(
            new SequenceGenerator
        );

        $actual = $sequenceGeneratorClient->handleRequest(9);

        $this->assertEquals($expected, $actual);

    }
}