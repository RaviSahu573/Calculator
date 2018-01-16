<?php
/**
 * Created by PhpStorm.
 * User: RaviSahu ( @RaviSahu )
 * Date: 12-01-2018
 * Time: 12:21
 */

namespace Calculator;


/**
 * The output format
 */
class Output {

    /**
     * @param $result
     */
    public function show($result)
    {
        echo "The final result is: " . $result . "\n";
    }
}