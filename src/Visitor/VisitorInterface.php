<?php

namespace VK\DoctrineSpecification\Visitor;

use VK\DoctrineSpecification\Specification;
use VK\DoctrineSpecification\SpecificationInterface;

/**
 * VisitorInterface
 */
interface VisitorInterface
{
    /**
     * @param SpecificationInterface $specification
     *
     * @return void
     */
    public function visit(SpecificationInterface $specification): void;
}
