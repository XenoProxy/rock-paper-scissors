<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Game extends Component
{
    public const ROCK = 'rock';
    public const PAPER = 'paper';
    public const SCISSORS = 'scissors';

    private const OPTIONS = ['Rock', 'Paper', 'Scissors'];
   
    private const BEATS = [
        self::ROCK => self::SCISSORS,
        self::SCISSORS => self::PAPER,
        self::PAPER => self::ROCK,
    ];
   
    public ?string $userChoice;
    public ?string $opponentChoice;
    public ?string $userResult;

    public bool $gameEnded = false;

    public function mount()
    {
        $this->opponentChoice = $this->getRandomChoice();
    }

    public function choose($choice)
    {
        $this->userChoice = $choice;
        $this->userResult = $this->getUserResult();
        $this->gameEnded = true;
    }

    public function render()
    {
        return view('livewire.game');
    }

    public function getUserResult()
    {
        if($this->userChoice === $this->opponentChoice){
            return 'draw';
        }
        
        return self::BEATS[$this->userChoice] === $this->opponentChoice ? 'win' : 'loss';
    }

    public function getRandomChoice(): string
    {
        $randomIndex = random_int(0, 2);
        return [self::ROCK, self::PAPER, self::SCISSORS][$randomIndex];
    }
}
