<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expensetypes extends Model
{
    use SoftDeletes, HasFactory;
    public $table = 'expensetypes';
}