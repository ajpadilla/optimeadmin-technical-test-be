<?php


namespace Technical\Optime\Customers;


use Technical\Optime\ExerciseFour;

class GoldClient implements ExerciseFour
{
    private $double_points = 2;

    /**
     * @inheritDoc
     */
    public function pointCalculator(int $points, ExerciseFour $user_level): int
    {
        return $points * $user_level->getDoublePoints();
    }

    /**
     * @return int
     */
    public function getDoublePoints(): int
    {
        return $this->double_points;
    }
}