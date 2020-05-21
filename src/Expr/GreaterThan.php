<?php

namespace VK\DoctrineSpecification\Expr;

/**
 * Adds a condition: value > field
 */
class GreaterThan extends Comparison
{
    /**
     * @param string      $field
     * @param mixed       $value
     * @param string|null $dqlAlias
     */
    public function __construct(string $field, $value, string $dqlAlias = null)
    {
        parent::__construct(self::GT, $field, $value, $dqlAlias);
    }
}
