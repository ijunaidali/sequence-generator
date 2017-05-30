<?php

namespace SequenceGenerator;

/**
 * Interface SequenceGeneratorInterface
 * @package SequenceGenerator
 */
interface SequenceGeneratorInterface
{
    /**
     * @param $limit
     * @return string
     */
    public function generateSequence($limit);
}