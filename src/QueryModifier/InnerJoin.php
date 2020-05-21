<?php

namespace VK\DoctrineSpecification\QueryModifier;

/**
 * Adds to the query INNER JOIN construction
 */
class InnerJoin extends AbstractJoin
{
    /**
     * {@inheritdoc}
     */
    protected function getJoinType(): string
    {
        return 'innerJoin';
    }
}
