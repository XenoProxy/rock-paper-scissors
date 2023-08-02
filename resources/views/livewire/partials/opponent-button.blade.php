<button disabled
    class="btn btn_disabled btn-opponent-{{$buttonName}}
    @if($gameEnded && $buttonName === $opponentChoice) btn_choosen @endif">
    @lang('game.' . $buttonName)
</button>