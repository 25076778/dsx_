<?php

namespace collections;

/**
 * Returns the minimum value from the collection. If passed an iterator, min will return min value returned by the
 * iterator.
 *
 * @param array $array array of values
 *
 * @return mixed
 *
 */
function min(array $array = [])
{
    return \min($array);
}
