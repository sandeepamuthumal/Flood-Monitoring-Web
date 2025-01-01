<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;

class SensorData extends Component
{
    public $cities = [];

    public function render()
    {
        $this->cities = City::where('status',1)->get();
        
        return view('livewire.sensor-data');
    }
}
