<?php

function revertInteger($number)
{
    $number    = (string) $number;
    $numberLen = strlen($number);
    $numbers   = [];
    for ($i = 0; $i < $numberLen; ++$i) {
        $numbers[] = $number[$i];
    }
    $result = '';
    for ($i = count($numbers) - 1; $i >= 0; $i--) {
        $result .= $numbers[$i];
    }
    $result = (int) $result;
    return ($result > 2147483647 || $result < -2147483648) ? 0 : $result;
}
echo revertInteger(21474);
