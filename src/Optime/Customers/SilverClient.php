<?php


namespace Technical\Optime\Customers;


use Technical\Optime\ExerciseFour;

class SilverClient implements ExerciseFour
{

    private $one_point = 1;

    /**
     * @inheritDoc
     */
    public function pointCalculator(int $points, ExerciseFour $user_level): int
    {
        return $points * $user_level->getOnePoint();
    }

    /**
     * @return int
     */
    public function getOnePoint(): int
    {
        return $this->one_point;
    }
}