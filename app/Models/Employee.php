<?php

namespace App\Models;

use App\Models\Attendance;
use App\Models\TeamMember;
use App\Models\InternalMessage;
use App\Models\InvoicesAndPayments;
use App\Models\FinancialTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class);
    }

    public function internalMessagesSent()
    {
        return $this->hasMany(InternalMessage::class, 'sender_id');
    }

    public function internalMessagesReceived()
    {
        return $this->hasMany(InternalMessage::class, 'receiver_id');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function financialTransactions()
    {
        return $this->hasMany(FinancialTransaction::class);
    }

    public function invoicesAndPayments()
    {
        return $this->hasMany(InvoicesAndPayments::class);
    }
}