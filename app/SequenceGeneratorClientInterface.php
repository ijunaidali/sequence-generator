<?php

namespace SequenceGenerator;

/**
 * Interface SequenceGeneratorClientInterface
 * @package SequenceGenerator
 */
interface SequenceGeneratorClientInterface
{
    /**
     * @param $limit
     * @return string
     */
    public function handleRequest($limit);
}