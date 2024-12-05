<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Lunch as LunchModel;

class Lunch extends Component
{
    public function render()
    {
        $lunch = LunchModel::all();
        return view('livewire.lunch', ['lunch' => $lunch]);
    }
}
