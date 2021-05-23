<?php

assert(0 === add(0,0));
assert(0 === add(-1, 1));
assert(1 === add(-1, 2));
assert(-1 === add(1, -2));
assert(0 === sub(0, 0));
assert(0 === sub(-1, -1));
assert(1 === sub(-1, -2));
assert(-1 === sub(1, 2));
assert(0 === mult(0, 0));
assert(1 === mult(1, 1));
assert(1.0 === mult(2, 0.5));
assert(-1.0 == mult(1, -1));
assert(0 === div(0, 1));
assert(1 === div(1, 1));
assert(2.5 === div(5, 2));
assert(-2.5 === div(-5, 2));

function add($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function mult($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    return $a / $b;
}

?>