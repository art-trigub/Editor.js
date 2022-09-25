<?php

declare(strict_types=1);

namespace App\Repositories\User\Criterion;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\Filter\SQLFilter;


final class GetIdCriterion extends SQLFilter
{


    public function addFilterConstraint(ClassMetadata $targetEntity, $targetTableAlias)
    {

        if ($targetEntity->getReflectionClass()->name != 'App\Entities\User') {
            return '';
        }


        try {
            $statuses = $this->getParameter('userId');
        } catch (\InvalidArgumentException $e) {
            return '';
        }


        if (empty(str_replace("''","",$statuses))) {
            return '';
        }


        return $targetTableAlias.'.id = ' . $this->getParameter('userId');
    }
}