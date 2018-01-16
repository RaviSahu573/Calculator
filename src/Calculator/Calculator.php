<?php
/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 12:20
 */

namespace Calculator;

use Calculator\interfaces\DivideOperatorInterface;
use Calculator\interfaces\MultiplyOperatorInterface;
use Calculator\interfaces\OperationInterface;
use Calculator\Exception\CalculatorException;
use Calculator\interfaces\AddOperatorInterface;
use Calculator\interfaces\SubtractOperatorInterface;

/**
 * The calculator for real
 */
class Calculator {

    protected $operands;

    /**
     * @param array $operands
     * @return bool
     * @throws CalculatorException
     */
    public function setOperands(array $operands)
    {
        if(count($operands) != 2) {
            throw new CalculatorException('[Error] must be two operands provided');
        }

        $this->operands = $operands;
        return true;
    }

    public function calculate(OperationInterface $operator)
    {
        return $operator->operation($this->operands);
    }


    public function add(AddOperatorInterface $operator)
    {
        return $operator->add($this->operands);
    }
    public function subtract(SubtractOperatorInterface $operator)
    {
        return $operator->calculate($this->operands);
    }

    public function multiply(MultiplyOperatorInterface $operator)
    {
        return $operator->calculate($this->operands);
    }

    public function divide(DivideOperatorInterface $operator)
    {
        return $operator->calculate($this->operands);
    }

}