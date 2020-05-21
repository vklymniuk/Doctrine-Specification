<?php

namespace VK\DoctrineSpecification\QueryModifier;

/**
 * Adds to the query LEFT JOIN construction
 */
class LeftJoin extends AbstractJoin
{
    /**
     * {@inheritdoc}
     */
    protected function getJoinType(): string
    {
        return 'leftJoin';
    }
}
