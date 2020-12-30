<?php

namespace Brain\Games;

class Even
{
    private int $number;
    private string $right_answer;
    private string $user_answer;

    public function __construct()
    {
        $this->number = rand(1, 99);
        $this->right_answer = (($this->number % 2) == 0) ? 'yes' : 'no';
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setUserAnswer($answer)
    {
        $this->user_answer = $answer;
    }

    public function isUserCorrect()
    {
        return ($this->user_answer == $this->right_answer);
    }

    public function getRightAnswer()
    {
        return $this->right_answer;
    }
}
