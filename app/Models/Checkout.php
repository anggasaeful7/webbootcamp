<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factophpries\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'camp_id', 'card
    _number', 'expired', 'cvc', 'is_paid'];
}
