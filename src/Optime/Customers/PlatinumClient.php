<?php


namespace Technical\Optime\Customers;


use Technical\Optime\ExerciseFour;

class PlatinumClient implements ExerciseFour
{

    private $triple_points = 3;

    /**
     * @inheritDoc
     */
    public function pointCalculator(int $points, ExerciseFour $user_level): int
    {
        return $points * $user_level->getTriplePoints();
    }

    /**
     * @return int
     */
    public function getTriplePoints(): int
    {
        return $this->triple_points;
    }
}