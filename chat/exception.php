<?php 


function foo($arg) {
    $func = $arg;
    if (!is_callable($func)) {
        throw new BadFunctionCallException('Function ' . $func . ' is not callable');
    }
}
foo('sam');

?>