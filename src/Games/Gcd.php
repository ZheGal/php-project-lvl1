<?php

namespace Brain\Games\Games;

class Gcd extends \Brain\Games\Engine
{
    public function getTask()
    {
        return "Find the greatest common divisor of given numbers.";
    }

    public function getQuestion()
    {
        $rand_a = rand(1, 75);
        $rand_b = $rand_a + rand(10, 50);
        $this->question = "{$rand_a} {$rand_b}";
        echo $rand_a . " " . $rand_b . "\n";
        $this->right_answer = $this->gcd($rand_a, $rand_b);
        return $this->question;
    }

    private function gcd ($a, $b) {
        return $b ? $this->gcd($b, $a % $b) : $a;
    }
}
