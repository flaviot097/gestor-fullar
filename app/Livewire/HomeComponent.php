<?php

namespace App\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $alert = "error al ingresar usuario";
    public function render()
    {

        return view('livewire.home-component');
    }
}
