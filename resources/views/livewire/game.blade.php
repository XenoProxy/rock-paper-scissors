<div>
    <h1>Welcome to the game!</h1>
    @livewire('user-name')

    <div class="choices">
        <h3 class="choices__head">Your choice:</h3>
        <div>
            @include('livewire.partials.user-button', ['buttonName' => 'Rock'])
        </div>
        <div>
            @include('livewire.partials.user-button', ['buttonName' => 'Papper'])
        </div>
        <div>
            @include('livewire.partials.user-button', ['buttonName' => 'Scissors'])
        </div>
    </div>

    Your choice: {{ $userChoice }}
</div>
