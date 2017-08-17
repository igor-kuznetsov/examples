<?php

namespace Examples\Patterns\Builder;

use Examples\Patterns\Builder\Parts\Vehicle;

/**
 * Class Director
 * @package Examples\Patterns\Builder
 */
class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
