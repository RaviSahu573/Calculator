<?php
namespace Calculator;

require_once "vendor/autoload.php";

use Calculator\Operation;
use Calculator\Calculator;

/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 13:07
 */
$calculator = new Operation(new \Calculator\Calculator(), new Output());
$calculator->calculate(array(2, 6), "+");
$calculator->calculate(array(1, 3), "-");
$calculator->operation(array(5, 2), new MultiplyOperator);
$calculator->operation(array(6, 3), new DivideOperator);