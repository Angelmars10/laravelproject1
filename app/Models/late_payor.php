<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class late_payor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'data_transaction', 'amount', 'remarks'];
}
