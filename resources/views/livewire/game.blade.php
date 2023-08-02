<div>
    <h2>Welcome to the game!</h2>
    @livewire('user-name')

    <div class="choices">
        <div>
            <h3 class="choices__head">Your choice:</h3>
            <div>
                @include('livewire.partials.user-button', ['buttonName' => \App\Http\Livewire\Game::ROCK])
            </div>
            <div>
                @include('livewire.partials.user-button', ['buttonName' => \App\Http\Livewire\Game::PAPER])
            </div>
            <div>
                @include('livewire.partials.user-button', ['buttonName' => \App\Http\Livewire\Game::SCISSORS])
            </div>
        </div>
        <div>
            <h3 class="choices__head">Opponent choice:</h3>
            <div>
                @include('livewire.partials.opponent-button', ['buttonName' => \App\Http\Livewire\Game::ROCK])
            </div>
            <div>
                @include('livewire.partials.opponent-button', ['buttonName' => \App\Http\Livewire\Game::PAPER])
            </div>
            <div>
                @include('livewire.partials.opponent-button', ['buttonName' => \App\Http\Livewire\Game::SCISSORS])
            </div>

            Opponent choice hidden
        </div>
    </div>   
    
    <p class="game-result">{{ $userResult }}</p>
</div>
