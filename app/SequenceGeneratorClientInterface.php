<?php

namespace SequenceGenerator;


interface SequenceGeneratorClientInterface
{
    /**
     * @param $limit
     * @return string
     */
    public function handleRequest($limit);
}