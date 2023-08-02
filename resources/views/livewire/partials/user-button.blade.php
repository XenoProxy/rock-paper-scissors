<button wire:click="choose('{{ $buttonName }}')"
    @if($userChoice) disabled @endif>
    {{ $buttonName }}
</button>