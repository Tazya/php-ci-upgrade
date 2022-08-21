<?php

namespace Lessons;


class ArrayTasks
{
    /**
     * Напишите реализацию метода суммирования массива чисел
     *
     * @param  int[] $integers
     * @return int
     */
    public function sumOfArray(array $integers): int
    {
        $sum = 0;

        foreach ($integers as $integer) {
            $sum += $integer;
        }

        return $sum;
    }
}
