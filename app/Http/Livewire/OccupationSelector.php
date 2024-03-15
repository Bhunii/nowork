<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Occupation;
use App\Models\Functions;

class OccupationSelector extends Component
{
    public $selectedOccupation = '';
    public $functions = [];

    public function render()
    {
        $occupations = Occupation::all();

        return view('livewire.occupation-selector', compact('occupations'));
    }

    public function updatedSelectedOccupation($selectedOccupation)
    {
        if($selectedOccupation) {
            $function = Functions::where('code_occupation', $selectedOccupation)->first();

            if ($function) {
                $this->functions = $function;
            } else {
                $this->functions = [];
            }
        } else {
            $this->functions = [];
        }
    }

}
