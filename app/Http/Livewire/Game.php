<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Game extends Component
{
    public ?string $userChoice;

    public function choose($choice)
    {
        $this->userChoice = $choice;
    }

    public function render()
    {
        return view('livewire.game');
    }
}
