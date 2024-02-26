<?php
namespace App\Services;

class ValueChecker
{
    public function check(array $values): bool
    {
        $filteredValues = array_filter($values, function ($value) {
            return $value < 0;
        });

        return empty($filteredValues);
    }
}
