<?php

namespace SequenceGenerator;

class SequenceGenerator implements SequenceGeneratorInterface
{
    public function __construct()
    {
    }

    public function generateSequence($limit)
    {
        $sequence = null;

        for ($i = 1; $i <= $limit; $i++) {
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