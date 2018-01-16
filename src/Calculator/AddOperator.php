<?php
/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 12:14
 */

namespace Calculator;
use Calculator\interfaces\AddOperatorInterface;

// Add
class AddOperator implements AddOperatorInterface {

    public function add(array $operands)
    {
        return array_sum($operands);
    }
}