<div wire:poll.60s  ="getNewQuotes">
    @foreach($quotes as $quote)
        {{ $quote }}<br>
    @endforeach

     <button class="btn btn-success" wire:click="getNewQuotes">Refresh</button>
</div>
