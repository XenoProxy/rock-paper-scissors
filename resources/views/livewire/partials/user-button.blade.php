<button wire:click="choose('{{ $buttonName }}')"
    @if($userChoice) disabled @endif
    class="btn"
    >
    {{ $buttonName }}
</button>