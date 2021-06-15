<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget_expensetype extends Model
{
    use SoftDeletes, HasFactory;
    public $table = 'budget_expensetypes';
}