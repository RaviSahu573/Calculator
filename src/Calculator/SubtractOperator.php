<?php
/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 12:15
 */

namespace Calculator;

use Calculator\interfaces\OperationInterface;
use Calculator\interfaces\SubtractOperatorInterface;

// Subtract
class SubtractOperator implements SubtractOperatorInterface {

    public function calculate(array $operands)
    {
        return $operands[0] - $operands[1];
    }
}