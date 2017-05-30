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
        $sequence = null;

        for ($i = 1; $i <= $this->x; $i++) {
            if ($i % 3 == 0) {
                $sequence .= 'Fizz';
            } else if ($i % 5 == 0) {
                $sequence .= 'Buzz';
            } else if ($i % 3 == 0 && $i % 5 == 0) {
                $sequence .= 'FizzBuzz';
            } else {
                $sequence .= $i;
            }
        }

        return $sequence;
    }
}