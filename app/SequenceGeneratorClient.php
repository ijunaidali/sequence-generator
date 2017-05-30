<?php

namespace SequenceGenerator;

/**
 * Class SequenceGeneratorClient
 * @package SequenceGenerator
 */
class SequenceGeneratorClient implements SequenceGeneratorClientInterface
{
    /**
     * @var SequenceGeneratorInterface
     */
    private $sequenceGenerator;

    /**
     * SequenceGeneratorClient constructor.
     * @param SequenceGeneratorInterface $sequenceGenerator
     */
    public function __construct(
        SequenceGeneratorInterface $sequenceGenerator
    )
    {
        $this->sequenceGenerator = $sequenceGenerator;
    }

    /**
     * @param $limit
     * @return null|string
     */
    public function handleRequest($limit)
    {
        return $this->sequenceGenerator->generateSequence($limit);
    }
}