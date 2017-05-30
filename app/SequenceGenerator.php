<?php

namespace SequenceGenerator;

class SequenceGenerator implements SequenceGeneratorInterface
{
    private $x;

    public function __construct($x)
    {
        $this->x = $x;
    }

    public function generateSequence()
    {
        return '123456789';
    }
}