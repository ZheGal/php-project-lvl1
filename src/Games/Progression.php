<?php

namespace Brain\Games\Games;

class Progression extends \Brain\Games\Engine
{
    public function getTask()
    {
        return "What number is missing in the progression?";
    }

    public function getQuestion()
    {
        $array = $this->getArrayOfNumbers();
        $right = $array[rand(1, count($array) - 1)];
        $key = array_search($right, $array);
        $array[$key] = '..';

        $this->question = implode(" ", $array);
        $this->right_answer = $right;
        return $this->question;
    }

    private function getArrayOfNumbers()
    {
        $array = [];
        $start = rand(0, 20);
        $step = rand(2, 9);

        for ($i = 0; $i < 10; $i++) {
            $array[] = $start;
            $start += $step;
        }

        return $array;
    }
}
