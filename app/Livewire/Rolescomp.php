<?php

namespace App\Livewire;

use App\Models\Role;
use Carbon\Carbon;
use Livewire\Component;

class Rolescomp extends Component
{
   public function render()
    {
        Carbon::setLocale('fr');

        


        return view('livewire.role_permission.role')
        ->extends("layouts.master")
        ->section("contenu");



    }
}