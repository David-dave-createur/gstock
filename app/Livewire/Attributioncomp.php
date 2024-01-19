<?php

namespace App\Livewire;

use Livewire\Component;

class Attributioncomp extends Component
{
    public function render()
    {
        return view('livewire.role_permission.attribution')
        ->extends("layouts.master")
        ->section("contenu");
    }
}