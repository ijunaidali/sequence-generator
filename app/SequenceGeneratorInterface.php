<?php

namespace SequenceGenerator;

interface SequenceGeneratorInterface
{
    /**
     * @return string
     */
    public function generateSequence();
}