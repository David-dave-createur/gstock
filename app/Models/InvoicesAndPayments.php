<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\FinancialTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoicesAndPayments extends Model
{
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function financialTransaction()
    {
        return $this->belongsTo(FinancialTransaction::class);
    }
}