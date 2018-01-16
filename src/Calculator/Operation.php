<?php
/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 12:23
 */

namespace Calculator;


use Calculator\Exception\CalculatorException;
use Calculator\interfaces\OperationInterface;
use Calculator\Exception\DivideOperatorException;
use Calculator\interfaces\AddOperatorInterface;
/**
 * The main program execution here
 */
class Operation {

    protected $calculator;
    protected $output;

    /**
     * Operation constructor.
     * @param Calculator $calculator
     * @param Output $output
     */
    public function __construct(Calculator $calculator, Output $output)
    {
        $this->calculator = $calculator;
        $this->output = $output;
    }

    /**
     * @param array $operands
     * @param OperationInterface $operator
     * @return string
     */
    public function operation(array $operands, OperationInterface $operator)
    {
        try {
            if ($this->calculator->setOperands($operands)) {
                $this->output->show($this->calculator->calculate($operator));
            }
        }catch (DivideOperatorException $divideOperatorException) {
                return $divideOperatorException->getMessage();
        }catch (CalculatorException $CalculatorException){
            return $CalculatorException->getMessage();
        }
    }

    /**
     * @param array $operands
     * @param $operator
     * @return string
     */
    public function calculate(array $operands,$operator)
    {
        try {
            if ($this->calculator->setOperands($operands)) {

                switch ($operator) {
                    case '+':
                        $this->output->show($this->calculator->add(new AddOperator));
                        break;
                    case '-':
                        $this->output->show($this->calculator->subtract(new SubtractOperator));
                        break;
                }

            }
        }catch (DivideOperatorException $divideOperatorException) {
            return $divideOperatorException->getMessage();
        }catch (CalculatorException $CalculatorException){
            return $CalculatorException->getMessage();
        }
    }

}

