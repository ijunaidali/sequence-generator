<?php

namespace SequenceGenerator;

interface SequenceGeneratorInterface
{
    /**
     * @param $limit
     * @return string
     */
    public function generateSequence($limit);
}