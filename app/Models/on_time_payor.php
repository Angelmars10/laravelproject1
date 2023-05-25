<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class on_time_payor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'data_transaction', 'amount', 'remarks'];
}
