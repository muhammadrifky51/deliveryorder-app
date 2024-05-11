<?php

namespace App\Livewire;

use App\Models\DeliveryOrderDocDetail;
use Livewire\Component;

class DynamicInputs extends Component
{
    public $docitems;

    public function render()
    {
        return view('livewire.dynamic-inputs');
    }

    public function mount()
    {
        $this->docitems = DeliveryOrderDocDetail::all();
    }

    public function add()
    {
        $this->docitems->push(new DeliveryOrderDocDetail());
    }
}
