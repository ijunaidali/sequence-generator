<?php

namespace SequenceGenerator;


class SequenceGeneratorClient implements SequenceGeneratorClientInterface
{
    private $sequenceGenerator;

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