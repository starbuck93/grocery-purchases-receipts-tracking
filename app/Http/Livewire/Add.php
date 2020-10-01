<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Add extends Component
{
    public $var;

    public function submit()
    {
        // $validatedData = $this->validate();
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.add');
    }
}
