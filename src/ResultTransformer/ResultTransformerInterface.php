<?php

namespace VK\DoctrineSpecification\ResultTransformer;

/**
 * Interface ResultTransformweInterface
 */
interface ResultTransformerInterface
{
    /**
     * @param array|mixed $result
     */
    public function transform($result);
}
