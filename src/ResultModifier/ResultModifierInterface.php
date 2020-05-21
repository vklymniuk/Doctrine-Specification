<?php

namespace VK\DoctrineSpecification\ResultModifier;

use Doctrine\ORM\AbstractQuery;

/**
 * Interface ResultModifierInterface
 */
interface ResultModifierInterface
{
    /**
     * @param AbstractQuery $query
     */
    public function modify(AbstractQuery $query);
}
