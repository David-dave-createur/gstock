<?php

namespace App\Models;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class);
    }
}