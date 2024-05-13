<?php

namespace App\Livewire;

use App\Models\TempItem;
use Livewire\Component;

class DynamicInputs extends Component
{
    public $tempitems;

    public function render()
    {
        return view('livewire.dynamic-inputs');
    }

    public function mount()
    {
        $this->tempitems = TempItem::all();
    }

    public function add()
    {
        $this->tempitems->push(new TempItem());
    }
}
