<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class Engine
{
    protected Cli $user;
    protected string $question;
    protected string $right_answer;
    protected string $user_answer;
    protected int $tries = 3;

    public function __construct()
    {
        line('Welcome to the Brain Games!');
        $name = prompt('May I have your name?');
        $this->user = new Cli($name);

        line("Hello, %s!", $name);
    }

    public function printQuestions()
    {
        for ($i = 0; $i < $this->tries; $i++) {
            $question = $this->getQuestion();
            $this->setUserAnswer();
            if (!$this->isUserCorrect()) {
                $this->wrong();
            }
            $this->correct();
        }
    }

    public function startGame()
    {
        $task = $this->getTask();
        line($task);
    }

    public function success()
    {
        $name = $this->user->getName();
        line("Congratulations, {$name}!");
    }

    public function setUserAnswer()
    {
        $answer = prompt("Question: {$this->question}");
        $this->user_answer = $answer;
        line("Your answer: {$answer}");
    }

    public function isUserCorrect()
    {
        return ($this->user_answer == $this->right_answer);
    }

    public function getRightAnswer()
    {
        return $this->right_answer;
    }

    public function wrong()
    {
        $name = $this->user->getName();
        line("'{$this->user_answer}' is wrong answer ;(. Correct answer was '{$this->right_answer}'.");
        die("Let's try again, {$name}!");
    }

    public function correct()
    {
        line("Correct!");
    }
}
