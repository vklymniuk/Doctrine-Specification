<?php

namespace VK\DoctrineSpecification\QueryModifier;

use Doctrine\ORM\QueryBuilder;

/**
 * Adds to the query LIMIT construction
 */
class Limit extends AbstractQueryModifier
{
    /**
     * @var int limit
     */
    protected $limit;

    /**
     * @param int $limit
     */
    public function __construct(int $limit)
    {
        $this->limit = $limit;
    }

    /**
     * {@inheritdoc}
     */
    public function modify(QueryBuilder $queryBuilder, string $dqlAlias)
    {
        $queryBuilder->setMaxResults($this->limit);
    }
}
