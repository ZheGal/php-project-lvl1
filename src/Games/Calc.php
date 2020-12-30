<?php

namespace Brain\Games\Games;

class Calc extends \Brain\Games\Engine
{
    public function getTask()
    {
        return "What is the result of the expression?";
    }

    public function getQuestion()
    {
        $x = rand(1, 50);
        $y = rand(1, 50);
        $variants = [
            ["{$x} + {$y}", $x + $y],
            ["{$x} - {$y}", $x - $y],
            ["{$x} * {$y}", $x * $y]
        ];
        $variant = $variants[rand(0, count($variants) - 1)];

        $this->question = $variant[0];
        $this->right_answer = $variant[1];
        return $this->question;
    }
}
