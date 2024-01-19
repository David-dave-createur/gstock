<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InternalMessage extends Model
{
    public function sender()
    {
        return $this->belongsTo(Employee::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(Employee::class, 'receiver_id');
    }
}