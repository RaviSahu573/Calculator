<?php
/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 12:13
 */

namespace Calculator\interfaces;


/**
 * Operation Interface
 */
interface OperationInterface {
    public function operation(array $operands);
}