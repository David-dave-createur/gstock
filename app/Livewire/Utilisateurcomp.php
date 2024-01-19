<?php

namespace App\Livewire;

use Livewire\Component;

class Utilisateurcomp extends Component{

   

    public function render()
    {
        return view('livewire.utilisateur.index')
        ->extends("layouts.master")
        ->section("contenu");
    }
}