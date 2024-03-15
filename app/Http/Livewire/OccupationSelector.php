<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Occupation;
use App\Models\Functions;

class OccupationSelector extends Component
{
    public $selectedOccupation;
    public $functions = [];

    public function render()
    {
        $occupations = Occupation::select('code_occupation','name')->get();

        return view('livewire.occupation-selector', compact('occupations'));
    }

    public function updatedSelectedOccupation($selectedOccupation)
    {
        if($selectedOccupation) {
            $this->functions = Functions::where('code_occupation', $selectedOccupation)->get();
        }else{
            $this->functions = [];
        }
    }
}
