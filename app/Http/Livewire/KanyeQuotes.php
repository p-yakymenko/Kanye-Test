<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\KanyeAPI;

class KanyeQuotes extends Component
{

    public $quotes;

    public function mount(){
        $this->quotes = KanyeAPI::getQuotes();
    }

    public function getNewQuotes(){
        $this->quotes = KanyeAPI::getQuotes();
    }

    public function render()
    {
        return view('livewire.kanye-quotes');
    }
}
