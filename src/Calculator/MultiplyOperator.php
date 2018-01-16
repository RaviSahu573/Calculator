<?php
/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 12:18
 */

namespace Calculator;

use Calculator\interfaces\MultiplyOperatorInterface;
use Calculator\interfaces\OperationInterface;

// Multiply
class MultiplyOperator implements OperationInterface {

    /**
     * @param array $operands
     * @return float|int
     */
    public function operation(array $operands)
    {
        return $operands[0] * $operands[1];
    }
}