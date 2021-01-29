<?php

namespace Brain\Games\Games;

class Prime extends \Brain\Games\Engine
{
    public function getTask()
    {
        return "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    }

    public function getQuestion()
    {
        $this->question = rand(1, 3600);
        $this->right_answer = ($this->isPrime($this->question)) ? 'yes' : 'no';
        return $this->question;
    }
    
    private function isPrime($num)
    {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
