<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

use function Laravel\Prompts\search;

class SearchBox extends Component
{
    public $search = '';

    #[Url()]
    public function update()
    {
        $this->dispatch('search', search: $this->search);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
