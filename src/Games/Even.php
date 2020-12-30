<?php

namespace Brain\Games\Games;

class Even extends \Brain\Games\Engine
{
    public function getTask()
    {
        return "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    }

    public function getQuestion()
    {
        $this->question = rand(1, 99);
        $this->right_answer = (($this->question % 2) == 0) ? 'yes' : 'no';
        return $this->question;
    }
}
