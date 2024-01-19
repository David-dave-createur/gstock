<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\InvoicesAndPayments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinancialTransaction extends Model
{
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function invoicesAndPayments()
    {
        return $this->hasMany(InvoicesAndPayments::class);
    }
}