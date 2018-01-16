<?php
/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 12:19
 */

namespace Calculator;

use Calculator\interfaces\OperationInterface;
use Calculator\Exception\DivideOperatorException;

// Divide
class DivideOperator implements OperationInterface {

    /**
     * @param array $operands
     * @return float|int
     * @throws DivideOperatorException
     */
    public function operation(array $operands)
    {
        if($operands[1] == 0) {
            throw new DivideOperatorException('[Error] division by zero!');
        }
        return $operands[0] / $operands[1];
    }
}