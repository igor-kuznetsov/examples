<?php

namespace Examples\Patterns\Builder;

use Examples\Patterns\Builder\Parts\Vehicle;

/**
 * Interface BuilderInterface
 * @package Examples\Patterns\Builder
 */
interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}