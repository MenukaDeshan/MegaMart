<?php

namespace App\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAddAttributesComponent extends Component
{
    public $name;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            "name" => "required"
        ]);
    }



    public function storeAttribute()
    {
        $this->validate([
            "name" => "required"
        ]);
        $pattribute = new ProductAttribute();
        $pattribute->name = $this->name;
        $pattribute->save();
        session()->flash('message','Attribute has been created successfully!');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-attributes-component')->layout('layouts.base');
    }
}
