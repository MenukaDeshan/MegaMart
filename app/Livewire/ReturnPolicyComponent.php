<?php

namespace App\Livewire;

use Livewire\Component;

class ReturnPolicyComponent extends Component
{
    public function render()
    {
        return view('livewire.return-policy-component')->layout('layouts.base');
    }
}
